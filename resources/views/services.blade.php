@extends('layouts.appviidia')

@section('head')
    <title>Проектирование, монтаж и поставка энергосберегающих систем | ВИИДИА</title>
    <meta name="description" content="Проектирование, монтаж и поставка энергосберегающих систем | ВИИДИА">
@endsection



@section('content')

    <section id="content">


        <div class='col-md-11 col-md-offset-1 topmargin chek-serv-card '>

            <p><a href="/">Главная </a><i class="fa fa-chevron-right"></i>   <span>Услуги</span></p>
            <h1>Услуги</h1>

        </div>
        {{--<section id="page-title" class="page-title-parallax" style="background-image: url('images/parallax/9.jpg'); padding: 40px 0; z-index: 1;" data-stellar-background-ratio="0.3">--}}
        <section id="page-title" class="page-title-parallax gradient-page-title" style="padding: 40px 0;  z-index: 1;" >

            <div class="container clearfix" style="height:340px">

            </div>

        </section><!-- #page-title end -->
        <div class="content-wrap">

            @foreach($services as $k=>$service)
                {{--<div class="row visible-xs topmargin">--}}
                     {{--<div class="col-md-12">--}}
                            {{--<div class="col-md-5 text-right col-md-offset-1">--}}
                                {{--<img src="{{$service['url']}}"/>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-5 service-descripion">--}}
                                {{--<span>--}}
                                    {{--<h3>{{$service['title']}}</h3>--}}
                                    {{--<p style="padding:0px">--}}
                                        {{--{{$service['description']}}--}}
                                    {{--</p>--}}
                                    {{--<a href="services/{{$service['id']}}" class="long-btn">Подробнее <i class="fa fa-chevron-right"></i></a>--}}
                                {{--</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                {{--</div>--}}
            <div class="row hidden-xs topmargin">
                @if($k % 2 == 0)
                    <div class="col-md-12">
                        <div class="col-md-5 text-right col-md-offset-1">
                            <img src="{{$service['url']}}"/>
                        </div>
                        <div class="col-md-5 service-descripion">
                                <span>
                                    <h3>{{$service['title']}}</h3>
                                    <p style="padding:0px">
                                        {{$service['description']}}
                                    </p>
                                    <a href="services/{{$service['id']}}" class="long-btn">Подробнее <i class="fa fa-chevron-right"></i></a>
                                </span>
                        </div>
                    </div>
                 @else
                    <div class="col-md-12">
                        <div class="col-md-5 col-md-offset-1 text-right service-descripion">
                                <span>

                                    <h3>{{$service['title']}}</h3>
                                        <p style="padding:0px">
                                            {{$service['description']}}
                                        </p>
                                    <a href="services/{{$service['id']}}" class="long-btn">Подробнее <i class="fa fa-chevron-right"></i></a>

                                </span>
                        </div>
                        <div class="col-md-5 ">
                            <img src="{{$service['url']}}"/>
                        </div>
                    </div>
                @endif
            </div>
            @endforeach



            @endsection

            @section('js')
                <script>
                    $(document).ready(function() {
                        $("#owl-demo").owlCarousel({
                            navigation : true
                        });
                        $('.owl-prev').html('<img src="images/svg/left.png">');
                        $('.owl-next').html('<img src="images/svg/right.png">');

                    });
                </script>

                <script>


                    $('.cf-viidia div').hover(
                            function(){

                                $(this).removeClass('col-md-2');
                                $(this).addClass('col-md-3');

                                $(this).addClass('cf-viidia-active');
                                $(this).children('.imglp').show();
                            },
                            function(){
                                $(this).removeClass('cf-viidia-active');
                                $(this).removeClass('col-md-3');
                                $(this).addClass('col-md-2');
                                $(this).children('.imglp').hide();
                            });




                </script>
@endsection
