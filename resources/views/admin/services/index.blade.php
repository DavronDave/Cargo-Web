@extends('admin.layouts.app')
@section('roles')
    active
@endsection
@section('content')
    @include('admin.services._styles')
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb float-xl-right">
            <li class="breadcrumb-item"><a href="#">Рабочий стол</a></li>
            <li class="breadcrumb-item active">Услуги</li>
        </ol>

        <div class="panel panel-inverse">
            <a href="#modal-dialog-create" class="btn btn-success pull-right btn-xs" style="margin: 8px !important"
               data-toggle="modal" data-target="#modal-dialog-create">Добавить <i class="fa fa-plus"></i>
            </a>
            <div class="panel-heading">
                <div class="">
                    <h4 class="panel-title">Список</h4>
                </div>
            </div>
            <!-- begin panel-body -->
            <div class="panel-body">
                <table id="data-table" class="table table-striped table-bordered table-td-valign-middle ">
                    <thead>
                    <tr>
                        <th width="1%">#</th>
                        <th class="text-nowrap">Изображение</th>
                        <th class="text-nowrap">Заголовок</th>
                        <th class="text-nowrap">Описание</th>
                        <th class="text-nowrap">Текст</th>
                        <th class="text-nowrap">Теги</th>
                        <th class="text-nowrap">Действие</th>
                    </tr>
                    </thead>
                    <tbody>
                       {{-- @foreach($contacts as $contact)
                            <tr>
                               <td>{{ $loop->index + 1 }}</td>
                               <td>{{ $contact->fullname }}</td>
                               <td>{{ $contact->email }}</td>
                               <td>{{ $contact->phone }}</td>
                               <td>{{ $contact->subject }}</td>
                               <td>{{ $contact->message }}</td>
                               <td align="center">
                                   <a href="" class="btn btn-icon btn-primary"><i class="fas fa-pencil-alt"></i></a>
                               </td>
                            </tr>
                        @endforeach--}}
                    </tbody>
                </table>
            </div>
        </div>
        <!-- end panel-body -->
    <!-- end panel -->
        <div class="modal" id="modal-dialog-show">
            <div class="modal-dialog">
            </div>
        </div>
    </div>
    @include('admin.services._scripts')
@endsection
