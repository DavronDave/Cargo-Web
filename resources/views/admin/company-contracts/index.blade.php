@extends('admin.layouts.app')
@section('company-contracts')
    active
@endsection
@section('content')
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-left">
            <li><a href="{{route('admin.dashboard')}}">Главная</a></li>
            <li class="active">Компании</li>
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
                                            <th>@sortablelink('name', 'Отправитель')</th>
                                            <th>@sortablelink('key', 'Получатель')</th>
                                            <th>@sortablelink('key', 'Контактный номер')</th>
                                            <th>@sortablelink('key', 'Дата')</th>
                                            <th>@sortablelink('key', 'Статус')</th>
                                            <th style="width: 70px; text-align: center"><b>Действия</b></th>
                                        </tr>
                                        <tr>
                                            <form class="form-inline" method="GET">
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Название компании..."
                                                           value="{{request('name')}}">
                                                </td>
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Страны..."
                                                           value="{{request('name')}}">
                                                </td>
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Регионы..."
                                                           value="{{request('name')}}">
                                                </td>
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Районы..."
                                                           value="{{request('name')}}">
                                                </td>
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Адрес..."
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
                                        @foreach($contracts as $company)
                                            <tr>
                                                <td>{{($contracts->currentpage()-1)*$contracts->perpage() +($loop->index+1)}}</td>
                                                <td>{{$company->sender->name}}</td>
                                                <td>{{$company->receiver->name}}</td>
                                                <td>{{$company->code}}</td>
                                                <td>{{$company->from_date}}</td>
                                                <td><input type="checkbox" @if($company->status==1) checked @endif onclick="return false"></td>

                                                <td>
                                                    <a href="#modal-dialog-edit" class=" btn btn-xs btn-info"
                                                       title="Изменить">
                                                        <i class="fa fa-pencil-square-o"
                                                           onclick="getCompanyData({{$company->id}})"></i>
                                                    </a>
                                                    <a href="#modal-dialog-delete{{$company->id}}"
                                                       class="btn btn-xs btn-danger"
                                                       data-toggle="modal" title="Удалить">
                                                        <i class="fa  fa-trash-o"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @include('admin.company-contracts.delete')
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
        @include('admin.company-contracts.create')
        @include('admin.company-contracts.edit')
        <div class="modal" id="modal-dialog-show">
            <div class="modal-dialog">
            </div>
        </div>
        @include('admin.company-contracts._scripts')
    </div>
@endsection


