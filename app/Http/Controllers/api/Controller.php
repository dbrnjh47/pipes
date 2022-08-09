<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\api\TextController;
use Illuminate\Routing\Controller as BaseController;
use Log;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    public $ordernum;

    public function __construct(Request $request)
    {
        date_default_timezone_set('Europe/Moscow');
        Log::debug($request);
        Log::debug("message1");
        if (!$request->send) {
            if ($request->my_chat_member || !isset($request->callback_query['data']) && !isset($request->message['text'])) {
                abort(201);
            }

            // Упращение массива запроса
            $this->request = $request->callback_query ? $request->callback_query : $request->message;
            $this->message = mb_strtolower(isset($request->callback_query['data']) ? $request->callback_query['data'] : $this->request['text'], 'utf-8');

            if ($this->message == null) {
                abort(201);
            }


            view()->share('request', $this->request);
            view()->share('message', $this->message);
        }
    }

    public function apiTelegram($text, $reply_markup = null, $chat_id = null, $array = null, $method = "sendMessage")
    {
        if (!$array) {
            $send_data = ['text' => $text, 'reply_markup' => $reply_markup];
        } else {
            $send_data = $array;
        }

        if ($chat_id) {
            $send_data['chat_id'] = $chat_id;
        } else {
            $send_data['chat_id'] = (isset($this->request['chat']['id']) ? $this->request['chat']['id'] : $this->request['message']['chat']['id']);
        }


        $send_data['parse_mode'] = 'html';
        $send_data['disable_web_page_preview'] = true;

        $ch = curl_init('https://api.telegram.org/bot' . $_ENV['TOKEN_TG'] . '/' . $method);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $send_data);

        $result = json_decode(curl_exec($ch), true);

        curl_close($ch);

        return $result['result']['message_id'];
    }

    public function apiTelegram_editMessage($text, $reply_markup = null, $chat_id = null, $message_id = null)
    {
        $send_data = ['text' => $text, 'reply_markup' => $reply_markup];

        if ($chat_id) {
            $send_data['chat_id'] = $chat_id;
        } else {
            $send_data['chat_id'] = (isset($this->request['chat']['id']) ? $this->request['chat']['id'] : $this->request['message']['chat']['id']);
        }
        $send_data['message_id'] = ($message_id ? $message_id : $this->request['message']['message_id']);

        $send_data['parse_mode'] = 'html';
        $send_data['disable_web_page_preview'] = true;

        $ch = curl_init('https://api.telegram.org/bot' . $_ENV['TOKEN_TG'] . '/editMessageText');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $send_data);

        $result = json_decode(curl_exec($ch), true);

        curl_close($ch);

        return;
    }

    public function del_message($message_id, $chat_id = null)
    {
        if (!$chat_id) {
            $chat_id = $_ENV['CHAT_ADMIN_TG'];
        }

        $this->apiTelegram(null, null, $chat_id, ['message_id' => $message_id], "deleteMessage");
    }
}
