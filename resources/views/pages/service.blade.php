<meta name="keywords" content="{{$service->keywords}}">
<meta name="description" content="{{$service->description_html}}"> 
<title>{{$service->title}} | {{$settings->name}}</title>
@extends('layout')

@section('content')

<link href="/temple/pk/admin/dash/css/datatables.bundle.min.css" rel="stylesheet" type="text/css">
<script src="/temple/pk/admin/dash/js/datatables.bundle.min.js" type="text/javascript"></script>
<link href="/temple/pk/admin/dash/css/line-awesome.css" rel="stylesheet" type="text/css">


<span> <a href="/">Главная</a>


    &gt;&gt; <a href="/catalog/{{$service->catalog_id}}">{{$service->name}}</a>



    &gt;&gt; {{$service->name}}

</span><br><br>
<div class="">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <!-- block_category.html -->
            <!-- START PRODUCT-AREA -->

            <div class="row">
                <div class="col-xs-12">
                    <!-- Start Product-Menu -->
                    <div class="product-menu">
                        <div class="product-title">
                            <h3 class="title-group-2 gfont-1" style="font-family: Tahoma;">{{$service->name}}</h3>
                        </div>
                    </div>

                    <!-- Product -->

                    <div role="tabpanel" class="tab-pane fade in active" id="display-1-1">
                        <div class="row">
                            <div class="listview">
                                <!-- Start Single-Product -->
                                <div class="single-product">
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="product-img">
                                            <img class="primary-img" src="{{$service->img}}" alt="{{$service->name}}" style="width: 187px;height: 187px;">
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-8 col-xs-12">
                                        <div class="product-description">
                                            <p style="font-size: 24px; font-weight: bold;"> {{$service->name}}









                                            </p>

                                            <p class="description" style="font-size: 16px;">
                                                {!! $service->description !!}
                                            </p>

                                            <p class="description"></p>
                                            <p>Мы готовы поставить трубы ПНД в кротчайшие сроки и по доступным ценам. Наша команда готова к заказам</p>
                                            <p></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


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
</div>


<!--- фильтр ---->
<!-- <div class="div_filtr_all">


    <div class="div_filtr">
        <form id="filter_form" name="filter_form" class="main2" method="post" action="">
            <input type="hidden" name="csrfmiddlewaretoken" value="uO91x6IFNT1CQQKsKrPXU0TCdgnjr4ui">



            <select size="1" class="div_cb_filtr" style="font-size: 12px;" name="filter_s1" onchange="submit();">
                <option value="">Наружный диаметр трубы, мм</option>

                <option value="57,0">57</option>

                <option value="76,0">76</option>

                <option value="89,0">89</option>

                <option value="108,0">108</option>

                <option value="133,0">133</option>

                <option value="159,0">159</option>

                <option value="219,0">219</option>

                <option value="273,0">273</option>

                <option value="325,0">325</option>

                <option value="426,0">426</option>

                <option value="530,0">530</option>

                <option value="630,0">630</option>

                <option value="720,0">720</option>

                <option value="820,0">820</option>

                <option value="1020,0">1020</option>

                <option value="1200,0">1200</option>

                <option value="1420,0">1420</option>

            </select>




            <select size="1" class="div_cb_filtr" style="font-size: 12px;" name="filter_s2" onchange="submit();">
                <option value="">Диаметр оболочки, мм</option>

                <option value="125,0">125</option>

                <option value="140,0">140</option>

                <option value="160,0">160</option>

                <option value="180,0">180</option>

                <option value="225,0">225</option>

                <option value="250,0">250</option>

                <option value="315,0">315</option>

                <option value="400,0">400</option>

                <option value="450,0">450</option>

                <option value="560,0">560</option>

                <option value="710,0">710</option>

                <option value="800,0">800</option>

                <option value="900,0">900</option>

                <option value="1000,0">1000</option>

                <option value="1020,0">1020</option>

                <option value="1400,0">1400</option>

                <option value="1600,0">1600</option>

            </select>



































            <select size="1" class="div_cb_filtr" style="font-size: 12px;" name="filter_gost" onchange="submit();">
                <option value="">ГОСТ</option>

            </select>

        </form>
    </div>

</div> -->

<div class="div_clear_height_30px"></div>

<!--- Таблица ---->

<div class="div_kat_tovar_body_2">
<div class="kt-portlet__body" style="position: relative;">
<style>
    .col-sm-12{
        padding-right: 0px !important;
    padding-left: 0px !important;
    }
</style>
<!--begin: Datatable -->
<?php $arr = json_decode($service->information); ?>
<table class="table table-striped- table-bordered table-hover table-checkable" id="ajax-users">
    <thead>
        <tr>
            <!-- <th>ID</th> -->
            @foreach($arr as $a)
            <th>{{$a}}</th>
            @endforeach


            <th>Действия</th>
        </tr>
    </thead>
</table>



<div class="div_search_panel">
    <div class="divcontent_katalog">
        <div class="label_filtr">* Уважаемые клиенты! Обращаем Ваше внимание, что цены на сайте не являются публичной офертой.
            <br>
            Позиции, для которых не указана цена, являются малораспространенными.
            Пожалуйста, звоните нам, чтобы уточнить цену на эти позиции и условия поставки.
        </div>
    </div>
</div>





<!-- textblock_block.html -->
<!-- Текстовый блок -->

