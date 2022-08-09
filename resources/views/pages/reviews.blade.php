<title>Отзывы завода ПНД труб | {{$settings->name}}</title>
<meta name="keywords" content="отзывы пнд, труба отзыв, канализация отзыв, трубы компании">
<meta name="description" content="Отзывы клиентов о компании по предоставлению услуг установки ПНД труб, канализации, водопровода, ГНБ.">

@extends('layout')

@section('content')


<link rel="stylesheet" href="/temple/pk/css/reviews.css?v={{time()}}">

<div id="rec223352509" class="r t-rec" style=" " data-animationappear="off" data-record-type="396">

    <div class="t396">
        <div class="t396__artboard rendered">
            <div class="t396__carrier"></div>
            <div class="t396__filter"></div>
            <div class="t396__elem tn-elem tn-elem__2233525091597322975846" data-elem-id="1597322975846">
                <h1 class="tn-atom" field="tn_text_1597322975846">ОТЗЫВЫ ПОСЕТИТЕЛЕЙ<span>({{$reviewsCol}})</span></h1>
            </div>
            <div class="t396__elem tn-elem tn-elem__2233525091604335383549" data-elem-id="1604335383549">
                <a class="tn-atom" href="#comment-add-form-block">Оставить отзыв</a>
            </div>

        </div>
    </div>
</div>
<div id="rec89090443">
    <!-- t605 -->
    <div class="t605 t605__witharrows">
        <div class="t-slds" style="">
            <div class="t-slds__main t-container">
                <div class="t-slds__container">
                    <div class="t-slds__items-wrapper t-slds_animated-none">
                        <div class="t-slds__item t-slds__item-loaded">
                            <div class="t-width t-width_7 t-margin_auto">
                                <div class="t-slds__wrapper t-align_center">
                                    <div class="t605__bgimg t605__img_circle t-bgimg loaded" style=" background-image: url('https://sun9-36.userapi.com/impg/chtcAazp_4J1vXKED5Z_8CG6lnBzSphGdzYelA/Nl5484rjdsw.jpg?size=1200x1600&quality=96&sign=bdaca2688df3ce062fc39cd0141e26bb&type=album');" src=""></div>
                                    <div class="t605__text t-text t-text_md">Продал машину в течении трех часов. Отдал машину как есть, с мелкими дефектами по кузову. Оформление по договору, деньги получил сразу, все хорошо. Спасибо.<br>
                                    </div>
                                    <div class="t605__title t-name t-name_lg ">Иван Бывальцев</div>
                                    <div class="t605__title t-name t-time_lg ">27/06/2022</div>
                                </div>
                            </div>
                        </div>

                        <div class="t-slds__item t-slds__item-loaded">
                            <div class="t-width t-width_7 t-margin_auto">
                                <div class="t-slds__wrapper t-align_center">
                                    <div class="t605__bgimg t605__img_circle t-bgimg loaded" style=" background-image: url('/temple/pk/img/reviews/no.jpg');" src=""></div>
                                    <div class="t605__text t-text t-text_md">Продал машину в течении трех часов. Отдал машину как есть, с мелкими дефектами по кузову. Оформление по договору, деньги получил сразу, все хорошо. Спасибо.<br>
                                    </div>
                                    <div class="t605__title t-name t-name_lg ">Иван Бывальцев
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>

            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.t-slds__items-wrapper.t-slds_animated-none').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                adaptiveHeight: true
            });
        });
    </script>

</div>

