<title>Ведущий поставщик технической водонапорной трубы в России и СНГ | {{$settings->name}}</title>
<meta name="keywords" content="поставщики труб, пнд труб цены купить, заказать канализацию, водопровод заказать, установка пнд">
<meta name="description" content="В нашей компании Вы можете купить трубы ПНД технические. Мы предлагаем справедливые цены на качественную изоляцию. Вся реализуемая продукция соответствует требованиям российских и международных стандартов."> 

@extends('layout')

@section('slider')
<!-- slider.html -->
<!-- slider -->
<!-- <div class="col-xs-12">
    <div class="slider-area">
        <div class="bend niceties preview-1">
            <div id="ensign-nivoslider" class="slides nivoSlider">

                <a href="/dostavka/"><img src="/temple/pk/img/Доставка.jpg" alt="Доставка" /></a>

                <a href="/otsrochka_platezha/"><img src="/temple/pk/img/Отсрочка.jpg" alt="Отсрочка платежа" /></a>

                <a href="/sertifikaty/"><img src="/temple/pk/img/Сертификаты.jpg" alt="Сертификаты" /></a>
            </div>

        </div>
    </div>
</div> -->
<!-- slider end-->
@endsection

@section('content')
<div class="row">

    <div class="col-xs-12">
        <!-- main_block_spec.html -->
        <!-- START PRODUCT-AREA (2) -->

        <!-- END PRODUCT-AREA (2) -->
        <!-- end main_block_spec.html -->

        <!-- block_category.html -->
        <!-- START PRODUCT-AREA -->

        <div class="row">
            <div class="col-xs-12">
                <!-- Start Product-Menu -->
                <div class="product-menu">
                    <div class="product-title">
                        <h3 class="title-group-2 gfont-1" style="font-family: Tahoma;">Каталог
                        </h3>
                    </div>
                </div>

                <!-- Product -->


                <!-- End Product-Menu -->
                <div class="clear"></div>
            </div>
        </div>
        <div class="product-area">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <!-- Start Product-->
                    <div role="tabpanel" class="tab-pane fade in  active" id="display-1-2">
                        <div class="row">
                            @foreach ($сatalog_menu as $c)
                            <div class="col-md-3 col-sm-4 col-xs-12">
                                @foreach ($service_menu as $s)
                                @if ($c->id == $s->catalog_id)
                                <div class="single-product" onclick="window.location.href = '/service/{{$s->id}}';" style="z-index: 999;">
                                    <div class="product-img">
                                        <a href="/service/{{$s->id}}">
                                            <img class="primary-img" src="{{$s->img}}" alt="{{$c->name}}" style="width: 187px;height: 187px;">

                                        </a>
                                    </div>
                                    <div class="product-description text-center">
                                        <h5 style="height: 25px;"><a ref="/service/{{$s->id}}" style="font-family: Arial;">{{$c->name}}</a></h5>
                                    </div>
                                </div>
                                @break
                                @endif
                                @endforeach
                            </div>
                            <!-- <div class="col-md-3 col-sm-4 col-xs-12">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="/catalog/{{$c->id}}">
                                            @foreach ($service_menu as $s)
                                            @if ($c->id == $s->catalog_id)
                                            <img class="primary-img" src="{{$s->img}}" alt="Опоры трубопроводов" style="width: 187px;height: 187px;">
                                            @break
                                            @endif
                                            @endforeach
                                        </a>
                                    </div>
                                    <div class="product-description text-center">
                                        <h5 style="height: 25px;"><a ref="/catalog/{{$c->id}}" style="font-family: Arial;">{{$c->name}}</a></h5>
                                    </div>
                                </div>
                            </div> -->
                            @endforeach

                            <div class="row">
                                <div class="col-md-12 col-sm-12" style="margin-top: 30px;">

                                    <div class="row">
                                        <div class="col-xs-12">
                                            <!-- Start Product-Menu -->
                                            <div class="product-menu">
                                                <div class="product-title">
                                                    <h3 class="title-group-2 gfont-1">ЗАВОД ИЗГОТОВИТЕЛЬ ПОЛИЭТИЛЕНОВОЙ ТРУБЫ «ВЕКТОР»</h3>
                                                </div>
                                            </div>
                                            <!-- End Product-Menu -->
                                            <div class="clear"></div>
                                        </div>
                                    </div>



                                    <div class="product-area">

                                        <div class="row">
                                            <div class="col-md-12">



                                                <div style="font-family: Tahoma;font-size: 16px;">
                                                    <p class="MsoNormal" style="box-sizing: border-box; font-family: 'Open Sans'; font-size: 16px;">Завод изготовитель полиэтиленовых труб Вектор предлагает купить трубу пнд техническую. Труба техническая изготавливается по ТУ или ГОСТ. Труба пнд техническая  используются для безнапорных систем, для стоков воды, для систем ливневой канализации, для дренажа сточных вод. Труба производится в отрезках по 12 метров или 13 метров. Трубы пнд технические  изготавливаются из композита полиэтилена различной марки , полиэтиленовой гранулы пнд (изготавливается из брака производства труб по ГОСТ ПЭ100). Такая технология производства позволяет выпускать трубы пнд технические высокого качества.</p>
                                                    <p class="MsoNormal" style="box-sizing: border-box; font-family: 'Open Sans'; font-size: 16px;">В изготовлении технической трубы пнд используются различные марки полиэтилена ПЭ63 / ПЭ80 / ПЭ 100, в зависимости от проекта заказчика. Полиэтилен марки ПЭ63 / ПЭ80 / ПЭ 100 противостоит распространению трещин, обладает высокой стойкостью к сильным нагрузкам, сваривается. Труба ПНД  долговечна, имеет низкую стоимость, высокое качество, удобна в монтаже, устойчива к морозу, имеет легкий вес и не требует изоляции.</p>
                                                    <p class="MsoNormal" style="box-sizing: border-box; font-family: 'Open Sans'; font-size: 16px;">Трубы полиэтиленовые технические вы можете приобрести у завода полиэтиленовых труб «Вектор» на официальном сайте завода В каталоге продукции представлена труба техническая пнд разных диаметров и толщины стенок. Завод по производству полиэтиленовой трубы производит трубу диаметром от 110 мм до 400 мм, с различной толщиной стенки. Труба пнд техническая по ТУ или ГОСТ производится черная с синей или красной полосой (полосы испольуются для обозначения типа трубы пнд). На наружной поверхности технической трубы ПНД нанесена специальная маркировка, в которой указан диаметр, толщина стенки, материал ПЭ 63, ПЭ 80, ПЭ100, завод изготовитель полиэтиленовых труб, дата выпуска и номер партии, вся информация которая поможет заказчику определить тип трубы пнд.</p>
                                                    <p class="MsoNormal" style="box-sizing: border-box; font-family: 'Open Sans'; font-size: 16px;">&nbsp;</p>
                                                    <p class="MsoNormal" style="box-sizing: border-box; font-family: 'Open Sans'; font-size: 16px;">Техническая ПНД труба не используется для питьевой воды и жидкостей которые транспортируются под давлением. Труба пнд техническая используется для футляра (кожух) и для систем безнапорных трубопроводов. Трубы ПНД технические безнапорные используются в разных сферах:</p>

                                                    <ul style="font-family: Tahoma;font-size: 14px;color: #959191;">
                                                        <li class="MsoNormal"> - Труба пнд техническая для защиты кабеля от повреждений</li>
                                                        <li class="MsoNormal"> - Труба пнд техническая для защиты линий связи</li>
                                                        <li class="MsoNormal"> - Труба пнд техническая для наружных безнапорных трубопроводов и канализации</li>
                                                        <li class="MsoNormal"> - Труба пнд для систем сточных вод</li>
                                                        <li class="MsoNormal"> - Труба пнд техническая для горизонтально направленного бурения (ГНБ)</li>
                                                    </ul>

                                                    <p class="MsoNormal" style="box-sizing: border-box; font-family: 'Open Sans'; font-size: 16px;">&nbsp;</p>
                                                    <p class="MsoNormal" style="box-sizing: border-box; font-family: 'Open Sans'; font-size: 16px;">Завод производитель полиэтиленовых труб «Вектор» г. Челябинск предлагает полиэтиленовые технические трубы, изготовленные из качественного полимерного сырья ПЭ63/ ПЭ80 / ПЭ100, на современном оборудовании, это означает что вся наша продукция полностью соответсвует всем действующим стандартам. Купить трубы пнд технические по специальной цене, со скидкой, наличный и безналичный расчет,всегда в наличии на складе, доставка по всей России!</p>
                                                </div>





                                            </div>
                                        </div>
