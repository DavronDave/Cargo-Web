@extends('admin.layouts.app')
@section('users')
  active
@endsection
@section('content')
@include('admin.users._styles')
<div id="content" class="content">
  <ol class="breadcrumb pull-left">
    <li><a href="{{route('admin.dashboard')}}">Главная</a></li>
    <li class="active">Пользователи</li>
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
                            <table id="data-table"class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="data-table_info">
                                <thead>
                                    <tr role="row">
                                        <th style="width: 20px; padding: 30px 0; text-align: center" rowspan="2">№</th>
                                        <th rowspan="2" style="padding: 30px 0; text-align: center">Изображение</th>
                                        <th>@sortablelink('full_name', 'ФИО')</th>
                                        <th >@sortablelink('role', 'Роль')</th>
                                        <th >@sortablelink('login', 'Имя пользователя')</th>
                                        <th>Действие</th>
                                    </tr>
                                    <tr>
                                        <form class="form-inline" method="GET">
                                            <td>
                                                <input style="width: 100%;" type="text" class="form-control" id="filter"
                                                       name="full_name" placeholder="ФИО..." value="{{request('full_name')}}">
                                            </td>
                                            <td>
                                                <input style="width: 100%;" type="text" class="form-control" id="filter"
                                                       name="role" placeholder="Роль..." value="{{request('role')}}">
                                            </td>
                                            <td>
                                                <input style="width: 100%;" type="text" class="form-control" id="filter"
                                                       name="email" placeholder="Имя пользователя..." value="{{request('login')}}">
                                            </td>
                                            <td style="text-align: center;">
                                                <button type="submit" class="btn btn-warning">
                                                    <i class="fa fa-filter"></i> Фильтр
                                                </button>
                                            </td>
                                        </form>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($users as $user)
                                    <tr>
                                      <td>{{($users->currentPage() - 1)*$users->perPage() + ($loop->index + 1)}}</td>
                                      <td class="image-profile">
                                            <img src="{{($user->image) ? asset($user->image) : '/admin-assets/img/user.png'}}" class="img-round img-responsive ">
                                      </td>
                                      <td>{{$user->full_name}}</td>
                                      <td>{{$user->role->key}}</td>
                                      <td>{{$user->username}}</td>
                                      <td  style="text-align: center;">
                                        <a href="#modal-dialog-show" class="btn btn-xs btn-success" onclick="showUser({{$user->id}})"
                                            title="Показать">  <i class="fa  fa-eye"></i>
                                        </a>
                                        <a href="#modal-dialog-edit" class=" btn btn-xs btn-info" title="Изменить">
                                            <i class="fa fa-pencil-square-o" onclick="getUserData({{$user->id}})"></i>
                                        </a>
                                        <a href="#modal-dialog-delete{{$user->id}}" data-toggle="modal" class="btn btn-xs btn-danger" title="Удалить">
                                            <i class="fa  fa-trash-o"></i>
                                        </a>
                                      </td>
                                    </tr>
                                    @include('admin.users.delete')
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
                                        {{$users->links()}}
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
  @include('admin.users.create')
  @include('admin.users.edit')
    <div class="modal" id="modal-dialog-show">
        <div class="modal-dialog">
        </div>
    </div>
</div>
@include('admin.users._scripts')
@endsection

