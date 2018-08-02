@extends('layouts.appadmin')
@section('css')
    <link href="//fast.fonts.net/cssapi/175a63a1-3f26-476a-ab32-4e21cbdb8be2.css" rel="stylesheet" type="text/css">
    @endsection
@section('projects')
    active
@endsection
@section('content')
    <div class="content-i">
        <div class="content-box"><div class="element-wrapper">
                <h6 class="element-header">
                    Основные настройки

                </h6>
                <div class="element-box">
                    <div >
                        @if(Session::has('is'))
                            <b>изменения внесены  <a href="{{Session::get('is')}}">проверить</a></b><br>
                        @endif <br>
                    </div>
                    <div class="content-i">
                        <div class="content-box">
                            <div class="floated-chat-w">
                                <div class="floated-chat-i">
                                    <div class="chat-close">
                                        <i class="os-icon os-icon-close"></i>
                                    </div>
                                    <div class="chat-head">
                                        <div class="user-w with-status status-green">
                                            <div class="user-avatar-w">
                                                <div class="user-avatar">
                                                    <img alt="" src="img/avatar1.jpg">
                                                </div>
                                            </div>
                                            <div class="user-name">
                                                <h6 class="user-title">
                                                    John Mayers
                                                </h6>
                                                <div class="user-role">
                                                    Account Manager
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-messages">
                                        <div class="message">
                                            <div class="message-content">
                                                Hi, how can I help you?
                                            </div>
                                        </div>
                                        <div class="date-break">
                                            Mon 10:20am
                                        </div>
                                        <div class="message">
                                            <div class="message-content">
                                                Hi, my name is Mike, I will be happy to assist you
                                            </div>
                                        </div>
                                        <div class="message self">
                                            <div class="message-content">
                                                Hi, I tried ordering this product and it keeps showing me error code.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-controls">
                                        <input class="message-input" placeholder="Type your message here..." type="text">
                                        <div class="chat-extra">
                                            <a href="#"><span class="extra-tooltip">Attach Document</span><i class="os-icon os-icon-documents-07"></i></a><a href="#"><span class="extra-tooltip">Insert Photo</span><i class="os-icon os-icon-others-29"></i></a><a href="#"><span class="extra-tooltip">Upload Video</span><i class="os-icon os-icon-ui-51"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-i">
                        <div class="content-box">
                            <div class="element-wrapper">
                                <h6 class="element-header" >
                                    Управление содержимим
                                </h6>
                                <button class="btn btn-primary btn-sm " style="margin-bottom:10px" onclick="$('.cont-prf').slideToggle()">Внести изменения</button>

                                <form  enctype='multipart/form-data'  action="/admin/settings/{{$setting->id}}/update" method="post">
                        {{csrf_field()}}
                        <legend><span>Краткая информация </span></legend>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group has-success">
                                    <label for=""> Адрес</label><input class="form-control" required  data-minlength="6" placeholder="{{$setting->address}}" name="address" value="{{$setting->address}}" required="required" type="text">
                                    {{--<div class="help-block form-text text-muted form-control-feedback">--}}
                                    {{--Minimum of 6 characters--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Адрес</label><input class="form-control"  required name="email"  placeholder="{{$setting->email}}" value="{{$setting->email}}">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Телефон</label><input class="form-control"  required name="phone"  placeholder="{{$setting->phone}}" value="{{$setting->phone}}">
                                </div>
                            </div>
                        </div>

                        <legend><span>Блок "О нас"</span></legend>

                        <textarea cols="80" id="ckeditor1" name="ckeditor1" rows="10"><?= $setting->about_box?></textarea>

                        <hr>
                        <div>
                            <input type="submit" class="btn btn-primary" value="Изменить">
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