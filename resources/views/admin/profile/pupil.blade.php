@extends('layouts.app')
@section('content')
<div id="content" class="content">
    <div class="row">
        <ol class="breadcrumb pull-left">
            <li><a href="{{route('dashboard')}}">Главная</a></li>
            <li class="active"><Strong>Профиль</Strong></li>
        </ol>
    </div>
    <div class="row">
        <div class="profile-container" style="width: 100%;">
            <div class="profile-section">
                <div class="tab-content">
                    <ul class="nav nav-pills" style="background: #ffffff;">
                        <li id="tab-orders-1" class="active">
                            <a href="#default-tab-orders-1" data-toggle="tab" aria-expanded="true">Личная информация  
                            </a>
                        </li>
                        <li id="tab-orders-2" >
                            <a href="#default-tab-orders-2" data-toggle="tab" aria-expanded="true">Задание ученикам
                            </a>
                        </li>
                        <li id="tab-orders-3" >
                            <a href="#default-tab-orders-3" data-toggle="tab" aria-expanded="true">Ответ ученика
                            </a>
                        </li>
                    </ul>
                    <div class="tab-pane fade active in" id="default-tab-orders-1">
                        @include('profile.tab-order-1')
                    </div>
                    <div class="tab-pane fade in" id="default-tab-orders-2">
                        @include('profile.tab-order-2')
                    </div>
                    <div class="tab-pane fade in" id="default-tab-orders-3">
                        @include('profile.tab-order-3')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('users.edit',['page' => 'profile'])
@include('users._scripts')
@endsection