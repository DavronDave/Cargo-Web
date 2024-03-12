@extends('admin.layouts.app')
@section('products-list')
    active
@endsection
@section('content')
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-left">
            <li><a href="{{route('admin.dashboard')}}">Главная</a></li>
        </ol>
        <div class="row">
            <div class="col-md-12 ui-sortable">
                <div class="panel panel-inverse">
                    @if($userPermission['Add invoice product']==1)
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
                                            <th>@sortablelink('name', 'Наименование товара')</th>
                                            <th>@sortablelink('code', 'Количество')</th>
                                            <th>@sortablelink('position', 'Цена')</th>
                                            <th style="width: 70px; text-align: center"><b>Действия</b></th>
                                        </tr>
                                        <tr>
                                            <form class="form-inline" method="GET">
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Наименование товара..."
                                                           value="{{request('name')}}">
                                                </td>
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Количество..."
                                                           value="{{request('code')}}">
                                                </td>
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Цена..."
                                                           value="{{request('position')}}">
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
                                        @foreach($productList as $product)
                                            <tr>
                                                <td>{{($productList->currentPage()-1)*$productList->perPage() +($loop->index+1)}}</td>
                                                <td>{{$product->product->name}}</td>
                                                <td>{{$product->quantity}}</td>
                                                <td>{{$product->price}}</td>
                                                <td style="text-align: center">
{{--                                                    <a href="#modal-dialog-edit" class=" btn btn-xs btn-info" title="Изменить">--}}
{{--                                                        <i class="fa fa-pencil-square-o" onclick="getProductData({{$product->id}})"></i>--}}
{{--                                                    </a>--}}
                                                    @if($userPermission['Delete invoice product']==1)
                                                    <a href="#modal-dialog-delete{{$product->id}}" class="btn btn-xs btn-danger"
                                                       data-toggle="modal" title="Удалить">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                    @endif
                                                </td>
                                            </tr>
                                            @include('admin.product-list.delete')
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
        @include('admin.product-list.create')
{{--        @include('admin.products.edit')--}}
        <div class="modal" id="modal-dialog-show">
            <div class="modal-dialog">
            </div>
        </div>
        @include('admin.product-list._scripts')
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />

    <script>
        $(document).ready(function () {
            // Initialize selectize on the initial select element
            $('select').selectize({
                sortField: 'text'
            });
        });
    </script>
@endsection


