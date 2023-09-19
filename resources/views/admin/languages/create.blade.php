<div class="modal" id="modal-dialog-create" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Создать </h4>
            </div>
            <div class="modal-body">
                <form  method="POST" enctype="multipart/form-data" id="add_language">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 ui-sortable">
                            <div class="form-group">
                                <img src="{{ asset('admin-assets/img/no-image.png') }}" class="media-object badge-square" style="width: 60px;height: 40px; border-radius:10%;" id="output_create" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ui-sortable">
                            <div class="form-group">
                            <label for="create_image">Изображение</label>
                                <input type="file" class="form-control" accept="image/*" onchange="loadFile(event, 'output_create')" id="create_image" placeholder="Выберите изображение" name="image" value ="{{old('image') ?? $language->image}}">
                            </div>
                        </div>
                        <div class="col-md-6 ui-sortable">
                            <div class="form-group" >
                                <label for="create_status">Статус</label>
                                <select class="form-control" name="status" id="create_status">
                                    <option value="">Выберите...</option>
                                    <option value="1">Активный</option>
                                    <option value="2">Не активный</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ui-sortable">
                            <div class="form-group">
                                <label for="create_name">Название</label>
                                <input type="text" class="form-control" id="create_name" placeholder="Введите полное имя" name="name" value ="{{old('name')}}">
                            </div>
                        </div>
                        <div class="col-md-6 ui-sortable">
                            <div class="form-group">
                                <label for="create_url">URL</label>
                                <input type="text" name="url" id="create_url" placeholder="Введите полное URL" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ui-sortable">
                            <div class="form-group">
                                <label for="create_default">По умолчанию</label><br>
                                <input type="checkbox" value="1"  id="create_default"  name="default" data-render="switchery" data-theme="default">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="javascript:;" class="btn btn-sm btn-danger pull-left"
                           data-dismiss="modal">Закрыть</a>
                        <button type="submit" class="btn btn-sm btn-primary">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
