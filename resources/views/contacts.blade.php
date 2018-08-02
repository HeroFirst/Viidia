@extends('layouts.appviidia')

@section('head')
    <title>Контакты | ВИИДИА</title>
    <meta name="description" content="Телефон: 8 (843) 215 69 99 Адрес: 420021, Республика Татарстан, г. Казань, ул. Карла Маркса, д. 3 офис 41">
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>


@endsection



@section('content')

    <section id="content">

        <div class='col-md-11 col-md-offset-1 topmargin chek-serv-card '>

            {{--<p><a href="/">Главная </a><i class="fa fa-chevron-right"></i>   <span>Технологии</span></p>--}}
            <p><a href="/">Главная </a><i class="fa fa-chevron-right"></i></p>
            <h1>Контакты</h1>

        </div>
        {{--<section id="page-title" class="page-title-parallax" style="background-image: url('images/parallax/9.jpg'); padding: 40px 0; z-index: 1;" data-stellar-background-ratio="0.3">--}}
        <section id="page-title" class="page-title-parallax gradient-page-title" style="padding: 40px 0;  z-index: 1;" >
            <div class="container clearfix" style="height:340px">

            </div>

        </section><!-- #page-title end -->
        <div class="content-wrap">


        <section id="map-overlay">

                <div class="container clearfix">

                    <!-- Contact Form Overlay
                    ============================================= -->
                    <div id="contact-form-overlay-mini" class="clearfix">



                        <div class="fancy-title">
                            <h3>Адрес</h3> <span id="slow-add-v" class="visible-xs" style="color:#0da10b">свернуть</span>
                        </div>

                        <div class="contact-widget">
                            <div class="contactspage">
                                <p>420021, Республика Татарстан,<br>
                                    г. Казань, ул. Карла Маркса, д. 3
                                    офис 41
                                </p>
                                <a style="color:black" href="tel:88432156999"> <strong>8 (843) 215 69 99</strong></a>
                                <p>info@viidia.ru</p>
                            </div>

                        </div>


                    </div><!-- Contact Form Overlay End -->

                </div>
            <!-- Google Map
            ============================================= -->
            <section id="google-map" class="gmap"></section>

            <div class="col-xs-12 visible-xs" id="show-adress-vid" style="margin-top:-25px">
                <span style="color:#0da10b" >Показать адрес</span>
            </div>
        </section><!-- Contact Form & Map Overlay Section End -->

@endsection

@section('map')
 <script type="text/javascript">
        ymaps.ready(function () {
            var myMap = new ymaps.Map('google-map', {
                        center: [55.79788757, 49.11057300],
                        zoom: 17,
                        controls: []
                    }, {
                        searchControlProvider: 'yandex#search'
                    }),

                    myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                        hintContent: 'Собственный значок метки',
                        balloonContent: 'Это красивая метка'
                    }, {
                        // Опции.
                        // Необходимо указать данный тип макета.
                        iconLayout: 'default#image',
                        // Своё изображение иконки метки.
                        iconImageHref: 'images/icons/marker.png',
                        // Размеры метки.
                        iconImageSize: [185, 47],
                        // Смещение левого верхнего угла иконки относительно
                        // её "ножки" (точки привязки).
                        iconImageOffset: [-5, -38]
                    });
            myMap.behaviors.disable('scrollZoom');
            myMap.behaviors.disable(['drag','multiTouch']);
            myMap.geoObjects
                    .add(myPlacemark)
                    .add(myPlacemarkWithContent);
        });
    </script>

   
@endsection
