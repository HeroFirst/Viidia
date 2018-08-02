<!DOCTYPE html>
<html dir="ltr" lang="ru_RU">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="next-web & creative-head" />
    <meta name="_token" content="{{csrf_token()}}" />
     @yield('head')
    <style>
        article, aside, details, figcaption, figure, footer, header, hgroup, nav, section { display:block; }
        h1,h2,h3,h4,h5,h6 {
            color: #444;
            font-weight: 600;
            line-height: 1.5;
            margin: 0 0 30px 0;
            font-family: 'Raleway', sans-serif;
        }
        p,pre,ul,ol,dl,dd,blockquote,address,table,fieldset,form { margin-bottom: 30px;
            font-family:display-light;
        }
    </style>
   


    <!-- Stylesheets
    ============================================= -->

    <link rel="shortcut icon" href="{{asset('images/ico.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/swiper.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/dark.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('material_theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--[if lt IE 9]
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
   [endif]-->

    <!-- Document Title
    ============================================= -->



</head>

<body class="no-transition stretched side-header side-header-right open-header close-header-on-scroll">
<div id="header-closeif" style="display:none"></div>
<!-- Document Wrapper
-	============================================= -->
<div id="wrapper" class="clearfix">



    <!-- Header
    ============================================= -->
    <header id="header" class="no-sticky">

        <div id="header-wrap" style="overflow-y: hidden;">

            <div class="container clearfix">
                <div id="st-logo" class=" visible-xs">
                    <a href="/"><img  src="{{asset('images/logo.png')}}" style="height: 30px;margin: 37px 0px 7px 17px;" alt="viidia"></a>
                </div><!-- #logo end -->
                {{--<ul class="visible-xs list-inline" style=" position: absolute;right: 57px;top: 33px;">--}}
                {{--<li class=""><a href="/contacts" style="position: absolute;top: 59%;"><div id="primary-menu-maps" class="visible-xs"><i class="fa fa-map-marker" style="color:#ab1d45"></i></div></a></li>--}}
                {{--<li class=""><a href="tel:+78435248248 " style="position: absolute;top: 59%;"><div class="visible-xs" id="primary-menu-call"><i class="icon-call" style="color:#ab1d45"></i></div></a></li>--}}
                {{--<li class="">3</li>--}}
                {{--</ul>--}}
                {{--<a href="/contacts" style=" position: absolute;right: 119px;top: 45px;"><div id="primary-menu-maps" class="visible-xs"><i class="fa fa-map-marker" style="color:#ab1d45"></i></div></a>--}}
                <a style="z-index:1111" href="tel:88432156999" ><div class="visible-xs" id="mobile-menu-trigger" style="right: 76px;width:32px;height: 32px;top: 37px;"><i class="icon-call" style="color:#00c800;position: relative;top: -10px;"></i></div></a>



                <div id="primary-menu-trigger" trg=""><i class="icon-reorder" style="color:#00c800"></i></div>

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu">
                    <br>
                    <ul>
                        <li><a href="/"><div>Главная</div></a>

                    </ul>
                    <ul>
                        <li><a href="/about"><div>О компании</div></a>

                    </ul>
                    <ul>
                        <li><a href="/services"><div>Услуги</div></a>

                    </ul>
                    <ul>
                        <li><a href="/projects"><div>Проекты</div></a>
                    </ul>
                    <ul>
                        <li><a href="/technologies"><div>Технологии</div></a>
                    </ul>
                    <ul>
                        <li><a href="/contacts"><div>Контакты</div></a>
                    </ul>


                    <ul class="mobile-primary-menu">
                        <a href="/"><li><p>Главная</p></li></a>
                        <a href="/about"><li><p>О компании</p></li></a>
                        <a href="/services"><li><p>Услуги</p></li></a>
                        <a href="/projects"><li><p>Проекты</p></li></a>
                        <a href="/technologies"><li><p>Технологии</p></li></a>
                        <a href="/contacts"><li><p>Контакты</p></li></a>
                    </ul>
                </nav><!-- #primary-menu end -->



            </div>

        </div>

    </header><!-- #header end -->
    <div>
        <div class="col-md-2 col-md-offset-10 he-trig">
            <div id="header-trigger" class='ptr btn-head-on' style="position: absolute;z-index: 499;left: 0px;top:-10px">
                <i class="icon-line-menu gr-icon"></i><i class="icon-line-cross wh-icon"></i>
            </div>
        </div>
    </div>
    <div class="col-md-12 hidden-xs info-header">
        <div class="col-md-3 col-md-offset-1 "><a href="/"><img src="{{asset('images/logo.png')}}"/></a></div>
        <br class='visible-xs visible-sm'>
        <div class="col-md-3 adr" style="margin-left: 51px; margin-right: 17px; height:39px">
            <p style="   margin-bottom: 21px;margin-top: -4px;"><img style=" margin-right:6px; margin-bottom: 8px;"  src="{{asset('images/point.png')}}"/><span class="ad" style="line-height: 21px;">{{$setting->address}}</span></p>
            <a href="mailto:{{$setting->email}}"><p><img src="{{asset('images/info.png')}}"/> {{$setting->email}} </p></a>
        </div>
        <div class="col-md-2 center adr">
            <a href="tel:88432156999"><p>{{substr($setting->phone,0, 7)}} <span>{{substr($setting->phone,7, 20)}}</span></p></a>
            <p class="visible-xs visible-sm topmargin-lg"><a href="#modalCall" data-lightbox="inline" class="button button-border button-border-thin button-leaf share " >Перезвоните мне</a></p>
            <p><a href="#modalCall" data-lightbox="inline" class="long-bnt-head-call hidden-xs btn-viidia-head" >Перезвоните мне</a></p>
        </div>

    </div>



    <!-- Content
    ============================================= -->


    @yield('content')

    @if(Session::has('order'))
        <div class="modal-on-load" data-target="#myModal"></div>
    @endif
    <div class="modal1 mfp-hide" id="myModal">
        <div class="block divcenter nomargin" style="background-color: #FFF; max-width: 500px;">
            <div class="center " style="padding: 50px;">
                <img src="{{ asset('/images/logo.png') }}" width="100" alt="Viidia">
                <p class="nobottommargin" style="margin-top:40px; font-size:22px">Спасибо! Мы свяжемся с вами в течении 10 минут.</p>
                <button href="#videoguest" data-lightbox="inline" id="toSee" class="btn-lg button button-green button-3d close">ok</button>

            </div>

        </div>
    </div>

