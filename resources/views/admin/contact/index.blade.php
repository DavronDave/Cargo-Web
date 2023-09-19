@extends('admin.layouts.app')
@section('contact')
    active
@endsection
@section('content')
    @include('admin.contact._styles')
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb float-xl-right">
            <li class="breadcrumb-item"><a href="#">Рабочий стол</a></li>
            <li class="breadcrumb-item active">Контакты</li>
        </ol>

        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title"></h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i
                            class="fa fa-expand"></i>
                    </a>
                </div>
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
                        <th class="text-nowrap">Имя</th>
                        <th class="text-nowrap">Э-почта</th>
                        <th class="text-nowrap">Тел.</th>
                        <th class="text-nowrap">Предмет</th>
                        <th class="text-nowrap">Сообщение</th>
                        <th class="text-nowrap">Действие</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $contact)
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
                        @endforeach
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
    @include('admin.contact._scripts')
@endsection
