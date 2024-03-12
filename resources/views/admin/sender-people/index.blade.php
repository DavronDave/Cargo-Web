@extends('admin.layouts.app')
@section('sender-people')
    active
@endsection
@section('content')
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-left">
            <li><a href="{{route('admin.dashboard')}}">Главная</a></li>
            <li class="active">Регионы</li>
        </ol>
        <div class="row">
            <div class="col-md-12 ui-sortable">
                <div class="panel panel-inverse">
                    @if($userPermission['Add sender']==1)
                        <a href="#modal-dialog-create" class="btn btn-success pull-right btn-xs"
                           style="margin: 8px !important"
                           data-toggle="modal" data-target="#modal-dialog-create">Добавить <i class="fa fa-plus"></i>
                        </a>
                    @endif
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
                                            <th>@sortablelink('name', 'Отправители')</th>
                                            <th style="width: 70px; text-align: center"><b>Действия</b></th>
                                        </tr>
                                        <tr>
                                            <form class="form-inline" method="GET">
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Отправители..."
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
                                        @foreach($senderPeople as $senderPerson)
                                            <tr>
                                                <td>{{($senderPeople->currentpage()-1)*$senderPeople->perpage() +($loop->index+1)}}</td>
                                                <td>{{$senderPerson->full_name}}</td>
                                                <td>
                                                    @if($userPermission['Edit sender']==1)
                                                        <a href="#modal-dialog-edit" class=" btn btn-xs btn-info"
                                                           title="Изменить">
                                                            <i class="fa fa-pencil-square-o"
                                                               onclick="getSenderPersonData({{$senderPerson->id}})"></i>
                                                        </a>
                                                    @endif
                                                    @if($userPermission['Delete sender']==1)
                                                        <a href="#modal-dialog-delete{{$senderPerson->id}}"
                                                           class="btn btn-xs btn-danger"
                                                           data-toggle="modal" title="Удалить">
                                                            <i class="fa  fa-trash-o"></i>
                                                        </a>
                                                    @endif
                                                </td>
                                            </tr>
                                            @include('admin.sender-people.delete')
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
        @include('admin.sender-people.create')
        @include('admin.sender-people.edit')
        <div class="modal" id="modal-dialog-show">
            <div class="modal-dialog">
            </div>
        </div>
        @include('admin.sender-people._scripts')
    </div>
@endsection


