@extends('layouts.appadmin')
@section('css')
    <link href="//fast.fonts.net/cssapi/175a63a1-3f26-476a-ab32-4e21cbdb8be2.css" rel="stylesheet" type="text/css">
@endsection
@section('services')
    active
@endsection
@section('content')
    <div class="content-i">
        <div class="content-box"><div class="element-wrapper">

                <h6 class="element-header">
                    <a href="/admin/services/">Все услуги</a>  <i style="font-size:10px" class="icon-arrow-right"></i> Добавление новой услуги
                </h6>
                <div class="element-box">
                    <div >
                        @if(Session::has('is'))
                            <b>изменения внесены  <a href="{{Session::get('is')}}">проверить</a></b><br>
                        @endif <br>
                    </div>

                    <div class="content-i">
                        <div class="content-box">
                            <div class="element-wrapper">

                                <form enctype='multipart/form-data'  action="/admin/services/create" method="post">
                                    {{csrf_field()}}
                                    <legend><span>Вид на странице "Главная" </span></legend>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Иконка</label><input required class="form-control" type="file" name="cover_service" style="height: 37px;" >
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group has-success">
                                                <label for=""> Наименование услуги</label><input class="form-control" data-minlength="6" required  name="title"  required="required" type="text">

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Краткое описание</label><input class="form-control" maxlength="170" name="short_description" rows="3" >
                                            </div>
                                        </div>
                                    </div>
                                    <legend><span>Вид на странице "Услуги" </span></legend>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Обложка</label><input  required class="form-control" type="file" name="url" style="height: 37px;" >
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Описание</label><input class="form-control" name="description" rows="3" >
                                            </div>
                                        </div>
                                    </div>
                                    <legend><span>Карточка услуги </span></legend>

                                    <textarea cols="80" id="ckeditor1" name="ckeditor1" rows="10"></textarea>

                                    <hr>

                                    <div>
                                        <input type="submit" class="btn btn-success" value="Создать">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')


@endsection