<?php

namespace App\Http\Controllers\Api;


use Illuminate\Http\Request;


class TextController 
{
    public static function reviews_send_reply_markup($id)
    {
        return json_encode([
            'inline_keyboard' => [
                [
                    [
                        'text' => 'Принять',
                        'callback_data' => "/reviews_on|{$id}",
                    ],
                    [
                        'text' => 'Отменить',
                        'callback_data' => "/reviews_off|$id",
                    ],
                ]
            ]
        ]);
    }

    
}
