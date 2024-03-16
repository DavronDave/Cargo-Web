@extends('admin.layouts.app')
@section('roles')
    active
@endsection
@section('content')
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-left">
            <li><a href="{{route('admin.dashboard')}}">Главная</a></li>
            <li class="active">Роли</li>
        </ol>
        <div class="row">
            <div class="col-md-12 ui-sortable">
                <div class="panel panel-inverse">
                    <div class="panel-heading" style="height: 35px">
                        <h4 class="panel-title">
                        </h4>
                        <div class="panel-heading-btn">
{{--                            <a href="/personal/role/index" class="m-l-10 btn btn-xs btn-success"><i class="fa fa-arrow-left"></i> {{__('action.back')}}</a>--}}
                            <a href="javascript:" class="m-l-10 btn btn-xs btn-icon btn-circle btn-warning"
                               data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="panel panel-default panel-with-tabs" data-sortable-id="ui-unlimited-tabs-2">
                                    <div class="panel-heading p-0">
                                        <div class="tab-overflow">
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item prev-button"><a href="javascript:" data-click="prev-tab"
                                                                                    class="text-inverse nav-link"><i
                                                            class="fa fa-arrow-left"></i></a></li>
                                                @foreach($modules as $item)
                                                    <li class="nav-item"><a href="#nav-tab-{{$item->id}}" data-toggle="tab"
                                                                            class="nav-link {{$loop->index == 0 ?'active':''}}">{{$item->key}}</a>
                                                    </li>
                                                @endforeach
                                                <li class="nav-item next-button"><a href="javascript:" data-click="next-tab"
                                                                                    class="text-inverse nav-link"><i
                                                            class="fa fa-arrow-right"></i></a></li>
                                            </ul>
                                        </div>
                                        {{--                        <div class="panel-heading-btn mr-2 ml-2 d-flex">--}}
                                        {{--                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-inverse" data-click="panel-expand"><i class="fa fa-expand"></i></a>--}}
                                        {{--                        </div>--}}
                                    </div>
                                    <div class="panel-body tab-content">
                                        @foreach($modules as $item)
                                            <div class="tab-pane fade {{$item->id==0?'active show':''}}" id="nav-tab-{{$item->id}}">
                                                @foreach($item->permissions as $per)
                                                    <div class="form-group row">
                                                        <label for="{{$per->key}}" class="col-sm-10 col-form-label">
                                                            <h5>{{ $per->key}} </h5></label>
                                                        <div class="col-sm-2">
                                                            <div class="switcher">
                                                                <input id="{{$per->key}}" type="checkbox"
                                                                       onclick="hClick({{$per->id}},{{$role->id}},this)" {{ $per->valueByRole($role->id) ? 'checked' : ''}} />
                                                                <label for="{{$per->key}}"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

    <link href="/admin-assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="/admin-assets/plugins/gritter/js/jquery.gritter.js"></script>
    <script>
            function hClick(action_id, role_id, checkbox) {
                let data = {
                    action_id: action_id,
                    role_id: role_id,
                    value: checkbox.checked,
                    _token: "{{csrf_token()}}"
                }
                // console.log(data.value)
                let url = "{{ route('admin.role.change') }}";
                $.post(url, data,
                    function (returnedData) {
                        // console.log("value is " + data.value)
                        $.gritter.add({
                            title: 'Info',
                            text: returnedData
                        });
                    }).fail(function (error) {
                    $.gritter.add({
                        title: 'Error',
                        text: JSON.parse(error.responseText).message
                    });
                });
            }
    </script>
