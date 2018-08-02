@extends('layouts.appadmin')
@section('technologies')
    active
    @endsection
@section('content')
    <div class="content-i">
        <div class="content-box"><div class="element-wrapper">
                <a class="btn btn-danger " style="position: absolute;right: 64px;margin-top: -31px;" href="/admin/thetechnologies/{{$item['id']}}/delete">Удалить технологию</a>
                <h6 class="element-header">
                    <a href="/admin/thetechnologies/">Все технологии</a> <i style="font-size:10px" class="icon-arrow-right"></i>  {{$item['title']}}
                </h6>
                <div class="element-box">
                    <div >
                        @if(Session::has('is'))
                            <b>изменения внесены  <a target="_blank" href="{{Session::get('is')}}">проверить</a></b><br>
                        @endif <br>
                    </div>
                    <form action="/admin/thetechnologies/{{$item['id']}}/update" enctype="multipart/form-data" method="post">
                        {{csrf_field()}}
                        <legend><span>Краткая информация </span></legend>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group has-success">
                                    <label for=""> Наименование технологии</label><input class="form-control" data-minlength="6" placeholder="{{$item['title']}}" name="title" value="{{$item['title']}}" required="required" type="text">
                                    {{--<div class="help-block form-text text-muted form-control-feedback">--}}
                                        {{--Minimum of 6 characters--}}
                                    {{--</div>--}}
                                </div>
                                <div class="form-group">
                                    <label>Краткое описание</label><textarea class="form-control" name="description" rows="3" placeholder="{{$item['description']}}">{{$item['description']}}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Иконка</label><input class="form-control" type="file" rows="3" name="icon" style="height: 37px;" value="">
                                </div>
                                <div class="form-group">
                                    <label>Обложка</label><input class="form-control" type="file" rows="3"  name="cover" style="height: 37px;" value="">
                                </div>
                            </div>

                        </div>

                        <legend><span>Детальная информация </span></legend>

                        <textarea cols="80" id="ckeditor1" name="ckeditor1" rows="10">{{$item['big-description']}}</textarea>

                        <hr>
                        <div>
                            <input type="submit" class="btn btn-primary" value="Изменить">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection