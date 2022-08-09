@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12">

        <div class="row">
            <div class="col-xs-12">
                <!-- Start Product-Menu -->
                <div class="product-menu">
                    <div class="product-title">
                        <h3 class="title-group-2 gfont-1">Доставка</h3>
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
                        <p class="MsoNormal"><strong>Самовывоз</strong>&nbsp;– {{$settings->address}} (необходимо уточнить информацию о наличии и согласовать время визита с менеджером)</p>
                        <p class="MsoNormal">&nbsp;</p>
                        <p class="MsoNormal"><strong>Доставка по Челябинской области до 6 метров</strong>&nbsp;- БЕСПЛАТНО &nbsp;(при заказе свыше 20&nbsp;000 рублей)</p>
                        <p class="MsoNormal"><strong>Доставка по всей России и СНГ</strong>&nbsp;– АТИ, транспортной компанией</p>
                        <p class="MsoNormal"><strong>До терминала транспортной компании - БЕСПЛАТНО (при заказе свыше 20&nbsp;000 рублей)</strong></p>
                        <p class="MsoNormal"><strong>&nbsp;</strong></p>
                        <p>&nbsp;</p>
                        <p class="MsoNormal">Доставка труб осуществляется со склада в рабочие дни с 9:00 до 18:00. Наличие собственного автопарка позволяет нам быстро доставлять заказы. Мы плотно сотрудничаем с транспортными компаниями и всегда сможем подобрать для Вас оптимальный вариант доставки труб в самую отдаленную точку России и СНГ.&nbsp;</p>
                    </div>





                </div>
            </div>
        </div>
    </div>


</div>
@endsection