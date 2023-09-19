<div class="modal" id="modal-dialog-create" style="display: none;" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Создать </h4>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" id="add_country">
                    @csrf
                        <div class="row">
                            <div class="col-md-12 ui-sortable">
                                <div class="form-group" >
                                    <label for="create_name">Название</label>
                                    <input type="text" name="name" id="create_name" placeholder="Введите полное Название" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ui-sortable">
                                <div class="form-group" >
                                    <label for="create_emblem">Герб</label> <br>
{{--                                    <input type="text" name="key" id="create_key" placeholder="Введите полное Ключ" class="form-control">--}}
                                    <img src="{{asset('admin-assets/img/user.png')}}" alt=""  id="output_create" style="border-radius: 1em;width:160px; height:165px; margin-left: -1px;">
                                    <input type="file" name="emblem" id="create_image" class="form-control" accept="image/*" onchange="loadFile(event, 'output_create')" placeholder="Введите Аватар">
                                </div>
                            </div>
                        </div>
                    <div class="modal-footer">
                        <a href="javascript:;" class="btn btn-sm btn-danger pull-left"
                            data-dismiss="modal">Закрыть</a>
                        <button  type="submit" class="btn btn-sm btn-primary">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
