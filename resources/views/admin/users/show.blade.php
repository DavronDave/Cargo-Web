<div class="modal-content" tabindex="-1">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h5><b>{{$user->full_name}}</h5>
    </div>
    <div class="modal-body">
        <div class="panel-body">
            <table class="table table-bordered" style="margin: 10px;">
                <tbody>
                    <tr>
                        <td rowspan="4">
                            <img src="{{($user->image) ? asset($user->image) : '/storage/users/no-user.png'}}">
                        </td>
                    </tr>
                    <tr>
                        <th>Логин</th>
                        <td colspan="2">{{$user->username}}</td>
                    </tr>
                    <tr>
                        <th>Роль</th>
                        <td colspan="2">{{$user->role->key}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal-footer">
        <a href="javascript:;" class="btn btn-sm btn-danger pull-left"
           data-dismiss="modal">Закрыть
        </a>
        <a href="#modal-dialog-edit"  class=" btn btn-sm btn-info" onclick="getUserData('{{$user->id}}')"
           data-toggle="modal" >Изменить
        </a>
    </div>
</div>
