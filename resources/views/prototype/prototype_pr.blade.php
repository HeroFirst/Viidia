@if($years || count($years)>1 || $projects || count($projects)>1)

    @foreach($years as $year)
        <div class="row year" style="">
            <div class="col-md-1 col-md-offset-1 col-xs-1 year"><h3>{{$year['year']}}</h3></div>
            <div class="col-md-9 "><hr style="background-color:#aba5a2; height:3px"></div>
        </div>

        <div class="all-pr row center col-md-12 col-md-offset-1 col-sm-offset-1">

            @foreach($projects as $project)
                @if($project['year'] === $year['year'])
                    <a href="/projects/{{$project['id']}}"> <div data-animate="fadeInUp" class="col-md-4  col-sm-2 col-xs-2">

                            <div class="description">
                                <p>{{$project['title']}}</p><p>{{$project['address']}}</p>
                            </div>
                            <img src="{{$project['url']}}" alt='410x247'>

                        </div>
                    </a>
                @endif
            @endforeach

        </div>
    @endforeach
@else
    1
@endif