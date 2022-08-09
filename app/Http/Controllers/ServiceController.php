<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use Illuminate\Http\Request;

use App\Models\ServiceLot;
use Log;
class ServiceController extends Controller
{
    const token = "5281101996:AAGMBmsulcqBdyt4xfV4exBdvpNKfQQNJgk";
    const chat_id ="-1001603220422";

    public function checkout(Request $r)
    {
        $token = self::token;
        $chat_id = self::chat_id;
        $arr = array(
          'Имя: ' => $r->name,
          'Телефон: ' =>$r->phone,
          'Почта: ' => $r->mail,
          'Услуга: ' => $r->lot,
          'Количество: ' => $r->kol,
          'Ссылка: ' => $_SERVER['SERVER_NAME'].'/service/lot/'.$r->lot_id,
        );
        $txt = "Оформление услуги! %0A%0A";
        foreach($arr as $key => $value) {
          $txt .= "<b>".$key."</b> ".$value."%0A";
        };
        // Log::debug("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}");
        $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
// $this->settings->mail;
        mail($this->settings->mail, 'Оформление услуги! | '.$_SERVER['SERVER_NAME'], "
Имя: ".$r->name."\n
Номер: ".$r->phone."\n
Почта: ".$r->mail."\n
Услуга: ".$r->lot."\n
Количество: ".$r->kol."\n
Ссылка: ".$_SERVER['SERVER_NAME'].'/service/lot/'.$r->lot_id."
");
        return;
    }

    public function call_order(Request $r)
    {
        $token = self::token;
        $chat_id = self::chat_id;
        $arr = array(
          'Телефон: ' =>$r->phone,
          'Услуга: ' => $r->lot,
          'Количество: ' => $r->kol,
          'Ссылка: ' => $_SERVER['SERVER_NAME'].'/service/lot/'.$r->lot_id,
        );
        $txt = "Заказ звонка! %0A%0A";
        foreach($arr as $key => $value) {
          $txt .= "<b>".$key."</b> ".$value."%0A";
        };
        
        $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

        mail($this->settings->mail, 'Заказ звонка! | '.$_SERVER['SERVER_NAME'], "
Номер: ".$r->phone."\n
Услуга: ".$r->lot."\n
Количество: ".$r->kol."\n
Ссылка: ".$_SERVER['SERVER_NAME'].'/service/lot/'.$r->lot_id."
");
        return;
    }

    public function servisAjax($id)
    {

      $ServiceLot = ServiceLot::where('services_id',$id)->get();
      $info = [];
      foreach($ServiceLot as $key => $value){
        $i = json_decode($value->information);
        $info[$key][] = $key;
        foreach($i as $v){
          $info[$key][] = $v;
        }
        $info[$key][] = $value->id;
        
      }
      return datatables($info)->toJson();
    }
}
