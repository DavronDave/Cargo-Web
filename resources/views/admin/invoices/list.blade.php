@extends('admin.layouts.app')
@section('projects')
    active
@endsection
@section('content')

    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-left">
            <li><a href="{{route('admin.dashboard')}}">Главная</a></li>
            <li class="active"><a href="{{route('admin.projects.index')}}">Проекты</a></li>
            <li>Инвойси</li>
        </ol>
        <div class="row">
            <div class="col-md-12 ui-sortable">
                <div class="panel panel-inverse">
                    <a href="{{route('admin.invoice.create', ['project' => $project->id])}}" class="btn btn-success pull-right"
                       style="margin: 7px !important; height: 36px;">Добавить <i class="fa fa-plus"></i>
                    </a>
                    <form action="{{route('admin.invoice.import', ['project' => $project->id])}}" enctype="multipart/form-data" method="post">
                        @csrf
                        <button type="submit" class="btn btn-success pull-right"
                           style="margin: 7px !important; height: 36px;">Импортировать <i class="fa fa-plus"></i>
                        </button>
                        <input type="number" name="passport_number" style="margin: 8px !important; height: 35px; font-size: 15px;" class="pull-right" placeholder="Кол. паспортов" required>

                        <select name="driver_id" id="create_incoterm_id" class="pull-right form-control" style="width: 220px; margin: 8px !important" required>
                            <option value="">Выбрать водителя ...</option>
                            @foreach ($drivers as $key => $driver)
                                <option value="{{$driver->id}}">{{$driver->name}}</option>
                            @endforeach
                        </select>
                    </form>
                    <form action="{{route('admin.pdf.invoices', ['project' => $project->id])}}">
                        @csrf
                        <button type="submit" class="btn btn-success pull-right"
                                style="margin: 7px !important; height: 36px;">PDF <i class="fa fa-download"></i>
                        </button>
                        <input type="number" name="last" style="margin: 8px !important; height: 35px; width: 100px; font-size: 15px;" class="pull-right" placeholder="Конец" required>
                        <input type="number" name="first" style="margin: 8px !important; height: 35px; width: 100px; font-size: 15px;" class="pull-right" placeholder="Начало" required>
                    </form>
                    <div class="panel-heading" style="height: 50px">
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
                                            <th style="width: 100px">@sortablelink('name', 'Инвойс')</th>
                                            <th>@sortablelink('name', 'Отправитель')</th>
                                            <th>@sortablelink('name', 'Получатель')</th>
                                            <th>@sortablelink('name', 'Паспорт пол')</th>
                                            <th>@sortablelink('key', 'День.рож пол')</th>
                                            <th style="width: 130px;">@sortablelink('name', 'Общая цена ?')</th>
                                            <th style="width: 120px">@sortablelink('name', 'Выполнен ?')</th>
                                            <th style="width: 100px">@sortablelink('name', 'Инвойс')</th>
                                            <th style="width: 100px; text-align: center"><b>Действия</b></th>
                                        </tr>
                                        <tr>
                                            <form class="form-inline" method="GET">
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Номер..."
                                                           value="{{request('name')}}">
                                                </td>
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
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Паспорт..."
                                                           value="{{request('name')}}">
                                                </td>
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="День рож..."
                                                           value="{{request('name')}}">
                                                </td>
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Общая цена..."
                                                           value="{{request('name')}}">
                                                </td>
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Выполнен..."
                                                           value="{{request('name')}}">
                                                </td>
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Номер..."
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
                                        @foreach($invoices as $invoice)
                                            <tr>
                                                <td>{{($invoices->currentpage()-1)*$invoices->perpage() +($loop->index+1)}}</td>
                                                <td>{{$invoice->number}}</td>
                                                <td>{{$invoice->sender_fullname}}</td>
                                                <td>{{$invoice->receiver_fullname}}</td>
                                                <td>{{$invoice->receiver_passport}}</td>
                                                <td>{{$invoice->receiver_date}}</td>
                                                <td style="background-color:
                                                    @if(($totalPrice = $receiverPeopleWithTotalPrice->where('passport', $invoice->receiver_passport)->first()['total_price'] ?? null) >= 1000) red
                                                    @else
                                                    @endif;
                                                    color: @if(($totalPrice ?? 0) >= 1000) white @else black @endif; text-align: center">
                                                    {{ $totalPrice ?? 0 }}
                                                </td>
{{--                                                <td>{{$invoice->ready_date}}</td>--}}
{{--                                                <td><i class="fa fa" style="font-size: 2rem; color: red;"></i></td>--}}
                                                <td style="text-align: center">@if($invoice->isCompleted==1) <i style="color: green; font-size: 16px" class=" fa fa-check"></i>@elseif($invoice->isCompleted==0) <i style="color: red; font-size: 16px" class=" fa fa-close"></i> @endif</td>
                                                <td>{{$invoice->number}}</td>
{{--                                                <td>{{ $receiverPeopleWithTotalPrice->where('passport', $invoice->receiver_passport)->first()['total_price'] ?? 0 }}</td>--}}



                                                <td>
                                                    <a href="{{route('admin.invoice.edit', ['invoice' => $invoice->id, 'project' => $project->id])}}" class=" btn btn-xs btn-info"
                                                       title="Изменить">
                                                        <i class="fa fa-pencil-square-o"></i>
                                                    </a>
                                                    <a href="#modal-dialog-delete{{$invoice->id}}"
                                                       class="btn btn-xs btn-danger"
                                                       data-toggle="modal" title="Удалить">
                                                        <i class="fa  fa-trash-o"></i>
                                                    </a>
                                                    <a href="{{route('admin.pdf.invoice', ['invoice' => $invoice->id])}}"
                                                       class="btn btn-xs btn-success"
                                                       data-toggle="modal" title="PDF">
                                                        <i class="fa  fa-file-pdf-o"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @include('admin.invoices.delete')
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
    </div>

@endsection



