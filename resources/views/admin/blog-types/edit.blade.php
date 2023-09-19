@php
    use App\Models\Role;
@endphp
<div class="modal" id="modal-dialog-edit" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                </button>
                <h4 class="modal-title">Изменить</h4>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" id="update_role">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-12 ui-sortable">
                            <div class="form-group" >
                                <label for="edit_name">Название</label>
                                <input type="text" name="name" id="edit_name" placeholder="Введите полное Название" class="form-control">
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-12 ui-sortable">
                                <div class="form-group" >
                                    <div class="form-group" >
                                        <label for="edit_key">Ключ</label>
                                        <input type="text" name="key" id="edit_key"   placeholder="Введите полное Ключ" class="form-control" >
                                    </div>
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


