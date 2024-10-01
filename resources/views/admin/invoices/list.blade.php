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
            <li style="font-weight: bold">{{$project->name}} - {{$project->code}}</li>
        </ol>
        <div class="row">
            <div class="col-md-12 ui-sortable">
                <div class="panel panel-inverse">
                    @if($userPermission['Add invoice']==1)
                        <a href="{{route('admin.invoice.create', ['project' => $project->id])}}"
                           class="btn btn-success pull-right"
                           style="margin: 7px !important; height: 36px;"> <i class="fa fa-plus"></i>
                        </a>
                    @endif
                    @if($userPermission['Import']==1)
                        <form action="{{route('admin.invoice.import', ['project' => $project->id])}}"
                              enctype="multipart/form-data" method="post">
                            @csrf
                            <button type="submit" class="btn btn-success pull-right"
                                    style="margin: 7px !important; height: 36px;">Импорть <i class="fa fa-plus"></i>
                            </button>
                            <input type="number" name="passport_number"
                                   style="margin: 8px !important; height: 35px; width: 50px; font-size: 15px;"
                                   class="pull-right" placeholder="Кол." required>

                            <select name="driver_id" id="create_incoterm_id" class="pull-right form-control"
                                    style="width: 135px; margin: 8px !important" required>
                                <option value="">Выб. водителя</option>
                                @foreach ($drivers as $key => $driver)
                                    <option value="{{$driver->id}}">{{$driver->name}}</option>
                                @endforeach
                            </select>
                        </form>
                    @endif
                    @if($userPermission['PDF invoices']==1)
                        <form action="{{route('admin.pdf.invoices', ['project' => $project->id])}}">
                            @csrf
                            <button type="submit" class="btn btn-success pull-right"
                                    style="margin: 7px !important; height: 36px;">PDF <i class="fa fa-download"></i>
                            </button>
                            <input type="number" name="last"
                                   style="margin: 8px !important; height: 35px; width: 80px; font-size: 15px;"
                                   class="pull-right" placeholder="Конец" required>
                            <input type="number" name="first"
                                   style="margin: 8px !important; height: 35px; width: 80px; font-size: 15px;"
                                   class="pull-right" placeholder="Начало" required>
                        </form>
                    @endif
                        @if($userPermission['Move invoices']==1)
                            <form action="{{ route('admin.copy-invoice', ['project_id' => $project->id]) }}" method="POST">
                                @csrf
                                <button type="submit" name="action" value="move" class="btn btn-warning pull-right"
                                        style="margin-top:8px !important; height: 36px;">
                                    <i class="fa fa-arrow-circle-right"></i>
                                </button>

                                <button type="submit" name="action" value="copy" class="btn btn-success pull-right"
                                        style="margin-top:8px !important; height: 36px; margin-right: 10px;">
                                    <i class="fa fa-chevron-circle-right"></i>
                                </button>

                                <input type="text" name="editable_invoices"
                                       style="margin: 8px !important; height: 35px; width: 170px; font-size: 15px;"
                                       class="pull-right" placeholder="До" required>
                                <input type="number" name="selected_invoice"
                                       style="margin: 8px !important; height: 35px; width: 65px; font-size: 15px;"
                                       class="pull-right" placeholder="От" required>
                            </form>
                        @endif

                    @if($userPermission['Move invoices']==1)
                        <form action="{{ route('admin.move-invoices') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success pull-right"
                                    style="margin: 7px !important; height: 36px;"> <i
                                    class="fa fa-upload"></i>
                            </button>
                            <select name="project_id" id="create_project_id" class="pull-right form-control"
                                    style="width: 120px; margin: 8px !important" required>
                                <option value="">Выб. проект</option>
                                @foreach ($projects as $key => $project)
                                    <option value="{{$project->id}}">{{$project->code}} - {{$project->name}}</option>
                                @endforeach
                            </select>
                    @endif

                    <div class="panel-heading" style="height: 50px; background-color: #242A30">
                        <h4 class="panel-title" style="color: white"></h4>
                    </div>
                    <div class="panel-body">
                        <div id="data-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="data-table" class="table table-striped table-bordered ">
                                        <thead>
                                        <tr client="row">
                                            <th style="width: 20px; padding: 30px 0; text-align: center" rowspan="2">
                                                <input type="checkbox" name="select-all"/>&nbsp;
                                            </th>
                                            <th style="width: 20px; padding: 30px 0; text-align: center" rowspan="2">№
                                            </th>
                                            <th style="width: 100px">@sortablelink('name', 'Инвойс')</th>
                                            <th>@sortablelink('name', 'Отправитель')</th>
                                            <th>@sortablelink('name', 'Получатель')</th>
                                            <th>@sortablelink('name', 'Паспорт пол')</th>
                                            <th>@sortablelink('key', 'Весь')</th>
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
                                                           name="name" placeholder="Весь..."
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
                                            <tr >
                                                <td style="vertical-align: middle; text-align: center"><input  type="checkbox" name="selected_ids[]" value="{{ $invoice->id }}"/>&nbsp;</td>
                                                <td style="vertical-align: middle; text-align: center"> {{($invoices->currentpage()-1)*$invoices->perpage() +($loop->index+1)}}</td>
                                                <td style="vertical-align: middle; text-align: center">{{$invoice->number}}</td>
                                                <td style="vertical-align: middle; text-align: center">{{$invoice->sender_fullname}}</td>
                                                <td style="vertical-align: middle; text-align: center">{{$invoice->receiver_fullname}}</td>
                                                <td style="vertical-align: middle; text-align: center">{{$invoice->receiver_passport}}</td>
                                                <td style="background-color:
                                                    @if($invoice->weight > 30) red
                                                    @else
                                                    @endif;
                                                    color: @if($invoice->weight > 30) white @else black @endif; text-align: center">
                                                    {{ $invoice->weight ?? 0 }}
                                                </td>
{{--                                                <td style="vertical-align: middle; text-align: center">--}}
{{--                                                    {{ $totalPrice ?? 0 }}--}}

