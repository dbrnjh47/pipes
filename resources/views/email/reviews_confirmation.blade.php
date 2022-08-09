<?php $support = "https://vk.com/im?media=&sel=-187811906"; ?>

<div style="background:#f2f3f6;margin:0;padding:0">
    <font face="Arial, Helvetica, sans-serif">
        <table bgcolor="#f2f3f6" style="background:#f2f3f6;font-family:'arial' , 'helvetica' , sans-serif;font-size:14px;line-height:18px;text-align:left;width:100%">
            <tbody>
                <tr>
                    <td height="40" style="font-size:0;line-height:0;padding:0"></td>
                </tr>
                <tr>
                    <td align="center">
                        <table align="center" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" width="600" style="background:#fff;border-radius:10px;padding:24px 54px 24px 54px">
                            <tbody>
                                <tr>
                                    <td style="display: flex; text-align:left">

                                        <a href="{{route('home')}}" data-link-id="20" target="_blank" rel="noopener noreferrer" style="margin: auto;">
                                            <img alt="{{$settings->name}}" src="{{route('home')}}/temple/pk/img/logo/logo.png" style="height: 65px;">
                                        </a>

                                    </td>
                                </tr>
                                <tr>
                                    <td height="34" style="font-size:0;line-height:0;padding:0">
                                        <div style="background:rgba( 6 , 23 , 41 , 0.1 );height:1px;vertical-align:middle;width:100%">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;font-size:23px;font-weight:bold;line-height:30px">
                                        <span style="vertical-align:middle">
                                            Подтвердите обработку отзыва!
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td height="20" style="font-size:0;line-height:0;padding:0"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="492" style="border:1px solid rgba( 6 , 23 , 41 , 0.1 );border-radius:10px;font-size:14px;line-height:18px;padding:15px 20px 0px 15px">
                                            <tbody>
                                                <tr>
                                                    <td width="74">
                                                        <a data-link-id="21" target="_blank" rel="noopener noreferrer">
                                                            <img height="70" src="{{route('home')}}/temple/pk/img/reviews/no.jpg" width="82" style="border:1px solid #eeeeee;border-radius:150px">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a style="color:inherit;font-size:20px;line-height:24px;text-decoration:none" data-link-id="22" target="_blank" rel="noopener noreferrer">
                                                                            <b>{{$mailArr->name}}</b>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a style="color:inherit;font-size:14px;line-height:20px;text-decoration:none" data-link-id="23" target="_blank" rel="noopener noreferrer">
                                                                            {{$mailArr->phone}}
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" height="8" style="font-size:0;line-height:0;padding:0">
                                                        <div style="background:rgba( 6 , 23 , 41 , 0.1 );height:1px;vertical-align:middle"></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <div style="height:8px"></div>

                                                        <table style="font-size:14px;line-height:22px;width:100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td height="18" width="24" style="padding-top:5px">

                                                                        <img alt="?" height="16" src="{{route('home')}}/temple/pk/img/email/orig.png" width="16">

                                                                    </td>
                                                                    <td colspan="3">
                                                                        <b style="margin-left:3px">


                                                                            Информация принята


                                                                        </b>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td style="vertical-align: top;max-width: 325px;word-wrap: break-word;"><span>

                                                                            {{$mailArr->review}}

                                                                        </span></td>

                                                                    <td style="padding-left:6px;vertical-align:top;white-space:nowrap">


                                                                        <div style="color:#8b93a5">
                                                                            {{$mailArr->created_at}}
                                                                        </div>


                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="4" height="6"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <div style="font-size:14px;line-height:20px">
                                                            <div style="height:4px"></div>


                                                            Если у вас есть возражения или вопросы по статусу заявки, напишите в

                                                            <a href="{{$support}}" target="_blank" style="color:#0044bb;text-decoration:none" data-link-id="25" rel="noopener noreferrer">
                                                                службу поддержки
                                                            </a>

                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" height="24"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">

                                                        <a href="{{route('reviews-confirm', ['code' => $mailArr->code, 'code_status' => 1])}}" target="_blank" style="background:#23a1d1;border:10px solid #23a1d1;border-radius:8px;display:inline-block;margin-right:8px;text-align:center;text-decoration:none;width:150px" data-link-id="26" rel="noopener noreferrer">
                                                            <span style="color:#ffffff;font-size:14px">Подтвердить</span>
                                                        </a>

                                                        <a href="{{route('reviews-confirm', ['code' => $mailArr->code, 'code_status' => 1])}}" target="_blank" style="background:#d12323;border:10px solid #d12323;border-radius:8px;display:inline-block;margin-right:8px;text-align:center;text-decoration:none;width:150px" data-link-id="26" rel="noopener noreferrer">
                                                            <span style="color:#ffffff;font-size:14px">Отклонить</span>
                                                        </a>


                                                        <a href="" target="_blank" style="background:#f4f4f4;border:10px solid #f4f4f4;border-radius:8px;display:inline-block;text-align:center;text-decoration:none;width:182px" data-link-id="27" rel="noopener noreferrer">
                                                            <span style="color:#000000;font-size:14px">Яндекс Отзывы</span>
                                                        </a> 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" height="12"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="32" style="font-size:0;line-height:0;padding:0"></td>
                                </tr>
                                <tr>
                                    <td style="text-align:center">
                                        <div style="font-size:14px;line-height:40px">
                                            Спасибо, что поделились своим мнением!
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="24" style="font-size:0;line-height:0;padding:0"></td>
                                </tr>
                                <tr>
                                    <td height="40" style="font-size:0;line-height:0;padding:0">
                                        <div style="background:rgba( 6 , 23 , 41 , 0.1 );height:1px;vertical-align:middle;width:100%">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color:#333;font-size:14px;text-align:center">
                                        Сотрудники,
                                        <br>
                                        <a href="{{route('home')}}" style="color:inherit;text-decoration:none" data-link-id="28" target="_blank" rel="noopener noreferrer">
                                            <b>{{$settings->name}}</b>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
                            <tbody>
                                <tr>
                                    <td height="52" style="font-size:0;line-height:0;padding:0"></td>
                                </tr>
                                <tr style="color:#79797b;font-size:15px;line-height:18px">
                                    <td>© {{date("Y")}}
                                        <a href="{{route('home')}}" style="color:inherit;text-decoration:none" data-link-id="29" target="_blank" rel="noopener noreferrer">
                                            {{$settings->name}}
                                        </a>
                                    </td>
                                    <td align="right">

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td height="40" style="font-size:0;line-height:0;padding:0"></td>
                </tr>
            </tbody>
        </table>
    </font>
</div>