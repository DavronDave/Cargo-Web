<div class="modal" id="modal-dialog-edit" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                </button>
                <h4 class="modal-title">Изменить</h4>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" id="update_region">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-6 ui-sortable">
                            <div class="form-group" >
                                <label for="edit_name">Название</label>
                                <input type="text" name="name" id="edit_name" placeholder="Введите полное Название" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 ui-sortable">
                            <div class="form-group" >
                                <label for="edit_code">ТН ВЭД Код</label>
                                <input type="text" name="code" id="edit_code" placeholder="Введите ТН ВЭД Код" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ui-sortable">
                            <div class="form-group" >
                                <label for="edit_position">Позиция</label>
                                <input type="text" name="position" id="edit_position" placeholder="Введите Позиция" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 ui-sortable">
                            <div class="form-group" >
                                <label for="edit_category">Категория продукта</label>
                                <select name="category_id" id="edit_category" class="form-control">
                                    <option value="">Выбрать...</option>
                                    @foreach ($product_categories as $key => $product_category)
                                        <option value="{{$product_category->id}}" @if($product_category->id == $product->category_id) selected @endif>{{$product_category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="edit_id" name="id">
                    </div>
                    <div class="modal-footer">
                        <a href="javascript:;" class="btn btn-sm btn-danger pull-left"
                           data-dismiss="modal">Закрыть</a>
                        <button value="@if(isset($country)) {{$country->id}} @endif" type="submit" class="btn btn-sm btn-primary">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