@if($pageinfo =='Контакты')
        <div>
            <div class="row col-price topmargin">


                <div class='container call'>
                    <div class="col-md-11 hidden-xs ">
                        <h2>Остались вопросы ?</h2>
                        <span class='min-c'>Оставьте заявку, и наш менеджер ответит в течение 10 минут</span>
                    </div>
                    <div class="col-md-11 center visible-xs ">
                        <h5>Оставьте заявку и мы рассчитаем  ваш проект по звонку</h5>
                    </div>
                    <form action="/orderprice" method="post">
                        {{ csrf_field() }}

                        <input type="hidden" name="pageinfo" value="{{$pageinfo}}">
                        <div class="col-md-12  contact-viidia">

                            <div class="col-md-8 col-md-offset-2 center forms">

                                <div class="col-md-6">
                                    <div class="form-group materail-input-block materail-input-block_success">
                                        <input type="text" required name="name" class="form-control materail-input" placeholder="Имя">
                                        <span class="materail-input-block__line"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group materail-input-block materail-input-block_success">
                                        <input type="text" required name="phone" class="form-control materail-input"  id="phone-mask" placeholder="Номер телефона">
                                        <span class="materail-input-block__line"></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group materail-input-block materail-input-block_success ">
                                        <input type="text" name="msg" class="form-control materail-input" placeholder="Ваш вопрос">
                                        <span class="materail-input-block__line"></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group materail-input-block materail-input-block_success cher-private">
                                        <input type="checkbox" required checked name="apruve" class="form-control materail-input" style="width: 14px;   margin-top: -3px;">
                                        <span>Отправляя форму, вы даете свое согласие на обработку персональных данных</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <input type="submit" class="button button-border button-border-thin button-green send-dd" value="Задать вопрос">
                    </form>
                </div>
            </div>
        </div>
    @else
        {{--<div>--}}
            {{--<div class="row col-price topmargin">--}}


                {{--<div class='container call'>--}}
                    {{--<div class="col-md-11 hidden-xs ">--}}
                        {{--<h2>Узнать стоимость проекта</h2>--}}
                        {{--<span class='min'>Оставьте заявку и мы рассчитаем <br> ваш проект по звонку</span>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-11 center visible-xs ">--}}
                        {{--<h5>Оставьте заявку и мы рассчитаем  ваш проект по звонку</h5>--}}
                    {{--</div>--}}
                    {{--<form action="/orderprice" method="post">--}}
                        {{--{{csrf_field()}}--}}
                        {{--<input type="hidden" name="pageinfo" value="{{$pageinfo}}">--}}
                        {{--<div class="col-md-12  contact-viidia">--}}

                            {{--<div class="col-md-8 col-md-offset-2 center forms">--}}
                                {{--<div class="col-md-12 msg hide">--}}
                                    {{--<p style="color:#3dae41; font-size:15px; position:absolute; top: -29px;">Спасибо , наши специалисты свяжутся с Вами в ближайшее время</p>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<div class="form-group materail-input-block materail-input-block_success">--}}
                                        {{--<input type="text" required name="name" class="form-control materail-input" placeholder="Имя">--}}
                                        {{--<span class="materail-input-block__line"></span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<div class="form-group materail-input-block materail-input-block_success">--}}
                                        {{--<input type="text" required name="phone" class="form-control materail-input"  id="phone-mask" placeholder="Номер телефона">--}}
                                        {{--<span class="materail-input-block__line"></span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-12">--}}
                                    {{--<div class="form-group materail-input-block materail-input-block_success ">--}}
                                        {{--<input type="text" name="msg" class="form-control materail-input" placeholder="Опишите задачу">--}}
                                        {{--<span class="materail-input-block__line"></span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-12">--}}
                                    {{--<div class="form-group materail-input-block materail-input-block_success cher-private">--}}
                                        {{--<input type="checkbox" required checked name="apruve" class="form-control materail-input" style="width: 14px;   margin-top: -3px;">--}}
                                        {{--<span>Отправляя форму, вы даете свое согласие на обработку персональных данных</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<input type="submit"  class="button button-border button-border-thin button-green send-dd" value="Узнать стоимость">--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    @endif

<!-- Modal -->
    {{--<div class="modal-on-load" data-target="#modalCall"></div>--}}

    <!-- Modal -->
    <div class="modal1 mfp-hide" id="modalCall">
        <div class="block divcenter" style="background-color: #FFF; max-width: 500px;">
            <div class="closeModal mfp-close " style="display:block; margin:20px 20px 0 0" title="Close (Esc)" type="button" ></div>

        <form method="POST" id="formx" action="javascript:void(null);" onsubmit="call()">
            {{ csrf_field() }}
            <div class="center" style="padding: 52px; padding-top:60px">
                <h3></h3>
                <p class="nobottommargin " style="display: none; " id="apruveModal"></p>
            <div class="row" style="margin-top: -13px;">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="form-group materail-input-block materail-input-block_success">
                            <input type="text" required name="name" id='name' class="form-control materail-input" placeholder="Имя">
                            <span class="materail-input-block__line"></span>
                        </div>
                    </div>
                    <div class="col-md-10 col-md-offset-1">
                        <div class="form-group materail-input-block materail-input-block_success">
                            <input type="text" required name="phone" class="form-control materail-input"  id="phone-mask41" placeholder="Номер телефона">
                            <span class="materail-input-block__line"></span>
                        </div>
                    </div>
                <div class="col-md-10 col-md-offset-1">
                    <div class="form-group materail-input-block materail-input-block_success cher-private" style="    height: 47px;">
                        <input type="checkbox" required checked name="apruve" class="form-control materail-input" style="width: 14px;   margin-top: -3px;">
                        <span style="left:0px">Отправляя форму, вы даете свое согласие на обработку персональных данных</span>
                    </div>
                </div>
                </div>

            </div>
            <div class="section center nomargin" style="padding: 30px;">
                <input type="submit" style="background-color:#3dae41; text-transform: none;" class="button" id="btn-save"  value="Перезвонить">
                {{--<a href="#" class="button" onClick="$.magnificPopup.close();return false;">Close this Modal</a>--}}
            </div>
        </form>
        </div>
    </div>

</div>

</section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <div id="footer">

        <div class="container">
            <div class="col-md-12 right footer-viidia" id="footer-viidia">
                <div class="col-md-2">
                    <p><a href="/about">О компании</a></p>
                    <p><a href="/technologies">Технологии</a></p>
                    <p><a href="/projects">Проекты</a></p>
                    <p><a href="/contacts">Контакты</a></p>
                    {{--<p><a href="#">Карта сайта</a></p>--}}

                </div>
                <div class="col-md-3">
                    <p>Услуги</p>
                    <ul>
                        <li><a href="/services/1">Проектирование</a></li>
                        <li><a href="/services/2">Монтаж</a></li>
                        <li><a href="/services/3">Поставка продукции</a></li>
                    </ul>

                </div>
                <div class="col-md-4 ">
                    <p>Подпишитесь на новости о проектах</p>
                    <form action="/mailsave" method="post">
                        {{csrf_field()}}
                        <div class="form-group materail-input-block materail-input-block_success ">

                            <input type="email" name="email" required class="form-control materail-input" placeholder="E-mail">
                            <span class="materail-input-block__line"></span>

                        </div>
                        <div style="height:65px">
                            <input type="checkbox" required checked name="apruve" class="form-control materail-input" style="width: 14px;   margin-top: -14px;">
                            <span id="min-priv-d">Отправляя форму, вы даете свое согласие на обработку персональных данных</span>
                        </div>
                        <input type="submit" class="button button-border button-border-thin button-leaf" value="Подписаться">



                    </form>
                </div>
                <div class="col-md-3">
					<span>
					© <?= date("Y", time())?> г. ООО «Виидиа»  <br>
                    <a href="/media/Политика_конфиденциальности.PDF" target="_blank" style="font-size:14px">Политика конфиденциальности</a>
					<br><br>
					<a class="made" href="http://creative-head.ru">Разработано в Creative Head</a>
					</span>
                    <br>
                </div>

            </div>

        </div><!-- #footer end -->
    </div><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
=============================================
<div id="gotoTop" class="icon-angle-up"></div>
-->
<!-- External JavaScripts
============================================= -->
@yield('map');
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
{{--<script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>--}}

<!-- Footer Scripts
-->
<script type="text/javascript" src="{{asset('js/functions.js')}}"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('js/maskedinput.js')}}"></script>
@yield('js');
<script>
    $(document).ready(function(){
        $('#show-adress-vid').click(function(){
            $('#contact-form-overlay-mini').show();
        });
        $('#slow-add-v').on('click', function(){
            $('#contact-form-overlay-mini').hide();


        });
        $('#slow-add-v').on('click', function(){
            $('#show-adress-vid').show();
        });
    });
</script>

    <script>

        $('#primary-menu-trigger').on('click',function(){
            if($(this).attr('trg') != 1) {
                $(this).attr('trg', '1');
                $(this).html('<p style="color: #00c800;font-family: inherit;font-size: 18px;font-weight: 600;">x</p>');
                $('#header .container').css('height','900px');
            }else{
                $(this).attr('trg', '0');
                $('#header .container').css('height','90px');
                $(this).html('<i class="icon-reorder" style="color:#00c800"></i>');
            }
        })

</script>
<script>
    $(document).ready(function(){
        $("#header-closeif").on('click',function(e) {
            $('body.open-header').toggleClass("side-header-open");
            $("#header-closeif").toggleClass('slide-chr13');
            return false;
        });
//        $('body-overlay').on('click', function(){
//            alert(13);
//        });




        $('.mfp-wrap button').hide();
    });
    $('#phone-mask').mask("+7(999) 999-9999");
    $('#phone-mask41').mask("+7(999) 999-9999");
    $(document).ready(function() {


        $(function () {
            $("#mdClose").on('click', function() {
                $('mfp-hide').remove();
                $('.mfp-wrap').remove();
                $('.mfp-bg').remove();
                $('html[dir="ltr"]').removeAttr('style');
                $('html[dir="ltr"]').css('height','auto');

            });
        });

        $("#btn-save").click(function (e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
                }
            })

            e.preventDefault();

            var formData = {
                name: $('#name').val(),
                phone: $('#phone-mask41').val(),
            }

            //used to determine the http verb to use [add=POST], [update=PUT]
            var state = $('#btn-save').val();

            var type = "POST"; //for creating new resource

//            console.log(formData);

            $.ajax({

                type: type,
                url: '/modalcall',
                data: formData,
                dataType: 'json',
                success: function (data) {
//                    console.log(data.name);
                    $('#apruveModal').html('Спасибо ' + data.name + '! Наши специалисты свяжутся с Вами в ближайшее время').css('color','#3dae41');
                    $('#apruveModal').show();
                },
                error: function (data) {
                    $('#apruveModal').html('Произошла ошибка, попробуйте повторить попытку.').css('color','red');
                    $('#apruveModal').show();
                }
            });

        });
    });


</script>

</body>
</html>