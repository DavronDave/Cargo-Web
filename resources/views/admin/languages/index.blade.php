@extends('admin.layouts.app')
@section('languages')
    active
@endsection
@php
$status = request()->query('status');
$default = request()->query('default');
$url = request()->query('url');
@endphp
@section('content')
<div id="content" class="content">
	<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-left">
		<li><a href="{{route('admin.dashboard')}}">Главная</a></li>
		<li class="active">Языки</li>
	</ol>
	<div class="row">
        <div class="col-md-12 ui-sortable">
            <div class="panel panel-inverse">
                <a href="#modal-dialog-create" class="btn btn-success pull-right btn-xs" style="margin: 8px !important"
                   data-toggle="modal" data-target="#modal-dialog-create">Добавить <i class="fa fa-plus"></i>
                </a>
                <div class="panel-heading">
                    <h4 class="panel-title">Список</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="data-table" class="table table-striped table-bordered ">
                                <thead>
                                <tr role="row">
                                    <th style="width: 20px; padding: 30px 0; text-align: center" rowspan="2">№</th>
									<th style="padding: 30px 0; text-align: center" rowspan="2">Изображение</th>
                                    <th>@sortablelink('name', 'Заголовок')</th>
                                    <th>@sortablelink('url', 'URL-адрес')</th>
                                    <th>@sortablelink('status', 'Статус')</th>
                                    <th>@sortablelink('default', 'По умолчанию')</th>
                                    <th style="width: 70px; text-align: center"><b>Действия</b></th>
                                </tr>
                                <tr>
                                    <form class="form-inline" method="GET">
                                        <td>
                                            <input style="width: 100%;" type="text" class="form-control" id="filter"
                                                   name="name" placeholder="Заголовок..." value="{{request('name')}}">
                                        </td>
										<td>
                                        <input style="width: 100%;" type="text" class="form-control" id="filter"
                                                   name="url" placeholder="URL-адрес..." value="{{request('url')}}">
                                        </td>
										<td>
											<select class="form-control" name="status" id="status" style="width: 100%;" >
												<option value="">Выберите...</option>
												<option value="1" @if($status == 1) selected @endif>Активный</option>
												<option value="2" @if(isset($status) && $status == 2) selected @endif>Не активный</option>
											</select>
										</td>
										<td>
											<select class="form-control" name="default" id="status" style="width: 100%;" >
												<option value="">Выберите...
												</option>
												<option value="1" @if($default == 1) selected @endif>Да
												</option>
												<option value="2" @if(isset($default) && $default == 2) selected @endif>Нет</option>
											</select>
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
                                @foreach($languages as $language)
                                    <tr>
                                        <td>{{($languages->currentpage()-1)*$languages->perpage() +($loop->index+1)}}</td>
										<td class="image-profile" style="padding: 5px 15px !important;overflow: hidden;">
											<img src="{{($language->image) ? asset($language->image) : '/images/no-image.png'}}" class="img-round img-responsive " style="object-fit: cover; border-radius: 3px !important;width:70px; height:40px;">
										</td>
                                        <td>{{$language->name}}</td>
                                        <td>{{$language->url}}</td>
                                        <td>{{$language->getStatus()}}</td>
                                        <td>
											<p class="m-b-10">
												<input type="checkbox" onchange="myFunction({{$language->id}})" data-render="switchery" data-theme="default" @if($language->default == 1)checked @endif/>
											</p>
										</td>
                                        <td>
                                            <a href="#modal-dialog-show" class="btn btn-xs btn-success"
                                                onclick="showLanguage({{$language->id}})"
                                                title="Показать">
                                                <i class="fa  fa-eye"></i>
                                            </a>
                                            <a href="#modal-dialog-edit" class=" btn btn-xs btn-info" title="Изменить">
                                                <i class="fa fa-pencil-square-o" onclick="getLanguageData({{$language->id}})"></i>
                                            </a>
                                            @if($language->default != 1)
                                            <a href="#modal-dialog-delete{{$language->id}}"  class="btn btn-xs btn-danger"
                                               data-toggle="modal" title="Удалить">
                                               <i class="fa  fa-trash-o"></i>
                                            </a>
                                            @endif
                                        </td>
                                    </tr>
                                    @include('admin.languages.delete')
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="dataTables_paginate paging_simple_numbers" id="data-table_paginate">
                                <ul class="pagination pull-right">
                                    <li>
                                        {{$languages->links()}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.languages.edit')
<div class="modal" id="modal-dialog-show">
	<div class="modal-dialog">
	</div>
</div>
@include('admin.languages.create')
@include('admin.languages._scripts')
@endsection
