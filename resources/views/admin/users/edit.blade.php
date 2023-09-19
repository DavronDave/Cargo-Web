<div class="modal" id="modal-dialog-edit" style="display: none;">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Изменить пользователь</h4>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" id="update_user">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="avatar">Аватар</label><br>
                                <img src="{{asset('admin-assets/img/user.png')}}" alt=""  id="output_edit" style="border-radius: 1em;width:120px; height:125px;"><br><br>
                                <input type="file" name="image" id="edit_image" class="form-control" accept="image/*" onchange="loadFile(event, 'output_edit')" placeholder="Введите Аватар">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="edit_full_name">ФИО</label><br>
                                <input type="text" class="form-control" id="edit_full_name" placeholder="Введите  ФИО" name="full_name" value ="{{old('full_name')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="edit_username">Имя пользователя</label><br>
                                <input type="text" class="form-control" id="edit_username" placeholder="Введите Имя пользователя" name="username" value ="{{old('username')}}">
                            </div>
                        </div>
                        @if( URL::current() == route('admin.profile.index'))
                        <input type="hidden" class="form-control" id="edit_role_id" name="role_id">
                        @elseif(URL::current() != route('admin.profile.index'))
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="edit_role_id">Роль</label>
                                    <select name="role_id" id="edit_role_id" class="form-control">
                                        <option value="">Выбрать...</option>
                                        @foreach ($roles as $key => $role)
                                            <option value="{{$role->id}}">{{$role->key}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="edit_new_password">Новый пароль</label>
                                <input type="password" class="form-control" id="edit_new_password" placeholder="Введите Пароль" name="password" value ="{{old('password')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="edit_password_confirm">Подтверждение пароля</label>
                                <input type="password" class="form-control" id="edit_password_confirm" placeholder="Введите Подтверждение пароля" name="password_confirm" value ="{{old('password')}}">
                            </div>
                        </div>
                    </div>

                    <input type="hidden" class="form-control" id="edit_id" name="user_id">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="javascript:;" class="btn btn-sm btn-danger pull-left"
                            data-dismiss="modal">Закрыть</a>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-sm btn-primary pull-right">Создать</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
