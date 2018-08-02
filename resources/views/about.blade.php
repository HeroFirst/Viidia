@extends('layouts.appviidia')

@section('head')
    <title>О компании | ВИИДИА</title>
    <meta name="description" content="Внедрение прогрессивных технологий энергосбережения в гражданском и промышленном строительстве.">
@endsection



@section('content')

    <section id="content">
        <div class='col-md-11 visible-xs col-md-offset-1 topmargin chek-serv-card '>

            {{--<p><a href="/">Главная </a><i class="fa fa-chevron-right"></i>   <span>Технологии</span></p>--}}
            <p><a href="/">Главная </a><i class="fa fa-chevron-right"></i></p>
            <h1>О компании</h1>

        </div>
        @if(count($achivments))
        <div class='center chek-teh hidden-xs hidden-sm '>
            @foreach($achivments as $k=>$ach)
                <div class="{{($k == 0) ? 'col-md-2  col-md-offset-1 col-sm-offset-1 col-xs-12' : 'col-md-2 col-xs-12'}}" >
                    <img src="images/about/check-teh.png" />
                    <div class='desc-teh'>
                        <p>{{strstr($ach->title, ' ', true)}}<span>{{strstr($ach->title,' ', false)}}</span></p>
                        <p>{{$ach->description}}  </p>
                    </div>
                </div>
            @endforeach
        </div>
@endif
        {{--<section id="page-title" class="page-title-parallax" style="background-image: url('images/parallax/9.jpg'); padding: 120px 0; z-index: 1;" data-stellar-background-ratio="0.3">--}}
        <section id="page-title" class="page-title-parallax gradient-page-title" style="padding: 120px 0;   z-index: 1;" >

            <div class="container clearfix" style="height:340px">

            </div>

        </section><!-- #page-title end -->
        <div class="content-wrap">


           <?= $setting->about_box?>


            <div class="container-fluide hidden section cf-section col-xs-12">

                <div class="col-md-4 col-md-offset-1 col-xs-offset-1 nobottommargin"><h2>Лицензии</h2></div>
                <div class='col-md-12 center  cf-viidia bottommargin ' data-lightbox="gallery">
                    <div class="col-md-2 col-xs-6 col-md-offset-1">
                        <a href="/images/about/CF/1.1.jpg" data-lightbox="gallery-item">
                            <img class='imglp' src="/images/lp.png"/>
                            <img  src="images/about/CF/1.jpg"/>
                        </a>
                    </div>
                    <div class="col-md-2 col-xs-6 ">
                        <a href="/images/about/CF/1.1.jpg" data-lightbox="gallery-item">
                        <img class='imglp' src="/images/lp.png"/>
                        <img class="image_fade" src="images/about/CF/1.jpg"/>
                        </a>
                    </div>
                    <div class="col-md-2 col-xs-6 ">
                        <a href="/images/about/CF/1.1.jpg" data-lightbox="gallery-item">
                        <img class='imglp' src="images/lp.png"/>
                        <img class="image_fade" src="images/about/CF/1.jpg"/>
                        </a>
                    </div>
                    <div class="col-md-2 col-xs-6 ">
                        <a href="/images/about/CF/1.1.jpg" data-lightbox="gallery-item">
                        <img class='imglp' src="images/lp.png"/>
                        <img class="image_fade" src="images/about/CF/1.jpg"/>
                        </a>
                    </div>
                    <div class="col-md-2 col-xs-6 ">
                        <a href="/images/about/CF/1.1.jpg" data-lightbox="gallery-item">
                        <img class='imglp' src="images/lp.png"/>
                        <img class="image_fade" src="images/about/CF/1.jpg"/>
                        </a>
                    </div>
                </div>



            </div>

            <div class="row hidden" >
                <div class="col-md-7 col-md-offset-1 col-xs-offset-1"><h2>Наша команда</h2></div>
            </div>

            <div class="container hidden" >
                <div class="col-md-12 team-viidia  center" id="team-viidia">
                    <div class="col-md-2">
                        <img src="images/about/team/alexandra.jpg"/>
                        <div>
                            <p>Александра</p><hr>
                            <p>Проектировщик КИТ</p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <img src="images/about/team/2.jpg"/>
                        <div>
                            <p>Василиса</p><hr>
                            <p>Главный помощник<br> секретаря</p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <img src="images/about/team/3.jpg"/>
                        <div >
                            <p>Александра</p><hr>
                            <p>Проектировщик КИТ</p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <img src="images/about/team/4.jpg"/>
                        <div>
                            <p>Василиса</p><hr>
                            <p>Проектировщик КИТ</p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <img src="images/about/team/2.jpg"/>
                        <div>
                            <p>Александра</p><hr>
                            <p>Проектировщик КИТ</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 center " id="share-viidia-team">
                    <a href="#team-viidia" class="long-btn" style="    padding: 10px 27px;">Все сотрудники <i class="fa fa-chevron-down" style="font-size:10px; "></i></a>

                </div>
            </div>


            @if(count($partners)>0)

            <div class='section' id="clients">
                <div class="row">
                    <div class="col-md-4 col-md-offset-1 col-xs-offset-1 "><h2>Партнеры</h2></div>
                </div>

                <div class='col-md-10 col-md-offset-1' style="overflow:hidden; margin-top:18px;">
                    <div id="demo">

                        <div id="owl-demo" class="owl-carousel">
                            @foreach($partners as $prt)
                                <div class="item"><img src='{{$prt->url}}' alt="Viidia parnter"></div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="clear bottommargin"></div>
            </div>
@endif


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


                    $('.cf-viidia div a').hover(
                            function(){
//        $(this).addClass('animated bounceOutLeft');
                                $(this).addClass('cf-viidia-active');
                                $(this).children('.imglp').show();
                            },
                            function(){
                                $(this).removeClass('cf-viidia-active');
                                $(this).children('.imglp').hide();
                            });




                </script>
    @endsection
