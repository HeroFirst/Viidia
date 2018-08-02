@extends('layouts.appviidia')

@section('head')
    <title>Инновационная инженерно-строительная компания | ВИИДИА</title>
    <meta name="description" content="Проектирование и монтаж лучистого отопления, интеллектуальных жалюзи, ограждающих конструкций, проточных батарей.">
    <script>if(window.screen.width>=767){document.write(' <link href="templates/viidia/css/mainb438.css" rel="stylesheet" />');}</script>


    <script>

    </script>

@endsection

@section('content')
    <main class="hidden-xs hidden-sm">
        <div class="content" style="height:160px">

            <script>


                var timeLineData = {
                    "categories" : [
                        {
                            "title" : "Viidia"
                        }
                    ],
                    "years" : {!! json_encode($arrayYears) !!},
                    "events" :  {!! json_encode($arrayItems) !!}
                };


                console.log(timeLineData.events);
            </script>
            <div class="events-widget" >

                    {{--<div style="position:absolute; top:40px; z-index:22">--}}
                        {{--и--}}
                    {{--</div>--}}
                    {{--<div style="position:absolute; float:left; z-index: 22; top:197px; left:0px; border:0.4px solid gray; width:42%;"></div>--}}
                     {{--<div style="position:absolute; float:left; z-index: 22; top:197px;  border:0.4px solid gray; width:100px;">12</div>--}}
                    {{--<div style="position:absolute; float:left; z-index: 22; top:197px; right:0px; border:0.4px solid gray; width:42%;"></div>--}}
            {{--<ul class="list-inline" style="z-index:22">--}}
                {{--<li class="list-inline-item" style="width:40%;padding: 0px;border: 0.8px solid #8f9599;margin: -3px;"></li>--}}
                {{--<li id="toSmall" class="list-inline-item" style="padding: 0px;"><img src="images/svg/btn-history-close.png" style="top: -8px;position: absolute;" alt=""></li>--}}
                {{--<li id="toBigTimline" class="list-inline-item" style="display:none; padding: 0px;"><img src="images/svg/btn-history-open.png" style="top: -8px;position: absolute;" alt=""></li>--}}
                {{--<li class="list-inline-item" style="width: 41%;top: 15px;position: absolute;border: 0.8px solid #8f969b;right: 0px;"></li>--}}
            {{--</ul>--}}

                <div class="col-md-12 text-center" style="z-index:22">
                    <div class=" hr-slow-l col-md-5"> </div>
                    <div  class="col-md-2 c-b-b  nopadding text-center" >
                        <img id="toSmall" src="images/svg/btn-history-close.png" style="  display: none;  padding-top: 2px;" alt="">
                        <img id="toBigTimline" src="images/svg/btn-history-open.png" style="" alt="">
                    </div>
                    <div class="hr-slow-r col-md-5"></div>
                </div>





                    {{--<div class="l-blank" style="background-color:#fff; float:left; height:24px; width:42%;    z-index: 22;position: absolute;bottom: 85%;"></div>--}}
                    {{--<div class="l-blank2" style="    background-color: transparent;right: 0px;height: 24px;width: 44%;z-index: 22;position: absolute;bottom: 85%;"></div>--}}
                    {{--<div class="l-blank" style="background-color: #fff;right: 0px;height: 22.8px;width: 42.3%;z-index: 22;position: absolute;bottom: 85%;"></div>--}}

                <div class="wrapMask">
                    <p class="vert-title-history">История компании</p>
                </div>

                <div class="" ></div>
                <div class="wrap" style="display:none">

                    <div class="red-select hide">
                        <select id="event-type" data-placeholder=" "></select>
                    </div>
                    <h1 class="hide"></h1>
                    <div class="timeline">
                        <div  class="timeline-carousel-wrap">
                            <div class="timeline-carousel"></div>
                            <a class="timeline-prev timeline-arrow"><img src="templates/viidia/images/prev.png"/></a>
                            <a class="timeline-next timeline-arrow"><img src="templates/viidia/images/next.png"/></a>
                        </div>
                        <div class="event">
                            <div class="event-info">
                                <div class="event-years" id="lineYear"></div>
                                <h2 id="eventTitle" style="display:none"></h2>
                                <span class="event-date" id="eventPeriod" style="display:none"></span>
                            </div>
                            <div class="event-text " style="display:none">
                                <div>
                                    <svg class="svg" width="100%" height="135px">
                                        <defs>
                                            <mask id="mask" maskUnits="userSpaceOnUse" maskContentUnits="userSpaceOnUse">
                                                <linearGradient id="g" gradientUnits="objectBoundingBox" x2="0" y2="1">
                                                    <stop stop-color="white" stop-opacity="1" offset="0"/>
                                                    <stop stop-color="white" stop-opacity="0" offset="1"/>
                                                </linearGradient>
                                                <rect width="100%" height="100%" fill="url(#g)"/>
                                            </mask>
                                        </defs>
                                        <foreignObject width="100%" height="100%">
                                            <text id="eventPreview" fill="red"></text>
                                        </foreignObject>
                                    </svg>
                                </div>
                                <a class="more" id="eventLink" href="index.html">Читать далее <span>+</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cont">



                    <div class="mouse" style="display:none">
                        <span></span>
                    </div>


                </div>
                <div class="col-md-12 svgmodule" style="z-index:22;padding:0px;position: absolute; display:block; margin-top:86px">
                    <div class=" col-md-5" style="z-index:22;top: -18px; height:24px; background-color:#fff; padding: 0px;">
                        <img  src="images/svg/s-l-u.png" style="position: absolute;right: -15px;" alt="">
                    </div>
                    <div  class="col-md-2  nopadding " >



                    </div>
                    <div class="col-md-5" style="height: 24px;background-color: white;top: -18px;">  <img  src="images/svg/s-l-u.png" class="h-glass" style="transform: scale(-1,1);position: absolute;left: -14.5px;"  alt=""></div>
                </div>
            </div>

        </div>

    </main>
    <div class="cont">
        <div style="
    margin: 0px auto 0px auto;
    /* border: 1px solid; */
    width: 184px;
    padding-top: 61px;
