@extends('layouts.appviidia')

@section('head')
    <title>Реализованные проекты | ВИИДИА</title>

    <meta name="description" content="В числе реализованных проектов Офисный центр ТАИФ, региональный офис HONKA, отделение Сбербанка.">
@endsection



@section('content')
    <section id="content">

        {{--<section id="page-title" class="page-title-parallax" style="background-image: url({{asset('images/parallax/9.jpg')}}); padding: 120px 0; z-index: 1; position: absolute;   background-position: 50% -45px;  right: 0px;   left: 0px;" data-stellar-background-ratio="0.3">--}}
        <section id="page-title" class="page-title-parallax gradient-page-title" style="padding: 120px 0;  z-index: 1; position: absolute;   background-position: 50% -45px;  right: 0px;   left: 0px;" >
            <div class="container clearfix" style="height:360px">

            </div>

        </section><!-- #page-title end -->

        <div class="shod content-wrap" >


            <div class="col-md-12 row allprojects">
                <div class="row  ">

                    <div class="col-md-4 col-md-offset-1 chek-pr-card col-xs-offset-1 col-xs-12">
                        <p><a href="/">Главная </a><i class="fa fa-chevron-right"></i>   <span>Проекты</span></p>
                        <h1 style="margin-bottom: 0px;  font-size:80px;">

                            Проекты</h1>
                    </div>
                </div>
                <div id="addPr">
                @foreach($years as $k=>$year)

                    {{--@if(in_array($year['year'], $projects[$k]->toArray()))--}}
                        <div class="row year">
                            <div class="col-md-1 col-md-offset-1 col-xs-1 year"><h3>{{$year['year']}}</h3></div>
                            <div class="col-md-9 "><hr style="background-color:#aba5a2; height:3px"></div>
                        </div>
                    {{--@endif--}}
                    <div class="all-pr row center col-md-12 col-md-offset-1 col-sm-offset-1">

                        @foreach($projects as $project)
                            @if($project['year'] === $year['year'])

                            <a href="/projects/{{$project['id']}}">
                                <div data-animate="fadeInUp" class="col-md-4  col-sm-12 col-xs-12">

                                            <div class="description">
                                                <p>{{$project['title']}}</p><p class='small-address' style="color:white">{{$project['address']}}</p>
                                                <img class="visible-xs" src="images/svg/send.png" style="width: 34px;height: 29px;background-color: #fff;margin: 0 auto;padding: 10px;border-radius: 50px;" alt="">
                                            </div>
                                            <img src="{{$project['url']}}" alt='410x247'>

                                </div>
                            </a>
                            @endif
                        @endforeach

                </div>
            @endforeach
                </div>
            </div>
            <div class="row col-md-12 center" id="share-viidia-projects" ><p> Более ранние проекты <span class="fa fa-chevron-down"></span></p></div>


@endsection

@section('js')

    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                navigation : true
            });
            $('.owl-prev').html('<img src="images/svg/left.png">');
            $('.owl-next').html('<img src="images/svg/right.png">');



            $("#addPr").on('mouseover', function(){


                $('#addPr a div').hover(
                        function(){

                            $(this).children('div').show();
                            $(this).children('img').addClass('maskG');
                        },
                        function(){
                            $(this).children('div').hide();
                            $(this).children('img').removeClass('maskG');
                        });
                });

                    });
        var take=18;
        $('#share-viidia-projects').on('click', function(){
            $.get(
                    "/skip/take",
                    {
                        take: take
                    },
                    onAjaxSuccess
            );
            take +=9;
       });

        function onAjaxSuccess(data)
        {
            console.log(data.length);
            (data != 0) ? $('#addPr').html(data) : $('#share-viidia-projects').hide();


        }





    </script>
@endsection
