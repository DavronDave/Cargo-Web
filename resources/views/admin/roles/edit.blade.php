<div class="modal" id="modal-dialog-edit" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                </button>
                <h4 class="modal-title">Изменить</h4>
            </div>
            <div class="modal-body">
                <ul class="nav nav-pills" style="background: #ffffff;" id="edit_error_message">
                    @foreach ($languages as $language)
                    <li id="tab-orders-{{$language->id+1}}" class="{{ $language->default == 1 ? 'active' : '' }}">
                        <a href="#default-edit-tab-tab-orders-{{$language->id+1}}" data-toggle="tab" aria-expanded="true">{{$language->name}}
                        </a>
                    </li>
                    @endforeach
                </ul>
                <form method="POST" enctype="multipart/form-data" id="update_role">
                    @method('PUT')
                    @csrf
                    <div class="tab-content">
                        @foreach ($languages as $language)
                        <div class="tab-pane fade {{ $language->default == 1 ? 'active' : '' }} in" id="default-edit-tab-tab-orders-{{$language->id+1}}">
                            <div class="row">
                                <div class="col-md-12 ui-sortable">
                                    <div class="form-group" >
                                        <label for="edit_name">Заголовок({{$language->name}}) </label>
                                        <input type="text" id="edit_name_{{$language->url}}" name="name[{{$language->url}}]"
                                         value ="{{old('name')}}" placeholder="Введите полное Заголовок" class="form-control edit_error">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="row">
                            <div class="col-md-12 ui-sortable">
                                <div class="form-group" >
                                    <label for="edit_status">Статус </label>
                                    <select name="status" id="edit_status" class="form-control" >
                                        <option value="">Выбрать...</option>
                                        <option value="1">активный</option>
                                        <option value="0">не активный</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="edit_id" name="role_id">
                    </div>
                    <div class="modal-footer">
                        <a href="javascript:;" class="btn btn-sm btn-danger pull-left"
                           data-dismiss="modal">Закрыть</a>
                        <button value="@if(isset($role)) {{$role->id}} @endif" type="submit" class="btn btn-sm btn-primary">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


