@extends('layouts.appadmin')
@section('technologies')
    active
@endsection
@section('content')
    <div class="content-i">
        <div class="content-box"><div class="element-wrapper">
                <a class="btn btn-danger " style="position: absolute;right: 64px;margin-top: -31px;" href="/admin/achivement/{{$item['id']}}/delete">Удалить достижение</a>
                <h6 class="element-header">
                    <a href="/admin/achivements/">Все достижения</a> <i style="font-size:10px" class="icon-arrow-right"></i>  Добавление достижения
                </h6>
                <div class="element-box">
                    <div >
                        @if(Session::has('is'))
                            <b>изменения внесены  <a href="{{Session::get('is')}}">проверить</a></b><br>
                        @endif <br>
                    </div>
                    <form action="/admin/achivement/{{$item->id}}/update" enctype="multipart/form-data" method="post">
                        {{csrf_field()}}
                        <legend><span>Содержание </span></legend>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group has-success">
                                    <label for=""> Показатель  </label><input class="form-control" data-minlength="6"  maxlength="10" placeholder="1342 м2" value="{{$item->title}}" name="title"  type="text">

                                </div>
                                <div class="form-group">
                                    <label>Краткое описание </label><input class="form-control" maxlength="80" type="text" name="description" required="required" value="{{$item->description}}" placeholder="Интеллектуальных жалюзи смонтировано">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Изображение </label><input class="form-control"  type="file" rows="3" name="cover" style="height: 37px;" value="">
                                </div>
                            </div>

                        </div>
                        <hr>
                        <div>
                            <input type="submit" class="btn btn-success" value="Изменить">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection