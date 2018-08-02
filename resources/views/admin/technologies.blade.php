@extends('layouts.appadmin')
@section('projects')
    active
    @endsection
@section('content')

    <div class="content-i">
        <div class="content-box">
            <div class="element-wrapper">

                <div class="element-box">
                    <h5 class="form-header">
                        {{$pageinfo['title']}}
                    </h5>
                        <a href="/admin/projects/create" style="position: absolute;right: 114px;top: 173px;" class="btn btn-primary ">Добавить новый проект</a>
                    <div class="form-desc">
                        {{$pageinfo['desc']}}
                    </div>
                    <div class="table-responsive">
                        <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                            <thead><tr><th>Наименование</th><th>Адрес</th><th>Год завершения</th><th></th></tr></thead>
                            <tfoot><tr><th>Наименование</th><th>Адрес</th><th>Год завершения</th><th></th></tfoot>
                            <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <td>
                                        <a href="/admin/{{$pageinfo['link']}}/{{$item['id']}}/edit">
                                            {{$item['title']}}
                                        </a>
                                    </td>
                                    <td>

                                            {{$item['address']}}

                                    </td>
                                    <td>

                                            {{$item['year']}}

                                    </td>
                                    <td>
                                        <a class="btn btn-success btn-sm" href="/admin/{{$pageinfo['link']}}/{{$item['id']}}/edit">
                                            Редактировать
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
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
    @endsection
@section('js')
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>

        $('.sortable-ul li').mousedown(function(){
            $(this).css('border','4px dashed green');
            $(this).css('background-color','#fff');
        });
        $('.sortable-ul li').mouseout(function(){
            $(this).css('border','2px solid #9b9b9b');
        });
        //
        //        $('.sortable-ul li').hover(function(){
        //            $(this).css('border','4px dashed green');
        //            $(this).css('background-color','#fff');
        //        },function(){
        //            $(this).css('border','2px solid #9b9b9b');
        //        });

        $('#dataTable1 tr td').sortable({
            stop: function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '/admin/events/change',
                    method: 'post',
                    data: $('.sortable-ul input').serialize()
                });
            }
        });
    </script>
@endsection