@extends('admin.layouts.app')
@section('roles')
    active
@endsection
@section('content')
    @include('admin.about._styles')
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb float-xl-right">

            <li class="breadcrumb-item active">О проекте</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin panel -->
        <div class="panel panel-inverse" style="background: #f4f4f7">
            <!-- begin panel-heading -->
            <div class="panel-heading">
                <h4 class="panel-title"></h4>
                <div class="panel-heading-btn">
                    <a href="#about-modal-create" class="btn btn-xs btn-primary mr-3" data-toggle="modal" data-target="#about-modal-create">
                        <i class="fa fa-pencil-alt"></i> Редактировать
                    </a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i
                            class="fa fa-expand"></i></a>
                </div>
                <div class="">
                    <h4 class="panel-title">Список</h4>
                </div>
            </div>
            <!-- end panel-heading -->

            <form>
                <div class="panel-body p-t-10">
                    <div class="row">
                        <!-- begin col-6 -->
                        <div class="col-md-2">
                            <div class="form-group">
                                <label class="m-l-20">Изображение</label><br>
                                <img src="{{asset('admin-assets/img/user.png')}}" alt=""  id="output_create" style="border-radius: 1em;width:160px; height:155px; margin-left: 15px;">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="create_full_name">Заголовок</label><br>
                                <input type="text" class="form-control bg-white" id="create_full_name" name="title" value ="{{$about->title}}" readonly>
                            </div>
                        <div class="col-md-9 ">
                            <div class="form-group">
                                <label for="create_phone">Описание</label><br>
                                <textarea class="form-control bg-white " style="height: 65px" readonly>{{$about->description}}</textarea>
                            </div>
                        </div>

                        <!-- end col-6 -->
                    </div>

                    <div class="row">
                        <!-- begin col-6 -->
                        <div class="col-md-2">
                            <div class="form-group">
                                <label class="m-l-20">Видео</label><br>
                                <img src="{{asset('admin-assets/img/user.png')}}" alt=""  id="output_create" style="border-radius: 1em;width:160px; height:155px; margin-left: 15px;">
                            </div>
                        </div>
                        <!-- end col-6 -->
                    </div>

                </div>
            </form>
        </div>

    </div>
    @include('admin.about.edit')
    @include('admin.about._scripts')
    <div class="modal" id="modal-dialog-show">
        <div class="modal-dialog">
        </div>
    </div>
@endsection

