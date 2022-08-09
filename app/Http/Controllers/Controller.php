<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Settings;
use App\Models\News;
use App\Models\Catalog;
use App\Models\Service;

use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;
use Auth;

use Illuminate\Support\Facades\View;
// use Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(Request $request)
    {
        date_default_timezone_set('Europe/Moscow');
        setlocale(LC_ALL, 'ru_RU.UTF-8');

        $this->settings = Settings::first();

        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            view()->share('u', $this->user);

            if($this->settings->teh_works && !Auth::check()){
                return response()->view('pages.teh_work');
            }
            return $next($request);
        });

        view()->share('settings', $this->settings);

        $this->news_block = News::where('status', '1')->latest('created_at')->limit(5)->get();
        view()->share('news_block', $this->news_block);

        $this->сatalog_menu = Catalog::where('status', '1')->get();
        view()->share('сatalog_menu', $this->сatalog_menu);

        $this->service_menu = Service::where('status', '1')->get();
        view()->share('service_menu', $this->service_menu);
    }

    public function validation($request)
    {
        $data = $this->runValidator($request);
        if ($data->fails())
            throw new ValidationException($data);
        return $data->validated();
    }

    public function runValidator($request) {
        $currentAction = Route::currentRouteAction();
        list($controller, $method) = explode('@', $currentAction);
        return $this->validator->$method($request);
    }

    public static function telegram($txt) {
        $token = $_ENV['TOKEN_TG'];
        $chat_id = $_ENV['CHAT_ADMIN_TG'];
        
        $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
        return;
    }

    public static function mail($email, $titel, $mailArr, $sample) {
        // Mail::send(
        //     ['text' => 'email.reviews_confirmation'],
        //     ['name' => 'name'],
        //     function($message){
        //         $message->to($email, 'text')->subject('test email');
        //         $message->from();
        //     }
        // );

        // Знаю забудешь https://www.youtube.com/watch?v=30YcQkFh7W0&list=PL3-0tsv0n0zYa0nNtDzq0kS-Ha6l95w3X&index=12&ab_channel=%D0%94%D0%BC%D0%B8%D1%82%D1%80%D0%B8%D0%B9%D0%9F%D0%BE%D0%B2%D1%8B%D1%88%D0%B5%D0%B2Develop
        View::composer(['email.*'], function($view)
        {
            $view->with(['settings' => Settings::first()]);
        });

        $headers = "Content-type: text/html; charset=utf-8\r\n";

        mail(
            $email, 
            $titel, 
            view($sample, compact('mailArr')), 
            $headers
        );

        return;
    }
}
