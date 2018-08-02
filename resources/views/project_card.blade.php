@extends('layouts.appviidia')

@section('head')
    <title>{{$service['title']}} | ВИИДИА</title>
     <meta name="description" content="{{$service['description']}}">
@endsection

@section('content')
    <section id="content">

        <div class='col-md-11 col-md-offset-1 topmargin chek-serv-card '>

            <p><a href="/">Главная </a><i class="fa fa-chevron-right"></i> <a href="/projects">Проекты</a> <i class="fa fa-chevron-right"></i>   <span>{{$service['title']}}</span></p>
            <h1>{{$service['title']}}</h1>

        </div>
        <div class="wrapMaskCard">

        </div>
        <section id="page-title" class="page-title-parallax" style="background-image: url('{{asset('images/parallax/9.jpg')}}'); padding: 40px 0; z-index: 1;" data-stellar-background-ratio="0.3">

            <div class="container clearfix" style="height:340px">

            </div>

        </section><!-- #page-title end -->


        <div class="content-wrap">
              @if($galery)
            <div class="col-md-12">
                 <img id="prev-btn-action" src="{{asset('images/svg/cubeleft.png')}}" alt="">
                <img id="next-btn-action" src="{{asset('images/svg/cuberight.png')}}" alt="">
            </div>
            <div class="col-md-10 col-md-offset-1 ">

                {{--New slider--}}
              
                <div class="main-slider">
                    <div class="owl-carousel viidia-gal-items" data-lightbox="gallery">


                        @for($i=0; $i<count($galery); $i++)

                            <div class="item viidia-img-item" id="{{$i+1}}">
                                @if(!empty($galery[$i]['big-url']))
                                <img class="check-img-g" src="{{asset($galery[$i]['url'])}}">
                                <a href="{{asset($galery[$i]['big-url'])}}" data-lightbox='gallery-item'><div class='check' style='display: none;'><span>+</span></div></a>
                                @else
                                <img src="{{asset($galery[$i]['url'])}}">
                                <a href="{{asset($galery[$i]['url'])}}" data-lightbox='gallery-item'><div class='check' style='display: none;'><span>+</span></div></a>
                                
                                @endif
                            </div>

                        @endfor
                       




                    </div>
                   
            </div>
              @endif
              </div>
                {{--New slider--}}
           
           @if($galery)
            <div class="row topmargin-lg">
            @else
            <div class="row">
            @endif

                <div class="col-md-12">
                    <div id="ch-cont-efdit" class="col-md-10  col-md-offset-1">
                        <?=$service['description']?>
                    </div>
                </div>
            </div>



@endsection


                @section('js')

                <script>
                    $(document).ready(function() {

  $('.check-img-g').on('click',function(){
      $(this).parent('div').children('.viidia-mouse').show();
  });
                        // $("body .viidia-mouse").mouseover(function()
                        //     {
                               
                        //       var el =$(this).parent('div');
                        //       console.log(el.html());
                        //       if(el.hasClass('center')) {
                                  
                        //         consoloe.log(1);
                                
                        //       el.children('a').children('.check').show();
                        //     //  var imgUrl = $(this).children('img').attr('big-url');
                        //     //   $(this).append("<a href="+imgUrl+" data-lightbox='gallery-item'><div class='check' style='display: block;'><span>+</span></div></a>");
                        //         // el.children('a').children('.check').show();
                        //       }else{
                        //           consoloe.log(0);
                        //       }
                                  
                        //       }).mouseout(function()
                        //     {
                        //         $(this).children('a').children('.check').hide();
                        //     });

            $('.owl-prev').html('<img src="/images/svg/cubeleft.png">');
            $('.owl-next').html('<img src="/images/svg/cuberight.png">');



        });

        $('#owl-demo .item').hover(
                function(){
//                    $(this).css('border','1px solid red');
                    $(this).css('padding','0px 5px');
                },function(){
                    $(this).css('padding','0px 0px');
                }
        );
    </script>
                <script src="{{asset('/owlcarousel/owl.carousel.min.js')}}"></script>
              @if($galery)
                <script>
                    $(document).ready(function() {
                        var owl = $('.owl-carousel');
                        owl.owlCarousel({
                            loop:1,
                            margin:-123,
                            mouseDrag:0,
                            slideBy : 1,
                            smartSpeed: 1000,
                            items: 4,
                            nav: false,
                            dots:false,
                            center:true,
                            responsive:{ //Адаптивность. Кол-во выводимых элементов при определенной ширине.
                                0:{
                                    items:1,
                                    margin:123,
                                },
                                453:{
                                    items:1,
                                    margin:123,
                                },
                                1200:{
                                    items:4,
                                },
                                1366:{
                                    items:4
                                },
                                1920:{
                                    items:6
                                },
                                4096:{
                                    items:11
                                }
                            }
                        });
                        $('.owl-carousel .item').on('click', function() {
                            var slide = $(this)[0].id;
                            owl.trigger('to.owl.carousel', slide-1);
                        });
                        $("#next-btn-action").click(function() {
                            owl.trigger('next.owl.carousel');

                        });

                        $("#prev-btn-action").click(function() {
                            owl.trigger('prev.owl.carousel');
                        });
                        $('.check-img-g').on('click', function(){
                           console.log(1);
                           $(this).parent('div').children('a').children('.check').show();
                        });
                        
                        $('.owl-carousel .owl-stage div').hover(
                            function(){
                                if($(this).hasClass('center')) {
                                   
                                     $(this).children('.item').children('a').children('.check').show();
                                }
                            },
                            function(){
                                $(this).children('.item').children('a').children('.check').hide();
                            }
                        );
                        
                        $('.owl-prev').html('<img id="optoce" style="width:55%; margin-left:26px; padding-top: 12px;" src="/images/svg/left.png">');
                        $('.owl-next').html('<img id="optoce" style="width:55%; margin-right:27px; padding-top: 12px;" src="/images/svg/right.png">');
                        $('.owl-stage-outer').addClass('owl-drag-left');
$('.mfp-img').removeClass('mfp-img');
                    });
                </script>
            @endif
@endsection
