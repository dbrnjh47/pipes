@extends('layout')

@section('content')


<div class="body_popup" style="z-index:10000; display: none;" id="checkout">

    <table class="body_tab_popup" width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr>
                <td>

                    <div class="body_popup_inner_3">

                        <div class="div_cloze">
                            <form method="post">
                                <input type="hidden" name="csrfmiddlewaretoken" value="uO91x6IFNT1CQQKsKrPXU0TCdgnjr4ui">
                                <input name="sub" type="button" value="" class="cloze">
                            </form>
                        </div>


                        <div class="div_img_add_basket">
                            <br>
                        </div>
                        <div class="zagolovok_popup">Оформление заказа</div>
                        <div style="font-family: Tahoma;font-size: 16px;">{{$service->name}}</div>


                        <form method="post" name="checkout_order_new_get_price">

                            <input type="hidden" name="product_slug" value="opora_skolzjaschaja_spo_dlja_trub_ppu_57x125">

                            <input type="hidden" name="csrfmiddlewaretoken" value="uO91x6IFNT1CQQKsKrPXU0TCdgnjr4ui">
                            <div class="div_input_tr">
                                <div class="div_input_td_l">
                                    <input type="search" class="div_input" placeholder="Имя*" id="id_name" name="name">


                                </div>

                                <div class="div_input_td_r">
                                    <input type="search" class="div_input" placeholder="Телефон*" id="id_phone" name="phone">


                                </div>


                            </div>

                            <div class="">
                                <input type="search" class="div_input_2" placeholder="E-mail*" id="id_email" name="email">


                                <input type="hidden" name="submit_check_get_price" value="checkout_get_price">
                            </div>


                        </form>
                        <div class="div_label_popup">*Поля помеченные звездочкой обязательные для заполнения</div>

                        <div class="db">
                            <a class="button_basket2" id="checkout_button" name="checkout_btn">Оформить</a>

                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
    <!-- Start Toch-Prond-Area -->
    <div class="toch-prond-area">
        <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="clear"></div>
                <div class="tab-content">

                    <!-- Product = display-1-1 -->
                    <div role="tabpanel" class="tab-pane fade in active" id="display-1">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="toch-photo">
                                    <img src="{{$service->img}}" data-imagezoom="true" alt="{{$service->name}}" style="width: 187px;height: 187px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product = display-1-1 -->


                </div>
                <!-- Start Toch-prond-Menu -->

                <!-- End Toch-prond-Menu -->

                <table class="table table-bordered" style="font-family: Tahoma; font-size: 14px;">
                    <tbody>
                        @foreach(json_decode($service->information) as $s_key => $s)
                        <tr>
                            <td><b>{{$s}}</b></td>
                            @foreach(json_decode($service_lots->information) as $s_l_key => $s_l)
                            @if($s_key == $s_l_key)
                            <td>{{$s_l}}</td>
                            @break
                            @endif
                            @endforeach
                        </tr>
                        @endforeach












                    </tbody>
                </table>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12">
                <p style="font-size: 24px; font-weight: bold;"> {{$service->name}}</p>
                <div class="about-toch-prond">
                    <hr>
                    <p class="short-description" style="font-size: 16px;">
                        {{$service->name}}
                        - купить оптом c доставкой по РФ и ближнему зарубежью. Цены уточняйте у менеджеров.<br>
                        <br>

                    </p>
                    <hr>
                    <span class="current-price" style="font-family: Tahoma;">Цена договорная</span>
                    <span class="item-stock">Наличие: <span class="text-stock">+</span></span>

                </div>


                <div class="product-quantity">
                    <form id="get_price_" method="post" class="product-quantity">
                        <input type="hidden" name="csrfmiddlewaretoken" value="uO91x6IFNT1CQQKsKrPXU0TCdgnjr4ui">
                        <span>Количество</span>
                        <input type="number" placeholder="1" name="count">
                        <button type="button" class="toch-button toch-add-cart" name="buy" value="True">Купить</button>
                        <button type="button" class="toch-button toch-wishlist" name="callback" value="True">Заказать звонок</button>
                        <input type="hidden" name="product_slug_price" value="opora_skolzjaschaja_spo_dlja_trub_ppu_57x125">
                        <input type="hidden" name="get_price" value="True">


                    </form>
                </div>

                <hr>
            </div>
        </div>
    </div>
</div>
<!-- Start Toch-Box -->
<div class="toch-box">
    <div class="row">
        <div class="col-xs-12">
            <!-- Start Toch-Menu -->
            <div class="toch-menu">
                <ul role="tablist">
                    <li role="presentation" class=" active"><a href="#dostavka" role="tab" data-toggle="tab">Доставка</a></li>
                    <li role="presentation"><a href="#oplata" role="tab" data-toggle="tab">Оплата</a></li>
                    <li role="presentation"><a href="#otsrochka" role="tab" data-toggle="tab">Отсрочка</a></li>
                </ul>
            </div>
            <!-- End Toch-Menu -->
            <div class="tab-content toch-description-review">
                <!-- Start display-description -->
                <div role="tabpanel" class="tab-pane fade in active" id="dostavka">
                    <div>
                        <div class="col-xs-12">
                            <div class="toch-description">
                                <p style="height: 108px; font-size: 16px;">Вы можете заказать доставку {{$service->name}} по России и СНГ.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End display-description -->
                <!-- Start display-reviews -->
                <div role="tabpanel" class="tab-pane fade" id="oplata">
                    <div>
                        <div class="col-xs-12">
                            <div class="toch-description">
                                <p style="height: 108px; font-size: 16px;">Вы можете оплатить продукцию "{{$service->name}}" различными удобными для Вас способами.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Product = display-reviews -->
                <!-- Start display-otsrochka -->
                <div role="tabpanel" class="tab-pane fade" id="otsrochka">
                    <div>
                        <div class="col-xs-12">
                            <div class="toch-description">
                                <p style="height: 108px; font-size: 16px;">Вы можете заказать отсрочку до 30 дней на "{{$service->name}}"</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Product = display-reviews -->
            </div>
        </div>
    </div>
</div>
<div class="div_search_panel">
    <div class="divcontent_katalog">
        <div class="label_filtr">* Уважаемые клиенты! Обращаем Ваше внимание, что цены на сайте не являются публичной офертой.
            <br>
            Позиции, для которых не указана цена, являются малораспространенными.
            Пожалуйста, звоните нам, чтобы уточнить цену на эти позиции и условия поставки.
        </div>
    </div>
</div>
<!-- End Toch-Box -->





<script>
    $(".toch-add-cart").on('click', function() {
        $('#checkout').fadeIn(300);
    });

    $(".toch-wishlist").on('click', function() {
        $('#call_order').fadeIn(300);
    });

    

    $("#checkout_button").on('click', function() {
        $.ajax({
            url: '/checkout',
            type: "POST",
            data: {
                'name': $('#checkout input[name="name"]').val(),
                'phone': $('#checkout input[name="phone"]').val(),
                'mail': $('#checkout input[name="email"]').val(),
                'kol' : $('#get_price_ input[name="count"]').val(),
                'lot' : "{{$service->name}}",
                'lot_id': "{{$service_lots->id}}"
            },
            success: function(data) {
                window.location.href = "/thank";
            },
            error: function(msg) {
                console.log(msg);
            }
        });
    });


</script>


@endsection