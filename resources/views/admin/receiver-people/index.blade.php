@extends('admin.layouts.app')
@section('drivers')
    active
@endsection
@section('content')
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-left">
            <li><a href="{{route('admin.dashboard')}}">Главная</a></li>
            <li><a href="{{route('admin.drivers.index')}}">Водитель</a></li>
            <li class="active">Инвойс</li>
        </ol>
        <div class="row">
            <div class="col-md-12 ui-sortable">
                <div class="panel panel-inverse">
                    <a href="#modal-dialog-create" class="btn btn-success pull-right btn-xs"
                       style="margin: 8px !important"
                       data-toggle="modal" data-target="#modal-dialog-create">Добавить <i class="fa fa-plus"></i>
                    </a>
                    <div class="panel-heading">
                        <h4 class="panel-title">Список</h4>
                    </div>
                    <div class="panel-body">
                        <div id="data-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="data-table" class="table table-striped table-bordered ">
                                        <thead>
                                        <tr client="row">
                                            <th style="width: 20px; padding: 30px 0; text-align: center" rowspan="2">№
                                            </th>
                                            <th>@sortablelink('name', 'Фамилия Имя ')</th>
                                            <th>@sortablelink('key', 'Пасспорт')</th>
                                            <th>@sortablelink('key', 'Дата рождения')</th>
                                            <th>@sortablelink('key', 'Телефон')</th>
                                            <th>@sortablelink('key', 'Адрес')</th>
                                            <th>@sortablelink('key', 'Водитель')</th>
                                            <th style="width: 150px; text-align: center"><b>Действия</b></th>
                                        </tr>
                                        <tr>
                                            <form class="form-inline" method="GET">
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Фамилия Имя..."
                                                           value="{{request('name')}}">
                                                </td>
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Пасспорт..."
                                                           value="{{request('name')}}">
                                                </td>
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Дата рождения..."
                                                           value="{{request('name')}}">
                                                </td>
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Телефон..."
                                                           value="{{request('name')}}">
                                                </td>
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Адрес..."
                                                           value="{{request('name')}}">
                                                </td>
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Водитель..."
                                                           value="{{request('name')}}">
                                                </td>
                                                <td>
                                                    <button type="submit" class="btn btn-warning">
                                                        <i class="fa  fa-filter"></i> Фильтр
                                                    </button>
                                                </td>
                                            </form>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($receiverPeople as $receiverPerson)
                                            <tr>
                                                <td>{{($receiverPeople->currentpage()-1)*$receiverPeople->perpage() +($loop->index+1)}}</td>
                                                <td>{{$receiverPerson->full_name}}</td>
                                                <td>{{$receiverPerson->passport}}</td>
                                                <td>{{$receiverPerson->birthdate}}</td>
                                                <td>{{$receiverPerson->phone}}</td>
                                                <td>{{$receiverPerson->address->name}}</td>
                                                <td>{{$receiverPerson->driver->name}}</td>
                                                <td>
                                                    <a href="#modal-dialog-edit" class="btn btn-xs btn-info"
                                                       title="Изменить" onclick="getDriverReceiverData({{$driver->id}}, {{$receiverPerson->id}})">
                                                        <i class="fa fa-pencil-square-o"></i>
                                                    </a>
                                                    <a href="#modal-dialog-delete{{$receiverPerson->id}}"
                                                       class="btn btn-xs btn-danger"
                                                       data-toggle="modal" title="Удалить">
                                                        <i class="fa  fa-trash-o"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @include('admin.receiver-people.delete')
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{--                            <div class="row">--}}
                            {{--                                <div class="col-sm-12">--}}
                            {{--                                    <div class="dataTables_paginate paging_simple_numbers" id="data-table_paginate">--}}
                            {{--                                        <ul class="pagination pull-right">--}}
                            {{--                                            <li>--}}
                            {{--                                                {{$countries->links()}}--}}
                            {{--                                            </li>--}}
                            {{--                                        </ul>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.receiver-people.create')
        @include('admin.receiver-people.edit')
        <div class="modal" id="modal-dialog-show">
            <div class="modal-dialog">
            </div>
        </div>
        @include('admin.receiver-people._scripts')
    </div>
    <script src="https://jsuites.net/v4/jsuites.js"></script>
@endsection


