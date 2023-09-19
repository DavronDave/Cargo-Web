@extends('admin.layouts._app')
@section('content')
@endsection
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Авторизация</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
</head>

<body class="pace-top">
    @include('admin.dashboard._styles')
    <div class="row">
        @include('admin.layouts.header')
    </div>
    <div class="row">

    <div class="login-cover">
        <div class="login-cover-image"><img src="{{asset('assets/img/login-bg/bg-1.jpg')}}" data-id="login-cover-image"
                alt="" /></div>
        <div class="login-cover-bg"></div>
    </div>
    <div id="page-container" class="fade">
        <div class="card col-md-4 p-0 pull-right">
            <div class="card-footer">
                <a href="" class="btn btn-success" style="color: #f8f8f8;text-decoration: none;">Salom</a>
            </div>
        </div>
        <div id="content" class="container"
        style="height: 90vh; display: flex; flex-direction: column; justify-content: center">
        <div class="row main-menu">
                <div class="card col-md-4 p-0">
                    <div class="card-body">
                        <div class="card-number"></div><i class="fa fa-user"></i>
                    </div>
                    <div class="card-footer">
                        <a href="#modal-dialog-super-admin" data-toggle="modal" data-target="#modal-dialog-super-admin"  style="color: #f8f8f8;text-decoration: none;">Super admin</a>
                    </div>
                </div>
                <div class="card col-md-4 p-0">
                    <div class="card-body">
                        <div class="card-number"></div><i class="fa fa-user"></i>
                    </div>
                    <div class="card-footer"><a href="#modal-dialog-admin" data-toggle="modal" data-target="#modal-dialog-admin"
                            style="color: #f8f8f8;text-decoration: none;">Admin</a></div>
                </div>
                <div class="card col-md-4 p-0">
                    <div class="card-body">
                        <div class="card-number"></div><i class="fa fa-user"></i>
                    </div>
                    <div class="card-footer"><a href="#modal-dialog-cordinator" data-toggle="modal" data-target="#modal-dialog-cordinator"
                            style="color: #f8f8f8;text-decoration: none;">Kordinator</a></div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>

