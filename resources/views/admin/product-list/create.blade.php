<div class="modal" id="modal-dialog-create" style="display: none;" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Создать </h4>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" id="add_product_list">
                    @csrf
                        <div class="row">
                            <div class="col-md-6 ui-sortable">
                                <div class="form-group" >
                                    <label for="create_name">Название</label>
                                    <select name="product_id" id="create_incoterm_id" class="form-control" style="width: 220px">
                                        <option value="">Выбрать...</option>
                                        @foreach ($products as $key => $product)
                                            <option value="{{$product->id}}">{{$product->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 ui-sortable">
                                <div class="form-group" >
                                    <label for="create_quantity">Количество</label>
                                    <input type="number" name="quantity" id="create_quantity" placeholder="Введите Количество" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-3 ui-sortable">
                                <div class="form-group" >
                                    <label for="create_price">Цена</label>
                                    <input type="number" name="price" id="create_price" placeholder="Введите Цена" class="form-control" required>
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
