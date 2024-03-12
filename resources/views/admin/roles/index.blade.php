@extends('admin.layouts.app')
@section('roles')
  active
@endsection
@section('content')
<div id="content" class="content">
	<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-left">
		<li><a href="{{route('admin.dashboard')}}">Главная</a></li>
		<li class="active">Роли</li>
	</ol>
    <div class="row">
        <div class="col-md-12 ui-sortable">
            <div class="panel panel-inverse">
                <a href="#modal-dialog-create" class="btn btn-success pull-right btn-xs" style="margin: 8px !important"
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
                                    <tr role="row">
                                        <th style="width: 20px; padding: 30px 0; text-align: center" rowspan="2">№</th>
                                        <th>@sortablelink('name', 'Значение')</th>
                                        <th>@sortablelink('key', 'Ключ')</th>
                                        <th style="width: 150px; text-align: center"><b>Действия</b></th>
                                    </tr>
                                    <tr>
                                        <form class="form-inline" method="GET">
                                            <td>
                                                <input style="width: 100%;" type="text" class="form-control" id="filter"
                                                    name="name" placeholder="Значение..." value="{{-- {{request('name')}} --}}">
                                            </td>
                                            <td>
                                                <input style="width: 100%;" type="text" class="form-control" id="filter"
                                                    name="key_filter" placeholder="Ключ..." value="{{request('key_filter')}}">
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
                                    @foreach($roles as $role)
                                        <tr>
                                            <td>{{($roles->currentpage()-1)*$roles->perpage() +($loop->index+1)}}</td>
                                            <td>{{$role->getTranslation('name', $lang)}}</td>
                                            <td>{{$role->key}}</td>
                                            <td>
                                                <a href="{{route('admin.role.actions', ['role_id'=>$role->id])}}" title="{{__('action.change')}}"
                                                   class="btn btn-xs btn-warning mr-1 edit">
                                                    <i class="fa fa-users"></i>
                                                </a>
                                                <a href="#modal-dialog-show" class="btn btn-xs btn-success" onclick="showRole({{$role->id}})" title="Показать">
                                                    <i class="fa  fa-eye"></i>
                                                </a>
                                                <a href="#modal-dialog-edit" class=" btn btn-xs btn-info" title="Изменить">
                                                    <i class="fa fa-pencil-square-o" onclick="getRoleData({{$role->id}})"></i>
                                                </a>
                                                <a href="#modal-dialog-delete{{$role->id}}"  class="btn btn-xs btn-danger"
                                                data-toggle="modal" title="Удалить">
                                                <i class="fa  fa-trash-o"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @include('admin.roles.delete')
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="dataTables_paginate paging_simple_numbers" id="data-table_paginate">
                                    <ul class="pagination pull-right">
                                        <li>
                                            {{$roles->links()}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('admin.roles.create')
@include('admin.roles.edit')
<div class="modal" id="modal-dialog-show">
    <div class="modal-dialog">
    </div>
</div>
@include('admin.roles._scripts')
</div>
@endsection


