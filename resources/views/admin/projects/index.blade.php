@extends('admin.layouts.app')
@section('projects')
    active
@endsection
@section('content')
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-left">
            <li><a href="{{route('admin.dashboard')}}">Главная</a></li>
            <li class="active">Проекты</li>
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
                                            {{--                                            <th>@sortablelink('key', 'Договор')</th>--}}
{{--                                            <th>@sortablelink('key', 'Инкотермс')</th>--}}
                                            <th style="width: 110px; text-align: center">@sortablelink('key', 'номер
                                                CMR')
                                            </th>
                                            <th>@sortablelink('key', 'Дата')</th>
                                            <th>@sortablelink('key', 'Статус')</th>
                                            <th style="width: 150px; text-align: center"><b>Действия</b></th>
                                            <th style="width: 320px; text-align: center"><b>Скачать</b></th>
                                        </tr>
                                        <tr>
                                            <form class="form-inline" method="GET">
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Отправитель..."
                                                           value="{{request('name')}}">
                                                </td>
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Получатель..."
                                                           value="{{request('name')}}">
                                                </td>
                                                {{--                                                <td>--}}
                                                {{--                                                    <input style="width: 100%;" type="text" class="form-control"--}}
                                                {{--                                                           id="filter"--}}
                                                {{--                                                           name="name" placeholder="Договор..."--}}
                                                {{--                                                           value="{{request('name')}}">--}}
                                                {{--                                                </td>--}}
{{--                                                <td>--}}
{{--                                                    <input style="width: 100%;" type="text" class="form-control"--}}
{{--                                                           id="filter"--}}
{{--                                                           name="name" placeholder="Инкотермс..."--}}
{{--                                                           value="{{request('name')}}">--}}
{{--                                                </td>--}}
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Код..."
                                                           value="{{request('name')}}">
                                                </td>
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Дата..."
                                                           value="{{request('name')}}">
                                                </td>
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Статус..."
                                                           value="{{request('name')}}">
                                                </td>
                                                <td>
                                                    <button type="submit" class="btn btn-warning">
                                                        <i class="fa  fa-filter"></i> Фильтр
                                                    </button>
                                                </td>
                                                <td>

                                                </td>
                                            </form>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($projects as $project)
                                            {{--                                            @dd($project->sender->name)--}}
                                            <tr>
                                                <td>{{($projects->currentpage()-1)*$projects->perpage() +($loop->index+1)}}</td>
                                                <td>{{$project->sender->name}}</td>
                                                <td>{{$project->receiver->name}}</td>
{{--                                                <td>{{$project->incoterm->name}}</td>--}}
                                                <td>{{$project->code}}</td>
                                                <td>{{$project->ready_date}}</td>
                                                <td style="background-color:
                                                    @if($project->status == 1)  orange;
                                                    @elseif($project->status == 2) green
                                                    @elseif($project->status == 3) red
                                                    @else white /* Default background color for other cases */
                                                    @endif;
                                                    color: white">
                                                    @if($project->status == 1)
                                                        Jarayonda
                                                    @elseif($project->status == 2)
                                                        Tayyor
                                                    @elseif($project->status == 3)
                                                        Qayta ishlanmoqda
                                                    @else
                                                        Xato
                                                    @endif
                                                </td>

                                                <td>
                                                    <a href="#modal-dialog-edit" class=" btn btn-xs btn-info"
                                                       title="Изменить">
                                                        <i class="fa fa-pencil-square-o"
                                                           onclick="getProjectData({{$project->id}})"></i>
                                                    </a>
                                                    <a href="#modal-dialog-delete{{$project->id}}"
                                                       class="btn btn-xs btn-danger"
                                                       data-toggle="modal" title="Удалить">
                                                        <i class="fa  fa-trash-o"></i>
                                                    </a>
                                                    <a href="{{route('admin.invoice.index', ['project' => $project->id ])}}"
                                                       class="btn btn-xs btn-primary"
                                                       title="Invoices"> Invoices
                                                        <i class="fa"></i>
                                                    </a>

                                                </td>
                                                <td>
                                                    @if($project->status == 2)
                                                        <a href="{{route('admin.pdf.tnved', ['project' => $project->id])}}"
                                                           class="btn btn-xs btn-success"
                                                           title=" Download tnved"> Tnved
                                                            <i class="fa fa-download"></i>
                                                        </a>
                                                        <a href="{{route('admin.pdf.proforma', ['project' => $project->id])}}"
                                                           class="btn btn-xs btn-success"
                                                           title="Download proforma"> Proforma
                                                            <i class="fa fa-download"></i>
                                                        </a>
                                                        <a href="{{route('admin.pdf.manifest', ['project' => $project->id])}}"
                                                           class="btn btn-xs btn-success"
                                                           title="Download proforma"> Manifest
                                                            <i class="fa fa-download"></i>
                                                        </a>
                                                        <a href="{{route('admin.excel.invoices', ['project' => $project->id])}}"
                                                           class="btn btn-xs btn-success"
                                                           title="Download excel"> Excel
                                                            <i class="fa fa-download"></i>
                                                        </a>
                                                    @endif

                                                </td>
                                            </tr>
                                            @include('admin.projects.delete')
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
        @include('admin.projects.create')
        @include('admin.projects.edit')
        <div class="modal" id="modal-dialog-show">
            <div class="modal-dialog">
            </div>
        </div>
        @include('admin.projects._scripts')
    </div>
@endsection


