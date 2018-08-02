@if(count($projects)>0)
<div class="row proem" data-animate="fadeInUp">
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
    <div class="col-md-10 col-md-offset-1 projects ">
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
            <a href="/projects/{{$projects[3]['id']}}">     <div data-animate="fadeInUp" class="col-md-6 " ><div class="img-min-b min-img ">
                        <div class="description">
                            <p>{{$projects[3]['title']}}</p><p>{{$projects[3]['address']}}</p>
                        </div>
                        <img src="{{$projects[3]['url']}}" alt='410x247'>
                    </div></div>
            </a>
        @endif
    </div>
</div>
    @else

    @endif
