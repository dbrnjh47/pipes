<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\api\Controller;

use App\Http\Controllers\api\ReviewController;

use Log;


class ApiTelegram extends Controller
{
    // https://api.telegram.org/bot5159036741:AAGd6eNh1b46Ko035lIglCQwFYZgCL0drf4/setwebhook?url=https://api.bruteforce.ws/api/bot-telegram
    // const token = "5159036741:AAGd6eNh1b46Ko035lIglCQwFYZgCL0drf4";
    // const chat_id = "-1001638734038";


    public function index(Request $request)
    {
        Log::debug($this->message);
        (new ReviewController($request))->index();
        // if($this->user->role == 'user'){
        //     (new UserController($request))->index();
        // }
        
        // if($this->user->role == 'worker'){
        //     (new WorkerController($request))->index();
        // }

        // if($this->user->role == 'admin'){
        //     (new AdminController($request))->index();
        // }
        
        return;
    }
}