">

            {{--<button id="toSmall" class="long-bnt-head-call hidden-xs btn-viidia-head">Перезвонить мне</button>--}}
            {{--<button id="toBigTimline" class="long-bnt-head-call hidden-xs btn-viidia-head">Перезвонить мне</button>--}}


        </div>
    </div>
    <section id="content">

        <div class="shodes content-wrap">

            {{--<img src="images/projects/1.jpg" data-animate="fadeInUp" />--}}
    {{--Проекты--}}
@if(!empty($projects))
<div class="row  here4projects">
                <div class="row bottommargin">
                    <div class="col-md-4 col-md-offset-1 col-xs-4 col-xs-offset-1"><h2>Проекты</h2></div>
                </div>
<div class="row  hidden-xs">

    <div class="col-md-10 col-md-offset-1 projects fadeInUp animated"  data-animate="fadeInUp">
        @if(!empty($projects[0]))
            <a href="/projects/{{$projects[0]['id']}}">    <div class="col-md-6 " data-animate="fadeInUp">
                <div class="min-img pull-right" >
                    <div class="description" >
                        <p>{{$projects[0]['title']}}</p><p>{{$projects[0]['address']}}</p>
                    </div>
                    <img src="{{$projects[0]['url']}}"  alt='{{$projects[0]['title']}}'>
                </div>
            </div></a>
        @endif
        @if(!empty($projects[1]))
                <a href="/projects/{{$projects[1]['id']}}">     <div data-animate="fadeInUp" class="col-md-6">
                <div class="max-img pull-right">
                    <div class="description">
                        <p>{{$projects[1]['title']}}</p><p>{{$projects[1]['address']}}</p>
                    </div>
                    <img src="{{$projects[1]['url']}}" alt='410x247'>
                </div>
            </div></a>
        @endif
    </div>
    <div class="col-md-10  col-md-offset-1 projects ">
        @if(!empty($projects[2]))
            <a href="/projects/{{$projects[2]['id']}}">     <div data-animate="fadeInUp" class="col-md-6 "><div class="img-bottom max-img  pull-right">
                    <div class="description">
                        <p>{{$projects[2]['title']}}</p><p>{{$projects[2]['address']}}</p>
                    </div>
                    <img src="{{$projects[2]['url']}}" alt='410x247'>
                </div></div>
            </a>
        @endif
        @if(!empty($projects[3]))
                    <a href="/projects/{{$projects[3]['id']}}">     <div class="col-md-6 " data-animate="fadeInUp"><div class="img-min-b min-img ">
                    <div class="description">
                        <p>{{$projects[3]['title']}}</p><p>{{$projects[3]['address']}}</p>
                    </div>
                    <img src="{{$projects[3]['url']}}" alt='410x247'>
                </div></div>
                    </a>
            @endif
    </div>

