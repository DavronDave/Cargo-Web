@extends('admin.layouts.app')
@section('drivers')
    active
@endsection
@section('content')
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-left">
            <li><a href="{{route('admin.dashboard')}}">Главная</a></li>
            <li class="active">Водитель</li>
        </ol>
        <div class="row">
            <div class="col-md-12 ui-sortable">
                <div class="panel panel-inverse">
                    @if($userPermission['Add driver']==1)
                        <a href="#modal-dialog-create" class="btn btn-success pull-right btn-xs"
                           style="margin: 8px !important"
                           data-toggle="modal" data-target="#modal-dialog-create">Добавить <i class="fa fa-plus"></i>
                        </a>
                    @endif

                    @if($userPermission['Add driver']==1)
                        <form action="{{route('admin.driver-receiver.search')}}" method="GET">
                            <button type="submit" class="btn btn-success pull-right"
                                    style="margin: 8px !important; height: 24px; width: 80px; font-size: 14px; padding: 0;">Поиск <i class="fa fa-search"></i>
                            </button>
                            <input type="text" name="name"
                                   style="margin: 8px !important; height: 24px; width: 170px; font-size: 15px;"
                                   class="pull-right form-control" placeholder="Пасспорт, имя" required
                                   value="{{request('name')}}">
                        </form>
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
                                            <th>@sortablelink('name', 'Имя водителя или номер автомобиля')</th>
                                            <th>@sortablelink('key', 'Компания')</th>
                                            <th>@sortablelink('key', 'Количество инвойс')</th>
                                            <th style="width: 160px; text-align: center"><b>Действия</b></th>
                                        </tr>
                                        <tr>
                                            <form class="form-inline" method="GET">
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Имя водителя..."
                                                           value="{{request('driver_name')}}">
                                                </td>
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Компания...">
                                                </td>
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Количество инвойс...">
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
                                        @foreach($drivers as $driver)
                                            <tr>
                                                <td>{{($drivers->currentpage()-1)*$drivers->perpage() +($loop->index+1)}}</td>
                                                <td>{{$driver->name}}</td>
                                                <td>{{$driver->company->name}}</td>
                                                <td>{{ $driver->receiverPeople->count() }}</td>
                                                <td>
                                                    @if($userPermission['Edit driver']==1)
                                                        <a href="#modal-dialog-edit" class=" btn btn-xs btn-info"
                                                           title="Изменить">
                                                            <i class="fa fa-pencil-square-o"
                                                               onclick="getDriverInvoiceData({{$driver->id}})"></i>
                                                        </a>
                                                    @endif
                                                    @if($userPermission['Delete driver']==1)
                                                        <a href="#modal-dialog-delete{{$driver->id}}"
                                                           class="btn btn-xs btn-danger"
                                                           data-toggle="modal" title="Удалить">
                                                            <i class="fa  fa-trash-o"></i>
                                                        </a>
                                                    @endif
                                                    @if($userPermission['Passports']==1)
                                                        <a href="{{route('admin.driver-receiver.index', ['driver'=> $driver->id])}}"
                                                           class="btn btn-xs btn-primary"
                                                           title="Invoices"> Паспорта
                                                            <i class="fa"></i>
                                                        </a>
                                                    @endif
                                                </td>
                                            </tr>
                                            @include('admin.drivers.delete')
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
                                                {{$drivers->links()}}
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
        @include('admin.drivers.create')
        @include('admin.drivers.edit')
        <div class="modal" id="modal-dialog-show">
            <div class="modal-dialog">
            </div>
        </div>
        @include('admin.drivers._scripts')
    </div>
@endsection


