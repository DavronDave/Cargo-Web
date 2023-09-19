<div class="modal" id="modal-dialog-create" style="display: none;" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Создать </h4>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" id="add_person">
                    @csrf
                        <div class="row">
                            <div class="col-md-12 ui-sortable">
                                <div class="form-group" >
                                    <label for="create_full_name">Имя отправителя</label>
                                    <input type="text" name="full_name" id="create_full_name" placeholder="Введите полное Имя отправителя" class="form-control">
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