<div id="rec245692053" class="r t-rec t-rec_pt_0 t-rec_pb_60 r_showed r_anim" style="padding-top:0px;padding-bottom:60px; " data-record-type="529">
    <!-- t529 -->
    <div class="t529">
        <div class="t529__container t-container">

            @foreach($reviews as $review)
            <div class="t529__col t-col t-col_6">
                <div class="t529__bubble t529__bubble_left" style="background: #f9f9f9; border-radius: 0px;">
                    <div class="t529__text t-text t-text_sm" field="li_text__1604335895047" style=" font-size:16px;line-height:1.65;font-weight:400;font-family:'Muller';">
                        {{$review->review}}
                    </div>
                </div>
                <div class="t529__bubble-tail" style="border-color: #f9f9f9 transparent transparent #f9f9f9;"></div>
                <div class="t529__name-wrapper">
                    <div class="t-cell"> </div>
                    <div class="t-cell">
                        <div class="t529__name t-name t-name_xs" field="li_title__1604335895047">{{$review->name}}</div>
                        <div class="t529__name t-name t-name_xs t-time_lg">{{$review->created_at}}</div>
                    </div>
                </div>
            </div>
            @endforeach
            {!! $reviews->links() !!}
        </div>
        <style>
            nav[aria-label="Pagination Navigation"]{
                display: none;
            }
        </style>
        <script>
            $(document).ready(function() {
                var link = 0, maxLink;

                $(document).on('click', '#new_reviews', function(event) {
                    event.preventDefault();
                    if(!link){
                        link = $('nav[aria-label="Pagination Navigation"] a[rel="next"]').attr('href').split('page=')[1];
                        maxLink = $('nav[aria-label="Pagination Navigation"] span.rounded-md a:eq(1)').attr('href').split('page=')[1];
                        $('nav[aria-label="Pagination Navigation"]').remove();
                    }
                    if(maxLink == link){
                        $("#new_reviews").fadeOut(300);
                    }
                    
                    fetch_data();
                });

                function fetch_data() {
                    $.ajax({
                        url: "/reviews/pagination/" + link,
                        success: function(data) {
                            link++;
                            console.log(data);


                            data.forEach(function(elem) {
                                $(".t529__container.t-container").append(`
                                <div class="t529__col t-col t-col_6" style="display: none;">
                                    <div class="t529__bubble t529__bubble_left" style="background: #f9f9f9; border-radius: 0px;">
                                        <div class="t529__text t-text t-text_sm" field="li_text__1604335895047" style=" font-size:16px;line-height:1.65;font-weight:400;font-family:'Muller';">
                                            `+elem.review+`
                                        </div>
                                    </div>
                                    <div class="t529__bubble-tail" style="border-color: #f9f9f9 transparent transparent #f9f9f9;"></div>
                                    <div class="t529__name-wrapper">
                                        <div class="t-cell"> </div>
                                        <div class="t-cell">
                                            <div class="t529__name t-name t-name_xs" field="li_title__1604335895047">`+elem.name+`</div>
                                            <div class="t529__name t-name t-name_xs t-time_lg">`+elem.created_at+`</div>
                                        </div>
                                    </div>
                                </div>
                                `);
                            });
                            $(".t529__container.t-container .t529__col").fadeIn(400);
                            
                        }
                    });
                }

            });
        </script>
    </div>
    <style>
        .t529__container.t-container{
            transition: all 1.5s;
            overflow: hidden;
            
        }
        .t-review-social-links {
            line-height: 0px;
        }

        .t-review-social-links__wrapper {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            width: auto;
        }

        .t-review-social-links {
            margin-top: 15px;
        }

        .t-review-social-links__item {
            padding: 0px 4px;
        }

        .t-review-social-links__item svg {
            width: 20px;
            height: 20px;
        }

        .t-review-social-links__wrapper_round .t-review-social-links__item svg {
            width: 23px;
            height: 23px;
        }

        .t-review-social-links__item:first-child {
            padding-left: 0px;
        }

        @media screen and (max-width: 960px) {
            .t-review-social-links__item {
                margin-bottom: 3px;
            }
        }

        @media screen and (max-width: 640px) {
            .t-review-social-links {
                margin-top: 13px;
            }

            .t-review-social-links__item {
                padding: 0px 3px;
            }

            .t-review-social-links__item svg {
                width: 17px;
                height: 17px;
            }

            .t-review-social-links__wrapper_round .t-review-social-links__item svg {
                width: 20px;
                height: 20px;
            }
        }

        .t529 .t-review-social-links {
            margin-top: 7px;
        }

        .t529 .t-review-social-links__wrapper_round .t-review-social-links__item svg {
            width: 20px;
            height: 20px;
        }

        .t529 .t-review-social-links__item {
            padding: 0 3px;
        }

        @media screen and (max-width: 640px) {
            .t529 .t-review-social-links__wrapper_round .t-review-social-links__item svg {
                width: 17px;
                height: 17px;
            }
        }
    </style>
