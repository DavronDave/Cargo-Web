<div class="modal" id="modal-dialog-edit" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                </button>
                <h4 class="modal-title">Изменить</h4>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" id="update_language">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-6 ui-sortable">
                            <div class="form-group">
                                <img src="" class="media-object aaaaa badge-square" style="width: 60px;height: 40px;border-radius:10%;" id="output_edit"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ui-sortable">
                            <div class="form-group">
                                <label for="edit_image">Изображение</label>
                                <input type="file" class="form-control" accept="image/*" onchange="loadFile(event, 'output_edit')" id="edit_image" placeholder="Выберите изображение" name="image">
                            </div>
                        </div>
                        <div class="col-md-6 ui-sortable">
                            <div class="form-group">
                                <label for="edit_url">URL</label>
                                <input type="text" name="url" id="edit_url" placeholder="Введите URL" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ui-sortable">
                            <div class="form-group">
                                <label for="edit_name">Название</label>
                                <input type="text" class="form-control" id="edit_name" placeholder="Введите полное имя" name="name" value ="{{old('name')}}">
                            </div>
                        </div>
                        <div class="col-md-6 ui-sortable">
                            <div class="form-group" >
                                <label for="edit_status">Статус</label>
                                <select class="form-control" name="status" id="edit_status">
                                    <option value="">Выберите...</option>
                                    <option value="1" @if($status === 1) selected @endif>Активный</option>
                                    <option value="2" @if($status === 2) selected @endif>Не активный</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- begin col-6 -->
                        <div class="col-md-6 ui-sortable">
                            <div class="form-group">
                            <label for="edit_default">По умолчанию</label>
                                <input type="hidden" name="default" value="2"><br>
                                <input type="checkbox" value="1" @if($default === 1) checked @endif class="form-control col-md-2 pull-left" id="edit_default"  name="default" data-render="switchery" data-theme="default">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="edit_id" name="language_id">
                    </div>
                    <div class="modal-footer">
                        <a href="javascript:;" class="btn btn-sm btn-danger pull-left"
                           data-dismiss="modal">Закрыть</a>
                        <button value="@if(isset($language)) {{$language->id}} @endif" type="submit" class="btn btn-sm btn-primary">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


