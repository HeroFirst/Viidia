@extends('layouts.appviidia')

@section('head')
    <title>{{$service['title']}} | ВИИДИА</title>
     <meta name="description" content="{{$service['description']}}">
    <style>
        #owl-demo .item .img-font{
            background-color:#169419;
        }
    </style>
@endsection

@section('content')
    <section id="content">

        <div class='col-md-11 col-md-offset-1 topmargin chek-serv-card '>

            <p><a href="/">Главная </a><i class="fa fa-chevron-right"></i> <a href="/technologies">Технологии</a> <i class="fa fa-chevron-right"></i>   <span>{{$service['title']}}</span></p>
            <h1>{{$service['title']}}</h1>

        </div>
        <div class="wrapMaskCard">

        </div>
        <section id="page-title" class="page-title-parallax" style="background-image: url('{{$service['cover_url']}}'); background-size:cover; padding: 40px 0; z-index: 1;" data-stellar-background-ratio="0.3">
        <div class="maskCard"></div>

            <div class="container clearfix" style="height:340px">

            </div>

        </section><!-- #page-title end -->


        <div class="content-wrap">
            <div class="row topmargin-lg">
                <div class="col-md-12">
                        <div id="ch-cont-efdit" class="col-md-10  col-md-offset-1">
                            <?= $service['big-description']?>
                        </div>


            <div class="col-md-12" style="margin:0px">
                {{--выполненные проекты--}}
                <div class='section' style="margin-top: 0px;" id="have_projects">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-1 "><h3>Выполненные проекты</h3></div>
                    </div>
{{--new--}}
                    <div class='col-md-10 col-md-offset-1' style="overflow:hidden; margin-top:18px;">

                        <div id="demo">

                            <div id="owl-demo" class="owl-carousel ">
                                @foreach($having as $project)
                                <a href="/projects/{{$project['id']}}">
                                    <div class="item">
                                        <div class="img-font" >
                                            <p id="desc12">{{$project['title']}}<br><br><span>{{$project['address']}}</span>
                                            </p>
                                            <img src='{{$project['url']}}' style="padding:0px; width:100%">

                                        </div>


                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div>

                    </div>



                    <div class="clear bottommargin"></div>
                </div>

            </div>

@endsection


@section('js')
                <script>
                    $(document).ready(function() {
                        $("#owl-demo").owlCarousel({
                            navigation : true,
                            items : 3
                        });
                        $('.owl-prev').html('<img src="/images/svg/cubeleft.png" style="cursor:pointer">');
                        $('.owl-next').html('<img src="/images/svg/cuberight.png" style="cursor:pointer"> ');

                    });

                    $('#owl-demo .item').hover(
                            function(){
//                    $(this).css('border','1px solid red');
                                $(this).children('.img-font').children('img').css('opacity','0.3');
                                $(this).children('.img-font').children('#desc12').show();
                            },function(){
                                $(this).children('.img-font').children('img').css('opacity','1');
                            $(this).children('.img-font').children('#desc12').hide();
                            }
                    );
                </script>
@endsection
