@extends('admin.layouts.app')
@section('incoterms')
    active
@endsection
@section('content')
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-left">
            <li><a href="{{route('admin.dashboard')}}">Главная</a></li>
            <li class="active">Инкотермс</li>
        </ol>
        <div class="row">
            <div class="col-md-12 ui-sortable">
                <div class="panel panel-inverse">
                    @if($userPermission['Add incoterm']==1)
                        <a href="#modal-dialog-create" class="btn btn-success pull-right btn-xs"
                           style="margin: 8px !important"
                           data-toggle="modal" data-target="#modal-dialog-create">Добавить <i class="fa fa-plus"></i>
                        </a>
                        <form action="{{ route('admin.orders.import') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="file">Excel faylni tanlang:</label>
                                <input type="file" name="file" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-success">
                                Import qilish <i class="fa fa-upload"></i>
                            </button>
                        </form>

                        <form action="{{ route('admin.orders.importProducts') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="file">Excel faylni tanlang:</label>
                                <input type="file" name="file" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-success">
                                Product Import qilish <i class="fa fa-upload"></i>
                            </button>
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
                                            <th>@sortablelink('name', 'Инкотермс')</th>
                                            <th style="width: 70px; text-align: center"><b>Действия</b></th>
                                        </tr>
                                        <tr>
                                            <form class="form-inline" method="GET">
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Инкотермс..."
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
                                        @foreach($incoterms as $incoterm)
                                            <tr>
                                                <td>{{($incoterms->currentpage()-1)*$incoterms->perpage() +($loop->index+1)}}</td>
                                                <td>{{$incoterm->name}}</td>
                                                <td>
                                                    @if($userPermission['Edit incoterm']==1)
                                                        <a href="#modal-dialog-edit" class=" btn btn-xs btn-info"
                                                           title="Изменить">
                                                            <i class="fa fa-pencil-square-o"
                                                               onclick="getProductCategoryData({{$incoterm->id}})"></i>
                                                        </a>
                                                    @endif
                                                    @if($userPermission['Delete incoterm']==1)
                                                        <a href="#modal-dialog-delete{{$incoterm->id}}"
                                                           class="btn btn-xs btn-danger"
                                                           data-toggle="modal" title="Удалить">
                                                            <i class="fa  fa-trash-o"></i>
                                                        </a>
                                                    @endif
                                                </td>
                                            </tr>
                                            @include('admin.incoterms.delete')
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
        @include('admin.incoterms.create')
        @include('admin.incoterms.edit')
        <div class="modal" id="modal-dialog-show">
            <div class="modal-dialog">
            </div>
        </div>
        @include('admin.incoterms._scripts')
    </div>
@endsection


