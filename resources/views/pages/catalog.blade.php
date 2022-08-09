@extends('layout')

@section('content')


<span> <a href="/">Главная</a>




    &gt;&gt; {{$catalog->name}}

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
                            <h3 class="title-group-2 gfont-1" style="font-family: Tahoma;">{{$catalog->name}}</h3>
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

                                @foreach ($service as $s)
                                <!-- Start Single-Product -->
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <div class="single-product">



                                        <div class="product-img">
                                            <a href="/service/{{$s->id}}">
                                                <img class="primary-img" src="{{$s->img}}" alt="{{$s->name}}" style="width: 187px;height: 187px;">
                                            </a>
                                        </div>
                                        <div class="product-description text-center">
                                            <h5 style="height: 25px;"><a href="/service/{{$s->id}}" style="font-family: Arial;">{{$s->name}}</a></h5>

                                        </div>
                                    </div>
                                </div>
                                <!-- End Single-Product -->
                                @endforeach
                                



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



<!-- textblock_block.html -->
<!-- Текстовый блок -->

<div class="col-md-12">

</div>

<!-- END  Текстовый блок -->
<!-- end textblock_block.html -->

@endsection