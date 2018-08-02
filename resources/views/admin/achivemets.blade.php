@extends('layouts.appadmin')
@section('achivemets')
    active
@endsection
@section('content')

    <div class="content-i">
        <div class="content-box">
            <div class="element-wrapper">

                <div class="element-box">
                    <h5 class="form-header">
                        Достижения
                    </h5>
                    <a href="/admin/achivement/create" style="position: absolute;right: 114px;top: 173px;" class="btn btn-primary ">Добавить достижение</a>
                    <div class="form-desc">
                        Выберите достижение для редактирования
                    </div>
                    <div class="table-responsive">
                        <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                            <thead><tr><th>Наименование</th><th></th></tr></thead>
                            <tfoot><tr><th>Наименование</th><th></th></tfoot>
                            <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <td>
                                        <a href="/admin/achivement/{{$item['id']}}/edit">
                                            {{$item['title']}} <br>
                                            {{$item['description']}}
                                        </a>
                                    </td>

                                    <td>
                                        <a class="btn btn-success btn-sm" href="/admin/achivement/{{$item['id']}}/edit">
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


        </div>
    </div>
@endsection