<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Str;
use App\Http\Validations\ReviewControllerValidations;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\api\ReviewController as ReviewControllerApi;

class ReviewController extends Controller
{
    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->validator = new ReviewControllerValidations();
    }

    public function reviewsAdd(Request $r)
    {
        $validator = $this->validation($r);

        $r->phone = preg_replace('/\s|\-|-|\(|\)/','', $r->phone);
        $code = Str::random(20);
        $mailArr = Review::create([
            'review' => $r->review,
            'name' => $r->name,
            'phone' => $r->phone,
            'email' => $r->email,
            'code' => $code,
        ]);
        
        $this->mail($r->email, "Подтверждение отзыва | {$this->settings->name}", $mailArr, "email.reviews_confirmation");

        $r->send = 1;
        (new ReviewControllerApi($r))->reviews_send(
            "Оставили отзыв!
            Телефон: {$r->phone} 
            Имя: {$r->name}
            Почта: {$r->email}
            Отзыв: {$r->review}", $mailArr->id
        );
        
        // $this->telegram($txt);

        return;
    }

    public function reviewsConfirm($code, $code_status)
    {
        $v = [];
        $v['code'] = $code;
        $v['code_status'] = $code_status;
        $validator = $this->validation($v);

        Review::where('code', $code)->update([
            'code' => $code_status
        ]);
        
        return redirect()->route('thank');
    }

    public function reviewsPagination($pagination)
    {
        $reviews = Review::where('status', '1')->orderBy('id', 'desc')->skip($pagination * 5 - 5)->take(5)->get();

        return $reviews;
    }
}