<div class="col-md-12">

</div>

<!-- END  Текстовый блок -->
<!-- end textblock_block.html -->

<!-- START PRODUCT-AREA -->
<!-- <div class="product-area">
    <div class="row">
        <div class="col-xs-12 col-md-12">

            <div class="product-menu">
                <div class="product-title">
                    <h3 class="title-group-2 gfont-1">Похожие товары</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="clear"></div>

    <div class="product carosel-navigation">
        <div class="row">
            <div class="active-product-carosel owl-carousel owl-theme" style="opacity: 1; display: block;">


   
                <div class="owl-wrapper-outer">
                    <div class="owl-wrapper" style="width: 1752px; left: 0px; display: block;">
                        <div class="owl-item" style="width: 219px;">
                            <div class="col-xs-12">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="/opory-skolzyashchie-homutovye-313-ts-008-011/">
                                            <img class="primary-img" src="/media/uploads/images/Опора_скользящая_хомутовая_313.ТС-008.011.png" alt="Опоры скользящие хомутовые 313.ТС-008.011">
                                        </a>
                                    </div>
                                    <div class="product-description">
                                        <h5><a href="/opory-skolzyashchie-homutovye-313-ts-008-011/">Опоры скользящие хомутовые 313.ТС-008.011</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 219px;">
                            <div class="col-xs-12">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="/opory-skolzyashchie-homutovye-fso-1/">
                                            <img class="primary-img" src="/media/uploads/images/Опоры_скользящие_ФСО_1.png" alt="Опоры скользящие хомутовые ФСО 1">
                                        </a>
                                    </div>
                                    <div class="product-description">
                                        <h5><a href="/opory-skolzyashchie-homutovye-fso-1/">Опоры скользящие хомутовые ФСО 1</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 219px;">
                            <div class="col-xs-12">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="/opory-skolzyashchie-homutovye-fso-2/">
                                            <img class="primary-img" src="/media/uploads/images/Опоры_скользящие_ФСО_2.png" alt="Опоры скользящие хомутовые ФСО 2">
                                        </a>
                                    </div>
                                    <div class="product-description">
                                        <h5><a href="/opory-skolzyashchie-homutovye-fso-2/">Опоры скользящие хомутовые ФСО 2</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 219px;">
                            <div class="col-xs-12">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="/opory-skolzyashchie-privarnye-opb1/">
                                            <img class="primary-img" src="/media/uploads/images/Опоры_подвижные_ОПБ_1.png" alt="Опоры скользящие приварные ОПБ1">
                                        </a>
                                    </div>
                                    <div class="product-description">
                                        <h5><a href="/opory-skolzyashchie-privarnye-opb1/">Опоры скользящие приварные ОПБ1</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="owl-controls clickable" style="display: none;">
                    <div class="owl-buttons">
                        <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
                        <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div> -->
<!-- END PRODUCT-AREA -->

<style>
    
</style>
<script>
    $.ajax({
            url: "/servisAjax/{{$service->id}}",
            type: "POST",

            success: function(data) {
                console.log(data);
            },
            error: function(msg) {
                console.log(msg);
            }
        });

    "use strict";
var KTDatatablesDataSourceAjaxServer = function() {

	var initTable1 = function() {
		var table = $('#ajax-users');

        // begin first table
		table.DataTable({
			responsive: true,
			searchDelay: 500,
			processing: true,
            "bAutoWidth": false,
			// serverSide: true,
			order: [ 0, 'asc' ],
			ajax: {
				url: "/servisAjax/{{$service->id}}",
				type: "POST"
			},
			columns: [
                // { data: 0, searchable: false},
                @foreach(json_decode($service_lots[0]->information) as $s_l_key => $s_l) { data: {{($s_l_key+1)}}, searchable: true }, @endforeach
				
                { data: null, searchable: false, orderable: false,
					render: function (data, type, row) {
						return `
                        <div class="kt-portlet__head-wrapper">
                                    <div class="kt-portlet__head-actions">
                                        <a href="/service/lot/`+ row[row.length - 1] +`" class="btn btn-success btn-elevate btn-icon-sm">
                                            
                                            Заказать
                                        </a>
                                    </div>
                                </div>
						
						
						`;
					}
				}
				
			],
			"language": {
				  "processing": "Подождите...",
				  "search": "Поиск:",
				  "lengthMenu": "Показать _MENU_ записей",
				  "info": "Записи с _START_ по _END_ из _TOTAL_ записей",
				  "infoEmpty": "Записи с 0 до 0 из 0 записей",
				  "infoFiltered": "(отфильтровано из _MAX_ записей)",
				  "infoPostFix": "",
				  "loadingRecords": "Загрузка записей...",
				  "zeroRecords": "Записи отсутствуют.",
				  "emptyTable": "В таблице отсутствуют данные",
				  "paginate": {
					"first": "Первая",
					"previous": "Предыдущая",
					"next": "Следующая",
					"last": "Последняя"
				  },
				  "aria": {
					"sortAscending": ": активировать для сортировки столбца по возрастанию",
					"sortDescending": ": активировать для сортировки столбца по убыванию"
				  }
			}
		});
	};

	return {

		//main function to initiate the module
		init: function() {
			initTable1();
		},

	};

}();

jQuery(document).ready(function() {
	KTDatatablesDataSourceAjaxServer.init();
});


</script>


@endsection