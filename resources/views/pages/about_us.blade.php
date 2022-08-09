@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12">

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
        <div class="product-area">
            <div class="row">
                <div class="col-md-12">



                    <div style="font-family: Tahoma;font-size: 16px;">
                        <h3>{{$settings->name}} - услуги, трубы ПНД технические водонопорные<span style="font-size: 20px;"><br></span></h3>
                        <p class="MsoNormal">В нашей компании Вы можете купить трубы ПНД технические. Мы предлагает справедливые цены на качественную изоляцию. Вся реализуемая продукция соответствует требованиям российских и международных стандартов.</p>
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
                        <h3>Преимущества работы с {{$settings->name}}:</h3>
                        <p class="MsoNormal">- качественная продукция;</p>
                        <p class="MsoNormal">- собственные склады и производственные цеха;</p>
                        <p class="MsoNormal">- доставка по всей территории России и СНГ;</p>
                        <p class="MsoNormal">- отсрочка платежа до 30 календарных дней;</p>
                        <p class="MsoNormal">- сопутствующие услуги.</p>
                        <p>&nbsp;</p>
                        <p class="MsoNormal"><strong>С компанией {{$settings->name}}, Вы всегда можете быть уверены в оперативной обработке вашей заявки и своевременной доставке продукции.</strong></p>
                    </div>





                </div>
            </div>
        </div>
    </div>


</div>
@endsection