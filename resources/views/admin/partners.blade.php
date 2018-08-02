@extends('layouts.appadmin')
@section('css')
    <link href="//fast.fonts.net/cssapi/175a63a1-3f26-476a-ab32-4e21cbdb8be2.css" rel="stylesheet" type="text/css">
    @endsection
@section('parnters')
    active
@endsection
@section('content')
    <div class="content-i">
        <div class="content-box"><div class="element-wrapper">

                <h6 class="element-header">
                    <a href="/admin/parnters/">Партнеры</a>

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
                                <h6 class="element-header" >
                                    Управление галереей
                                </h6>
                                <button class="btn btn-primary btn-sm " style="margin-bottom:10px" onclick="$('.har-img-f').slideToggle()">Показать всех партнеров</button>
                                <div class="row har-img-f" style="margin-bottom:30px; display:none;">
                                    @if(count($galery)>0)
                                    @foreach($galery as $img)
                                        <div class="col-md-2 text-center" style="margin-bottom:10px">
                                            <div class="img-tem"><img src="{{asset($img['url'])}}">
                                                <a class="btn btn-danger btn-sm" style="position: absolute;top: 27px;right: 0px;" href="/admin/gl/{{$img['id']}}/del">удалить</a>
                                            </div>

                                        </div>
                                    @endforeach
                                        @else
                                        <div class="col-md-2 text-center" style="margin-bottom:10px">
                                            <div class="img-tem"><p>Галерея партнеров пуста</p>  </div>

                                        </div>
                                    @endif
                                </div>
                                <div class="element-box">

                                    <form action="/admin/parnters/gl/{{$item['id']}}/add" enctype="multipart/form-data" class="dropzone" id="my-awesome-dropzone">
                                       {{csrf_field()}}
                                        <div class="dz-message">
                                            <div>
                                                <h4>Перенесите сюда новые изображения.</h4><div class="text-muted">( Доступные разрешения для загрузки .jpg .png .jpeg .gif ) максимальный размер файла 4 Mb</div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')


    @endsection