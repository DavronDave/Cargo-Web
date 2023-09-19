@extends('admin.layouts.app')
@section('content')
<div id="content" class="content">
    <div class="row">
        <ol class="breadcrumb pull-left">
            <li><a href="{{route('admin.dashboard')}}">Главная</a></li>
            <li class="active"><Strong>Профиль</Strong></li>
        </ol>
    </div>
    <div class="row">
        <div class="profile-container" style="width: 100%;">
            <div class="profile-left" style="margin-left:30px;margin-bottom: 30px;">
                <div ><br><br><br>
                    <div class="image-profile" style="width:180px; height:230px; overflow: hidden;">
                        <img src="{{($user->image) ? asset($user->image) : '/storage/users/no-user.png'}}" class="img-round img-responsive" style="object-fit: cover;border-radius: 1em;">
                    </div>
                </div>
            </div>
            <div class="profile-right">
                <div class="profile-info">
                    <div class="table-responsive">
                        <table class="table table-profil pull-left" style="width:90%;">
                            <thead>
                                <tr>
                                    <td class="text-center" colspan="2">
                                        <h3>{{$user->full_name}}</h3>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th style="border: none">Имя пользователя</th>
                                    <td style="border: none">{{$user->username}}</td>
                                </tr>
                                <tr>
                                    <th style="border: none">Телефон</th>
                                    <td style="border: none">{{$user->phone}}</td>
                                </tr>
                            </tbody>
                        </table><br>
                        <a href="#modal-dialog-edit"  class=" btn btn-warning pull-right" onclick="getUserData('{{$user->id}}')"
                            data-toggle="modal" >
                            <i class="fa fa-pencil"></i> Изменить
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.users.edit')
@include('admin.users._scripts')
@endsection