{{--                                                </td>--}}
{{--                                                <td style="background-color:--}}
{{--                                                    @if(($totalPrice = $receiverPeopleWithTotalPrice->where('passport', $invoice->receiver_passport)->first()['total_price'] ?? null) >= 1000) red--}}
{{--                                                    @else--}}
{{--                                                    @endif;--}}
{{--                                                    color: @if(($totalPrice ?? 0) >= 1000) white @else black @endif; text-align: center">--}}
{{--                                                    {{ $totalPrice ?? 0 }}--}}
{{--                                                </td>--}}
                                                <td style="background-color:
                                                    @if(($totalPrice = $receiverPeopleWithTotalPrice->where('passport', $invoice->receiver_passport)->first()['total_price'] ?? null) >= 1000) red
                                                    @elseif(($totalPrice ?? 0) >= 800) yellow
                                                    @else
                                                    @endif;
                                                    color: @if(($totalPrice ?? 0) >= 800) white @else black @endif; text-align: center">
                                                    {{ $totalPrice ?? 0 }}
                                                </td>

                                                {{--                                                <td>{{$invoice->ready_date}}</td>--}}
                                                {{--                                                <td><i class="fa fa" style="font-size: 2rem; color: red;"></i></td>--}}
                                                <td style="vertical-align: middle; text-align: center">@if($invoice->isCompleted==1)
                                                        <i style="color: green; font-size: 16px"
                                                           class=" fa fa-check"></i>
                                                    @elseif($invoice->isCompleted==0)
                                                        <i style="color: red; font-size: 16px" class=" fa fa-close"></i>
                                                    @endif</td>
                                                <td style="vertical-align: middle; text-align: center">{{$invoice->number}}</td>
{{--                                                                                                <td>{{ $receiverPeopleWithTotalPrice->where('passport', $invoice->receiver_passport)->first()['total_price'] ?? 0 }}</td>--}}


                                                <td style="vertical-align: middle; text-align: center">

                                                    @if($userPermission['Edit invoice']==1)
                                                        <a href="{{route('admin.invoice.edit', ['invoice' => $invoice->id, 'project' => $project_id])}}"
                                                           class=" btn btn-xs btn-info"
                                                           title="Изменить">
                                                            <i class="fa fa-pencil-square-o"></i>
                                                        </a>
                                                    @endif
                                                    @if($userPermission['Delete invoice']==1)
                                                        <a href="#modal-dialog-delete{{$invoice->id}}"
                                                           class="btn btn-xs btn-danger"
                                                           data-toggle="modal" title="Удалить">
                                                            <i class="fa  fa-trash-o"></i>
                                                        </a>
                                                    @endif
                                                    @if($userPermission['PDF invoice']==1)
                                                        <a href="{{route('admin.pdf.invoice', ['invoice' => $invoice->id])}}"
                                                           class="btn btn-xs btn-success"
                                                           data-toggle="modal" title="PDF">
                                                            <i class="fa  fa-file-pdf-o"></i>
                                                        </a>
                                                    @endif
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
                    </form>

                    {{--                        @endif--}}
                </div>
            </div>
        </div>
    </div>
    @if (session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif
@endsection
