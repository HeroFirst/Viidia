@extends('layouts.appadmin')
@section('technologies')
    active
@endsection
@section('content')
    <div class="content-i">
        <div class="content-box"><div class="element-wrapper">
                <h6 class="element-header">
                    <a href="/admin/events/">Все события</a> <i style="font-size:10px" class="icon-arrow-right"></i>  Добавление события
                </h6>
                <div class="element-box">
                    <div >
                        @if(Session::has('is'))
                            <b>изменения внесены  <a href="{{Session::get('is')}}">проверить</a></b><br>
                        @endif <br>
                    </div>
                    <form action="/admin/event/create" enctype="multipart/form-data" method="post">
                        {{csrf_field()}}
                        <legend><span>Содержание </span></legend>
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="form-group has-success">
                                    <label for=""> Наименование* </label><input class="form-control"  data-minlength="6"  maxlength="130" placeholder=""  name="title" type="text">

                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Год *</label><input class="form-control" maxlength="80" type="text" name="year"  value="{{date("Y", time())}}">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Фоновое изображение *</label><input class="form-control"  type="file" rows="3" name="cover" style="height: 37px;" value="">
                                </div>
                            </div>

                        </div>
                        <hr>
                        <div>
                            <input type="submit" class="btn btn-success" value="Создать">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