</div>
        <div class="col-md-12  visible-xs row allprojects" style="margin-top: -127px;">
                <div  id="addPr">
                    @foreach($years as $year)

                        {{--@if(in_array($year['year'], $projects[0]->toArray()))--}}
                            {{--<div class="row year">--}}
                                {{--<div class="col-md-1 col-md-offset-1 col-xs-1 year"><h3>{{$year['year']}}</h3></div>--}}
                                {{--<div class="col-md-9 "><hr style="background-color:#aba5a2; height:3px"></div>--}}
                            {{--</div>--}}
                        {{--@endif--}}
                        <div class="all-pr row center col-md-12 col-md-offset-1 col-sm-offset-1">

                            @foreach($projects as $project)
                                @if($project['year'] === $year['year'])
                                    <a href="/projects/{{$project['id']}}">
                                        <div data-animate="fadeInUp" class="col-md-4  col-sm-12 col-xs-12" style="padding: 0px 43px !important;">

                                            <div class="description" style="padding: 0px 43px !important;">
                                                <p>{{$project['title']}}</p>
                                                <p style="color:white">{{$project['address']}}</p>
                                                <img class="visible-xs" src="images/svg/send.png" style="width: 34px;height: 29px;background-color: #fff;margin: 0 auto;padding: 10px;border-radius: 50px;" alt="" >
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
        </div>
<div class="row center hidden-xs" style="margin-top:60px" id="share-viidia-projects"><p>Ещё проекты <span class="fa fa-chevron-down"></span></p></div>
@endif
    {{--Проекты--}}
    {{--Технологии--}}
            @if(!empty($technologies))
            <div class="container-fluide section">

                <div class="col-md-4  col-md-offset-1 "><h2>Технологии</h2></div>
                <div class="hidden-xs teh">

                    @if(count($technologies) >=1)
                    <div class="col-md-12 col-xs-12 center">
                        <div class="top-hex">
                            <img class='tl' src="images/svg/q-l.png">
                            @for($j=0; $j<count($technologies); $j++)
                                @if($j == 5)
                                    @break
                                    @endif
                                <a href="/technologies/{{$technologies[$j]->id}}">
                                    <div class="hex">
                                    <div class=' corner-active'>
                                            @if(empty($technologies[$j]->icon))
                                            <div class="demo-padding"></div>
                                            @else
                                            <img src='{{$technologies[$j]->icon}}'/>
                                            @endif
                                            
                                            <p>{{$technologies[$j]->title}}</p>
                                            <img src='images/svg/send.png'/>

                                    </div>
                                    <div class=' corner-0'>
                                        <p>{{$technologies[$j]->title}}</p>
                                        <img src='{{$technologies[$j]->icon}}'/>
                                    </div>
                                    <div class=" corner-1"></div>
                                    <div class=" corner-2"></div>
                                </div>
                                </a>
                            @endfor

                            <img class='tr' src="images/svg/q-r.png">
                        </div>
                    </div>
                    @endif
                    @if(count($technologies) >=5)


                    <div class="clear"></div><div class="line"></div>

                    <div class="col-md-12 center ">
                        <div class="bottom-hex">
                            <img class='bl' src="images/svg/q-l.png">
                            @for($j=5; $j<count($technologies); $j++)
                                @if($j == 9)
                                    @break
                                @endif

                                <a href="/technologies/{{$technologies[$j]->id}}">
                                    <div class="hex">
                                        <div class=' corner-active'>

                                            @if(empty($technologies[$j]->icon))
                                            <div style="height: 90px;"></div>
                                            @else
                                            <img src='{{$technologies[$j]->icon}}'/>
                                            @endif
                                            
                                            <p>{{$technologies[$j]->title}}</p>
                                            <img src='images/svg/send.png'/>

                                        </div>
                                        <div class=' corner-0'>
                                            <p>{{$technologies[$j]->title}}</p>
                                            <img src='{{$technologies[$j]->icon}}'/>
                                        </div>
                                        <div class=" corner-1"></div>
                                        <div class=" corner-2"></div>
                                    </div>
                                </a>
                            @endfor

                            <img class="br" src="images/svg/q-r.png">
                        </div>
                    </div>
                    @endif
                    @if(count($technologies) >=10)
                    <div class="col-md-12 col-xs-12 row-num-3 center">
                        <div class="top-hex">
                            <img class='tl' src="images/svg/q-l.png">
                            @for($j=9; $j<count($technologies); $j++)
                                @if($j == 14)
                                    @break
                                @endif
                                <a href="/technologies/{{$technologies[$j]->id}}">
                                    <div class="hex">
                                        <div class=' corner-active'>

                                            @if(empty($technologies[$j]->icon))
                                            <div style="height: 90px;"></div>
                                            @else
                                            <img src='{{$technologies[$j]->icon}}'/>
                                            @endif
                                            <p>{{$technologies[$j]->title}}</p>
                                            <img src='images/svg/send.png'/>

                                        </div>
                                        <div class=' corner-0'>
                                            <p>{{$technologies[$j]->title}}</p>
                                            <img src='{{$technologies[$j]->icon}}'/>
                                        </div>
                                        <div class=" corner-1"></div>
                                        <div class=" corner-2"></div>
                                    </div>
                                </a>
                            @endfor
                            <img class='tr' src="images/svg/q-r.png">
                        </div>
                    </div>
                        @endif
                    @if(count($technologies) >=15)
                    <div class="col-md-12 row-num-4 center ">
                        <div class="bottom-hex">
                            <img class='bl' src="images/svg/q-l.png">
                            @for($j=14; $j<count($technologies); $j++)
                                @if($j == 18)
                                    @break
                                @endif

                                <a href="/technologies/{{$technologies[$j]->id}}">
                                    <div class="hex">
                                        <div class=' corner-active'>

                                            @if(empty($technologies[$j]->icon))
                                            <div style="height: 90px;"></div>
                                            @else
                                            <img src='{{$technologies[$j]->icon}}'/>
                                            @endif
                                            <p>{{$technologies[$j]->title}}</p>
                                            <img src='images/svg/send.png'/>

                                        </div>
                                        <div class=' corner-0'>
                                            <p>{{$technologies[$j]->title}}</p>
                                            <img src='{{$technologies[$j]->icon}}'/>
                                        </div>
                                        <div class=" corner-1"></div>
                                        <div class=" corner-2"></div>
                                    </div>
                                </a>
                            @endfor

                            <img class="br" src="images/svg/q-r.png">
                        </div>
                    </div>
                        @endif
                    @if(count($technologies) >=20)
                        <div class="col-md-12 col-xs-12 row-last-x center">
                            <div class="top-hex">
                                <img class='tl' src="images/svg/q-l.png">
                                @for($j=18; $j<count($technologies); $j++)
                                    @if($j == 25)
                                        @break
                                    @endif
                                    <a href="/technologies/{{$technologies[$j]->id}}">
                                        <div class="hex">
                                            <div class=' corner-active'>

                                                @if(empty($technologies[$j]->icon))
                                            <div style="height: 90px;"></div>
                                            @else
                                            <img src='{{$technologies[$j]->icon}}'/>
                                            @endif
                                                <p>{{$technologies[$j]->title}}</p>
                                                <img src='images/svg/send.png'/>

                                            </div>
                                            <div class=' corner-0'>
                                                <p>{{$technologies[$j]->title}}</p>
                                                <img src='{{$technologies[$j]->icon}}'/>
                                            </div>
                                            <div class=" corner-1"></div>
                                            <div class=" corner-2"></div>
                                        </div>
                                    </a>
                                @endfor
                                <img class='tr' src="images/svg/q-r.png">
                            </div>
                        </div>
                    @endif


                </div>

                {{--mobile--}}
                <div class="visible-xs teh-mobile">

                    <div class=" col-xs-12 center">
                            {{--<img class='tl' src="images/svg/q-l.png">--}}
                        @foreach($technologies as $technology)
                            <a href="/technologies/{{$technology->id}}">
                                <div class="col-xs-12 ">
                                    <div class='corner-0'>
                                        <img src='{{$technology->icon}}'/>
                                        <p>{{$technology->title}}<br><img src='images/svg/send.png'/></p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
    {{--Технологии--}}
    {{--Услуги--}}
            @if(!empty($services))
            <div class="row ">
                <div class="col-md-12 col-xs-offset-1 col-md-offset-1 "><h2>Услуги</h2></div>
            </div>
            <div class="container ">
                <div class="row center services-viidia">
                    @foreach($services as $service)
                    <div class="col-md-4">
                        <img src='{{$service->cover_service}}'/>
                        <h3>{{$service->title}}</h3>
                        <p>{{$service->short_description}}</p>
                        <a href="/services/{{$service->id}}" class="long-btn">Подробнее <i class="fa fa-chevron-right"></i></a>
                    </div>
                    @endforeach

                </div>
                <style>

                    .hex {
                        cursor: pointer;
                        fill-opacity: 1;
                        stroke: #000;
                        stroke-width: 0;
                    }


                    .hex {
                        transition: transform, fill-opacity, stroke-width;
                        -webkit-transition: transform, fill-opacity, stroke-width;
                        transition-duration: 1s;
                        -webkit-transition-duration: 1s;
                    }

                    #image-fill{
                        transform: rotate(30deg);
                        width: 110%;
                    }
                    svg image{
                        width: 100%;
                        transform: rotate(-30deg) translateX(-106px) translateY(54px);
                    }

                </style>




            </div>
            @endif
    {{--Услуги--}}

    {{--Партнеры--}}
            @if(!empty($partners))
            <div class='section ' id="clients">
                <div class="row">
                    <div class="col-md-4 col-xs-offset-1 col-md-offset-1 "><h2>Партнеры</h2></div>
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
    {{--Партнеры--}}
    {{--Достижения--}}
            @if(!empty($achivements))
            <div class="row hidden-xs">
                <div class="col-md-4 col-md-offset-1 "><h2>Достижения</h2></div>
            </div>

            <div class="col-md-10 bottommargin hidden-xs col-md-offset-1">
                <div id="carousel-example-generic" style=" width:950px;" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        @foreach($achivements as $k=>$ach)

                        <div class="item {{($k==0) ? 'active' : ''}} " style="height:300px;">
                            <div class="carousel-caption" style="height:300px; widht:100%;">
                                <div class="col-md-4 text-left">

                                    <svg id="image-fill" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="300" xmlns:xlink="http://www.w3.org/1999/xlink">

                                        <defs>
                                            <pattern id="image-bg{{$k}}" x="0" y="0" height="300" width="300" patternUnits="userSpaceOnUse">
                                                <image width="300" height="300" xlink:href="{{$ach->url}}"></image>
                                            </pattern>
                                        </defs>

                                        <polygon class="hex" points="300,150 225,280 75,280 0,150 75,20 225,20" fill="url('#image-bg{{$k}}')"></polygon>

                                    </svg>


                                </div>
                                <div class="col-md-7 text-left">
                                    <div class="description">
                                        @if($ach->title)
                                        <p>{{$ach->title}}</p>
                                        <p>{{$ach->description}}</p>
                                            @else
                                            <p class="simple-ds">{{$ach->description}}</p>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{--<div class="item slc-fire" style="height:300px;">--}}
                            {{--<div class="carousel-caption" style="height:300px; widht:100%;">--}}
                                {{--<div class="col-md-4 text-left"><img style="width:252px" src="images/cube/3.png" alt=""></div>--}}
                                {{--<div class="col-md-7 text-left">--}}
                                    {{--<div class="description">--}}
                                        {{--<p>118 км</p>--}}
                                        {{--<p>Различных труб cмонтировано</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="item slc-fire" style="height:300px;">--}}
                            {{--<div class="carousel-caption" style="height:300px; widht:100%;">--}}
                                {{--<div class="col-md-4 text-left"><img style="width:252px" src="images/cube/4.png" alt=""></div>--}}
                                {{--<div class="col-md-7 text-left">--}}
                                    {{--<div class="description">--}}
                                        {{--<p>32 ед.</p>--}}
                                        {{--<p>Индивидуальных узлов смешения системы лучистого отопленияохлаждения изготовлено</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="item slc-fire" style="height:300px;">--}}
                            {{--<div class="carousel-caption" style="height:300px; widht:100%;">--}}
                                {{--<div class="col-md-4 text-left"><img style="width:252px" src="images/cube/5.png" alt=""></div>--}}
                                {{--<div class="col-md-7 text-left">--}}
                                    {{--<div class="description">--}}
                                        {{--<h3 style="margin-top: 32%;font-size: 54px;">На рынке </h3>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="item slc-fire" style="height:300px;">--}}
                            {{--<div class="carousel-caption" style="height:300px; widht:100%;">--}}
                                {{--<div class="col-md-4 text-left"><img style="width:252px" src="images/cube/6.png" alt=""></div>--}}
                                {{--<div class="col-md-7 text-left">--}}
                                    {{--<div class="description">--}}
                                        {{--<p>9876 м<sup>2</sup></p>--}}
                                        {{--<p>Поверхностей системы лучистого отопленияохлаждения изготовлено</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>

                    <a class="left bottom-preview-fire carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <img src="images/svg/cubeleft.png" alt="">
                    </a>
                    <a class="right bottom-preview-fire carousel-control" href="#carousel-example-generic" data-slide="next">
                        <img src="images/svg/cuberight.png" alt="">
                    </a>
                </div>
            </div>
            @endif
    {{--Достижения--}}

            @endsection


            @section('js')
            <script src="{{asset('media/system/js/caption.js')}}"></script>
    <script src="{{asset('templates/viidia/js/main1bdb.js?1500200104')}}" defer></script>
    <script src="{{asset('templates/viidia/js/main_page1bdb.js?1500200104')}}" defer></script>
                <script>
//                    $('.svgmodule').hide();
                    //        var start = 720;
                    //        var finish = 180;
//                    $("main .content").css('height', '180px');
//                    $('.svgmodule').show();
                    $('.svgmodule').css('margin-top','19px');

//                    $('.mouse').hide();
                    $('main .events-widget .wrap').hide();

                    $(document).ready(function() {



                        $('#toSmall').hide();
                        $('.mouse').hide();
                        $('#toBigTimline').show();
                        $('#toSmall').on('click',function(){
                            //id =
                            $('.svgmodule').hide();
                            var start = 720;
                            var finish = 180;
                            var timerId = setInterval(function() {
                                start = start -20;
                                console.log(start);
                                $("main .content").css('height', start + 'px');
                                if (start < finish){
                                    clearTimeout(timerId);
                                    $('.svgmodule').fadeIn(1500);
                                    $('.svgmodule').css('margin-top','19px');
                                }
                            }, 40);
                            $('main .events-widget .wrap').slideToggle(1500);


                                $('#toSmall').hide();
                                $('.mouse').hide();
                                $('#toBigTimline').show();
                        });
                        $('#toBigTimline').on('click',function(){
                            //id =
                            $('.svgmodule').hide();

                            var startb = 128;
                            var finishb = 720;
                            var timerId2 = setInterval(function() {
                                startb = startb +20;
                                console.log(startb+"big");
                                $("main .content").css('height', startb + 'px');
                                if (startb > finishb){
                                    clearTimeout(timerId2);

                                    $('.svgmodule').css('margin-top','86px');
                                   setTimeout(function(){$('.svgmodule').fadeIn(600);},1500);
                                }
                            }, 5);
                            $('main .events-widget .wrap').slideToggle(1500);
                            $('#toSmall').show();
                            $('.mouse').show();
                            $('#toBigTimline').hide();
                            $('.svgmodule').css('margin-top','86px');
                        });

//                       $('#toSmall').on('click',function(){
//
//                           $('main .events-widget .wrap').slideToggle(1000);
//                           $('main .wrapMask').slideToggle(1000);
//
//
//                           $( "main .content" ).slideToggle(1000, function(){
////                               $('main .content').css('height','720px');
//                               $('main .content').css('height','720px');
//                               $('main .events-widget .wrap').show();
//                           });
//
////                           $('.vert-title-history').hide();
//
//                       });
                        $('#havi').hover(function(){
                            $(this).hide();
                        });
                        var partCarousel = $("#owl-demo");
                        partCarousel.owlCarousel({
                            navigation : true,
                            loop:true,
                            autoplayTimeout:500,
                            autoplay:true
                        });
                        $('.owl-prev').html('<img src="images/svg/left.png">');
                        $('.owl-next').html('<img src="images/svg/right.png">');

                        $('#activestart').css({'border-right': '2px solid #0ca709'});
                        $('#activestart').css({'border-left': '2px solid #0ca709'});
                        $('#activestart').children('.corner-1').css({'border-right': '2px solid #0ca709'});
                        $('#activestart').children('.corner-1').css({'border-left': '2px solid #0ca709'});
                        $('#activestart').children('.corner-2').css({'border-right': '2px solid #0ca709'});

                        $('#activestart').children('.corner-2').css({'border-left': '2px solid #0ca709'});
                        $('#activestart').children('.corner-0').hide();
                        $('#activestart').children('.corner-active').show();
//                        console.log($('.hex'));
                    });

                    $(".timeline-carousel").on('mouseover', 'li', function(){


                        $('.timeline-carousel li').hover(
                                function(){
                                    $(this).css('color','#1dba2d');
                                    console.log();
                                    $(this).closest('li').children('i').addClass('hoverEventI');
                                },
                                function(){

                                    $(this).css('color','white');
                                    $(this).closest('li').children('i').removeClass('hoverEventI');
                                });
                    });


                    $(".here4projects").on('mouseover', function(){


                        $('.projects div div').hover(
                            function(){

                                $(this).children('div').show();
                                $(this).children('img').addClass('maskG');
                            },
                            function(){
                                $(this).children('div').hide();
                                $(this).children('img').removeClass('maskG');
                            }
                    );
                            });

                    $('.hex').hover(
                            function(){

                                if($(this).attr('id') != 'activestart'){
                                    $('#activestart').css({'border-right': '0.2px solid #e6e6e6'});
                                    $('#activestart').css({'border-left': '0.2px solid #e6e6e6'});
                                    $('#activestart').children('.corner-1').css({'border-right': '0.2px solid #e6e6e6'});
                                    $('#activestart').children('.corner-1').css({'border-left': '0.2px solid #e6e6e6'});
                                    $('#activestart').children('.corner-2').css({'border-right': '0.2px solid #e6e6e6'});
                                    $('#activestart').children('.corner-2').css({'border-left': '0.2px solid #e6e6e6'});
                                    $('#activestart').children('.corner-0').show();
                                    $('#activestart').children('.corner-active').hide();
                                }

                                $(this).css({'border-right': '2px solid #0ca709'});
                                $(this).css({'border-left': '2px solid #0ca709'});
                                $(this).children('.corner-1').css({'border-right': '2px solid #0ca709'});
                                $(this).children('.corner-1').css({'border-left': '2px solid #0ca709'});
                                $(this).children('.corner-2').css({'border-right': '2px solid #0ca709'});

                                $(this).children('.corner-2').css({'border-left': '2px solid #0ca709'});
                                $(this).children('.corner-0').hide();
                                $(this).children('.corner-active').show();
                            },
                            function(){
                                $(this).css({'border-right': '0.2px solid #e6e6e6'});
                                $(this).css({'border-left': '0.2px solid #e6e6e6'});
                                $(this).children('.corner-1').css({'border-right': '0.2px solid #e6e6e6'});
                                $(this).children('.corner-1').css({'border-left': '0.2px solid #e6e6e6'});
                                $(this).children('.corner-2').css({'border-right': '0.2px solid #e6e6e6'});
                                $(this).children('.corner-2').css({'border-left': '0.2px solid #e6e6e6'});
                                $(this).children('.corner-0').show();
                                $(this).children('.corner-active').hide();
                            }
                    );

                    $('#header-trigger').hover(
                            function(){
                                $(this).removeClass('.btn-head-on');
                                $(this).addClass('on-img-nav');
                            },
                            function(){
                                $(this).removeClass('on-img-nav');
                                $(this).addClass('.btn-head-on');
                            }
                    );


                    var skip=4;
                    $('#share-viidia-projects').on('click', function(){

                        $.get(
                                "/skipindex/take",
                                {
                                    take: skip
                                },
                                onAjaxSuccess
                        );
                        skip +=4;
                    });

                    function onAjaxSuccess(data)
                    {
                        console.log(data);
                        (data.length != 0 || data == ' ') ? $('.here4projects').append(data) : $('#share-viidia-projects').hide();

                    }


                </script>

                <script></script>


@endsection
