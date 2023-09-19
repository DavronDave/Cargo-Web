<div class="modal" id="modal-dialog-create" style="display: none;" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Создать </h4>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" id="add_region">
                    @csrf
                        <div class="row">
                            <div class="col-md-6 ui-sortable">
                                <div class="form-group" >
                                    <label for="create_name">Название</label>
                                    <input type="text" name="name" id="create_name" placeholder="Введите полное Название" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 ui-sortable">
                                <div class="form-group" >
                                    <label for="create_code">ТН ВЭД Код</label>
                                    <input type="text" name="code" id="create_code" placeholder="Введите ТН ВЭД Код" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 ui-sortable">
                                <div class="form-group" >
                                    <label for="create_position">Позиция</label>
                                    <input type="text" name="position" id="create_position" placeholder="Введите Позиция" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 ui-sortable">
                                <div class="form-group" >
                                    <label for="create_product_category">Категория продукта</label>
                                    <select name="category_id" id="create_product_category" class="form-control">
                                        <option value="">Выбрать...</option>
                                        @foreach ($product_categories as $key => $product_category)
                                            <option value="{{$product_category->id}}">{{$product_category->name}}</option>
                                        @endforeach
                                    </select>
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
