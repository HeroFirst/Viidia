@extends('layouts.appadmin')
@section('events')
    active
@endsection
@section('content')

    <div class="content-i">
        <div class="content-box">
            <div class="element-wrapper">

                <div class="element-box">
                    <h5 class="form-header">
                        События
                    </h5>
                    <i>Количество событий: {{count($events)}} </i>
                    <a href="/admin/event/create" style="position: absolute;right: 114px;top: 173px;" class="btn btn-primary ">Добавить событие</a>
                    <div class="form-desc">
                        Для редактирования внесите данные в строке события, для изменения позиции перенесите строку вниз или вверх
                    </div>
                    {{--table or rows or list--}}

                    <ul class="sortable-ul admin-event-list">

                        @for($i=0; $i<count($events); $i++)



                        <li id="{{$events[$i]->id}}">

                            <div class="box-title">
                                <div style="float: left;">
                                    <img src="{{asset('/admin/img/move.png')}}" alt="">
                                </div>
                                <div>
                                {{$events[$i]->title}}
                                </div>
                                <div>
                                    <i>{{$events[$i]->year}}</i>
                                </div>
                            </div>
                            <a class="btn btn-success btn-sm ui-sortable-handle" href="admin/events/{{$events[$i]->id}}/edit">
                                Редактировать
                            </a>
                            {{--<img class='cover-event' src="{{asset($row->url)}}" alt="">--}}


                            <input type="hidden" name="sort[]" value="{{$events[$i]->id}}">
                        </li>

                        @endfor
                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('js')
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
        $('.sortable-ul li a').on('click', function(e){
            e.preventDefault();
            window.location.href = "http://viidia.loc/"+$(this).attr('href');
        });
        $('.sortable-ul li').mousedown(function(){
            $(this).css('border','4px dashed green');
            $(this).css('background-color','#fff');
        });
        $('.sortable-ul li').mouseout(function(){
            $(this).css('border','2px solid #9b9b9b');
        });
//
        $('.sortable-ul li').hover(function(){

            $(this).css('background-color','#f5f5f5');
        },function(){

            $(this).css('background-color','#fff');
        });

        $('.sortable-ul').sortable({

            stop: function(event, ui) {

                console.log(ui.item[0].id);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });


                $.ajax({
                    url: '/admin/events/change',
                    method: 'post',
                    data: $('.sortable-ul input').serialize(),
                    success: function(){
                        $.ajax({
                            url: '/admin/events/change',
                            method: 'post',
                            data: {item:ui.item[0].id}
                        });
                    }
                });

            }
        });


    </script>
    @endsection