</div>
<div id="rec247245297" class="r t-rec" style=" " data-animationappear="off" data-record-type="396">
    <!-- T396 -->

    <div class="t396">
        <div class="t396__artboard rendered" data-artboard-recid="247245297" data-artboard-height="250" data-artboard-height-res-640="160" data-artboard-height_vh="" data-artboard-valign="center" data-artboard-upscale="" data-artboard-ovrflw="" data-artboard-proxy-min-offset-top="0" data-artboard-proxy-min-height="250" data-artboard-proxy-max-height="250">
            <div class="t396__carrier" data-artboard-recid="247245297"></div>
            <div class="t396__filter" data-artboard-recid="247245297"></div>
            <div class="t396__elem tn-elem tn-elem__2472452971604335383549" data-elem-id="1604335383549" style="left: 42%;">
                <a class="tn-atom" id="new_reviews">Ещё отзывы</a>
            </div>
        </div>
    </div>

</div>
<div class="comment-add-form-block" id="comment-add-form-block">
    <h2 class="subheader">Есть, что добавить? Поделись со всеми!</h2>
    <p class="abstract">Ваш комментарий</p>

    <form name="iblock_add" class="comment-addform" id="form_review">

        <textarea class="form-textarea" cols="30" rows="12" name="review" placeholder="Напишите сюда свой комментарий"></textarea>

        <input type="text" class="text-input-tel" name="phone" size="30" value="" placeholder="Телефон" inputmode="text">
        <input type="text" class="text-input-tel" name="email" value="" placeholder="E-mail" inputmode="text">

        <input type="text" class="text-input-name" name="name" size="30" value="" placeholder="Имя">

        <div class="btn-box">
            <div class="btn-gradient">
                <div>
                    Отправить
                    <svg width="41" height="16" viewBox="0 0 41 16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M40.7071 8.70711C41.0976 8.31658 41.0976 7.68342 40.7071 7.29289L34.3431 0.928932C33.9526 0.538408 33.3195 0.538408 32.9289 0.928932C32.5384 1.31946 32.5384 1.95262 32.9289 2.34315L38.5858 8L32.9289 13.6569C32.5384 14.0474 32.5384 14.6805 32.9289 15.0711C33.3195 15.4616 33.9526 15.4616 34.3431 15.0711L40.7071 8.70711ZM0 9H40V7H0V9Z"></path>
                        <defs>
                            <linearGradient id="paint57_linear" x1="17.5" y1="8" x2="44" y2="8" gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#FD2E3D"></stop>
                                <stop offset="1" stop-color="#FD852E"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
        </div>
        <p class="comment-form-warning">Нажимая кнопку «Отправить», вы разрешаете обработку персональных данных и соглашаетесь с <a href="/politics" target="_blank">политикой конфиденциальности</a></p>
    </form>


</div>

<script>
    $('.comment-add-form-block input[name="phone"]').mask("?+9(999) 999-99-99");

    $.mask.definitions['~'] = '[+-]';
    $.mask.definitions['h'] = '[A-Fa-f0-9]';

    $("#form_review .btn-gradient").on('click', function() {
        $('#form_review input, #form_review textarea').removeClass('error');
        $.ajax({
            url: '/reviews',
            type: "POST",
            data: $('#form_review').serialize(),
            success: function(data) {
                window.location.href = '/email';
            },
            error: function(msg) {
                var errors = msg.responseJSON;
                errors = errors["errors"];
                console.log(errors);

                for (var key in errors) {
                    // $('#form_review input[name="' + key + '"]').closest('.form-group').children('.error.text-danger').text(errors[key][0]).fadeIn(200);
                    $('#form_review input[name="' + key + '"], #form_review textarea[name="' + key + '"]').addClass('error');
                }
            }
        });
    });
</script>
@endsection