<div class="modal" id="modal-dialog-create" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Создать нового пользователя</h4>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" id="add_user">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <img src="{{asset('admin-assets/img/user.png')}}" alt=""  id="output_create" style="border-radius: 1em;width:160px; height:165px; margin-left: -1px;">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="create_full_name">ФИО</label><br>
                                <input type="text" class="form-control" id="create_full_name" placeholder="Введите  ФИО" name="full_name" value ="{{old('full_name')}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="create_username">Имя пользователя</label><br>
                                <input type="text" class="form-control" id="create_username" placeholder="Введите Имя пользователя" name="username" value ="{{old('username')}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="create_password">Пароль</label>
                                <input type="password" class="form-control" id="create_password" placeholder="Введите Пароль" name="password" value ="{{old('password')}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="create_image">Аватар</label>
                                <input type="file" name="image" id="create_image" class="form-control" accept="image/*" onchange="loadFile(event, 'output_create')" placeholder="Введите Аватар">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="create_role_id">Роль</label>
                                <select name="role_id" id="create_role_id" class="form-control">
                                    <option value="">Выбрать...</option>
                                    @foreach ($roles as $key => $role)
                                        <option value="{{$role->id}}">{{$role->key}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
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
