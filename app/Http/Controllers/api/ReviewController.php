<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\api\TextController;
use Illuminate\Http\Request;
use App\Http\Controllers\api\Controller;
use App\Applications;
use Log;
use App\Models\Review;

class ReviewController extends Controller
{
  public function __construct(Request $request)
  {
    parent::__construct($request);
  }

  public function index()
  {
    $this->message = explode("|", $this->message);
    switch ($this->message[0]) {
      case "/reviews_on":
        $this->apiTelegram_editMessage("Одобрен {$this->message[1]}");

        Review::where('id', $this->message[1])->update([
          'status' => 1
        ]);
        // $this->user->message = "/fill_questionnaire";
        // $this->user->save();
        break;

      case "/reviews_off":
        $this->apiTelegram_editMessage("Откланён  {$this->message[1]}");

        Review::where('id', $this->message[1])->update([
          'status' => 2
        ]);
        // $this->user->message = "/fill_questionnaire";
        // $this->user->save();
        break;
      default:
        // if (isset($this->request['chat']['id']) && $this->request['chat']['id'] != $_ENV['CHAT_ADMIN_TG'] || isset($this->request['message']['chat']['id']) && $this->request['message']['chat']['id'] != $_ENV['CHAT_ADMIN_TG']) {
        //   $this->apiTelegram(TextController::start(), TextController::start_reply_markup());
        // }
        break;
    }
    Log::debug("11111");
    abort(201);
  }

  public function reviews_send($txt, $id)
  {
    Log::debug("message111");
    $this->apiTelegram($txt, TextController::reviews_send_reply_markup($id), $_ENV['CHAT_ADMIN_TG']);
  }
}
