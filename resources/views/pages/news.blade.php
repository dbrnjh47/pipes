@extends('layout')

@section('content')

@foreach ($news as $n)

<div class="row">
    <div class="col-md-9 col-sm-9">

        <div class="row">
            <div class="col-xs-12">
                <!-- Start Product-Menu -->
                <div class="product-menu">
                    <div class="product-title">
                        <h3 class="title-group-2 gfont-1">{{$n->name}}</h3>
                    </div>
                </div>
                <!-- End Product-Menu -->
                <div class="clear"></div>
            </div>
        </div>


        <div class="div_search_panel">
            <br>
        </div>


        <div class="div_1col"><img class="div_img_1col" src="{{$n->img}}"></div>


        <!--- текстовой блок ---->
        <div class="div_search_panel">
            <div class="divcontent_katalog">
                <div class="second_zagolovok_news">
                    <p>{{$n->short_description}}</p>
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>


        <div class="div_search_panel">
            <div class="text_block">
                {!! $n->description !!}
            </div>
        </div>
        <br>
    </div>
</div>

@endforeach

<!-- <div class="row">
    <div class="col-md-9 col-sm-9">

        <div class="row">
            <div class="col-xs-12">

                <div class="product-menu">
                    <div class="product-title">
                        <h3 class="title-group-2 gfont-1">Другие новости</h3>
                    </div>
                </div>

                <div class="clear"></div>
            </div>
        </div>
        <br>





        <div class="div_all_inner_news_1col">
            <div class="div_all_inner_news_2">
                <h4><a href="/news/s-dnyom-pobedy/">С Днём Победы!</a></h4>
                <span class="data_news">8 мая 2019 г. 15:29</span>
                <br>

                <div class="div_1col"><a href="/news/s-dnyom-pobedy/"><img class="div_img_1col" src="/media/uploads/images/photo_2019-05-08_15-23-08.jpg"></a></div>

                <div class="div_news"><span class="link_news"><a href="/news/s-dnyom-pobedy/">
                            <p>Уважаемые клиенты и партнеры!</p>
                            <p>С Днём Победы, с 9 мая!</p>
                        </a></span></div>
            </div>
        </div>



        <div class="div_all_inner_news_1col">
            <div class="div_all_inner_news_2">
                <h4><a href="/news/pozdravlyaem-s-mezhdunarodnym-zhenskim-dnyom/">Поздравляем с Международным женским днём!</a></h4>
                <span class="data_news">6 марта 2019 г. 15:22</span>
                <br>

                <div class="div_1col"><a href="/news/pozdravlyaem-s-mezhdunarodnym-zhenskim-dnyom/"><img class="div_img_1col" src="/media/uploads/images/8_марта.png"></a></div>

                <div class="div_news"><span class="link_news"><a href="/news/pozdravlyaem-s-mezhdunarodnym-zhenskim-dnyom/">
                            <p>Милые дамы, сердечно поздравляем Вас с Международным женским днём!</p>
                        </a></span></div>
            </div>
        </div>



        <div class="div_all_inner_news_1col">
            <div class="div_all_inner_news_2">
                <h4><a href="/news/s-dnyom-zashchitnika-otechestva/">с Днём защитника Отечества</a></h4>
                <span class="data_news">22 февраля 2019 г. 12:03</span>
                <br>

                <div class="div_1col"><a href="/news/s-dnyom-zashchitnika-otechestva/"><img class="div_img_1col" src="/media/uploads/images/23022018.jpg"></a></div>

                <div class="div_news"><span class="link_news"><a href="/news/s-dnyom-zashchitnika-otechestva/">
                            <p class="floatleft"><strong><span class="alignleft">Уважаемые клиенты и партнеры - от всей души поздравляем мужскую половину с Днём защитника Отечества!</span></strong></p>
                        </a></span></div>
            </div>
        </div>


    </div>
</div> -->

@endsection