<div class="row">
            <div class="col-xs-12">
                <!-- Start Product-Menu -->
                <div class="product-menu">
                    <div class="product-title">
                        <h3 class="title-group-2 gfont-1">О компании</h3>
                    </div>
                </div>
                <!-- End Product-Menu -->
                <div class="clear"></div>
            </div>
        </div>


        <style>
            .MsoNormal img{
                margin: 5px;
            }
        </style>

<div class="row" style="margin-top: 32px;">
                <div class="col-md-12">



                    <div style="font-family: Tahoma;font-size: 16px;">
                        <h3>{{$settings->name}} - услуги, трубы ПНД технические водонопорные<span style="font-size: 20px;"><br></span></h3>
                        <p class="MsoNormal">В нашей компании Вы можете купить трубы ПНД технические. Мы предлагаем справедливые цены на качественную изоляцию. Вся реализуемая продукция соответствует требованиям российских и международных стандартов.</p>
                        <p class="MsoNormal">
                        <img src="/temple/pk/img/about-us/new/4.jpg" alt="" width="405" height="470">
                            <img src="/temple/pk/img/about-us/new/5.jpg" alt="" width="405" height="470">
                            <img src="/temple/pk/img/about-us/new/6.jpg" alt="" width="405" height="470">
                            <img src="/temple/pk/img/about-us/new/7.jpg" alt="" width="405" height="470">
                            <img src="/temple/pk/img/about-us/new/1.jpg" alt="" width="405" height="470">
                            <img src="/temple/pk/img/about-us/new/2.jpg" alt="" width="405" height="470">
                            <img src="/temple/pk/img/about-us/new/3.jpg" alt="" width="405" height="470">
                            
                            </p>
                        <p>&nbsp;</p>
                        </div>





                </div>
            </div>

                                    </div>
                                </div>


                            </div>



                        </div>
                    </div>
                    <!-- End Product = TV -->
                </div>
            </div>
            <!-- End Product -->
        </div>
    </div>
</div>
<!-- END PRODUCT-AREA -->

<!-- end block_category.html -->

@endsection