<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Роль </h4>
    </div>
    <div class="modal-body">
        <div class="panel-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Значение</th>
                        <th>Ключ</th>
                    </tr>
                    <tr>
                        <td>{{$role->name}}</td>
                        <td>{{$role->key}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal-footer">
        <a href="javascript:;" class="btn btn-sm btn-danger pull-left"
            data-dismiss="modal">Закрыть</a>
        <a href="#modal-dialog-edit"
            class=" btn btn-sm btn-info edit_seo"
            data-toggle="modal" onclick="getRoleData('{{$role->id}}')">Изменить
        </a>
    </div>
</div>
