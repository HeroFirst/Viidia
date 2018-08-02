@extends('layouts.appadmin')

@section('content')
    <div class="content-i">
        <div class="content-box"><div class="element-wrapper">
                <h6 class="element-header">
                    <a href="/admin/projects/">Все проекты</a> <i style="font-size:10px" class="icon-arrow-right"></i>Добавление нового проекта

                </h6>
                <div class="element-box">
                    <div >
                        @if(Session::has('is'))
                            <b>изменения внесены  <a href="{{Session::get('is')}}">проверить</a></b><br>
                        @endif <br>
                    </div>
                    <form action="/admin/projects/create" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <legend><span>Краткая информация </span></legend>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group has-success">
                                    <label for=""> Наименование проекта</label><input class="form-control" data-minlength="6" placeholder="" name="title" value="" required="required" type="text">
                                    {{--<div class="help-block form-text text-muted form-control-feedback">--}}
                                    {{--Minimum of 6 characters--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Адрес</label><input type="text" class="form-control" name="address" required  placeholder="" value="">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Год завершения</label><input  type="text" class="form-control" required name="year"  maxlength="4" size="4" placeholder="" value="">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Обложка</label><input class="form-control" type="file" rows="3" required size="4" name="cover" style="height: 37px;" value="">
                                </div>
                            </div>
                        </div>

                        <legend><span>Содержание проекта</span></legend>

                        <textarea cols="80" id="ckeditor1" name="ckeditor1" rows="10"></textarea>


                        <hr>
                        <div>
                            <input type="submit" class="btn btn-primary" value="Добавить проект">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection