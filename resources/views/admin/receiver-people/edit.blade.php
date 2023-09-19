<div class="modal" id="modal-dialog-edit" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                </button>
                <h4 class="modal-title">Изменить</h4>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" id="update_productCategory">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-4 ui-sortable">
                            <div class="form-group" >
                                <label for="edit_full_name">Фамилия Имя</label>
                                <input type="text" name="full_name" id="edit_full_name" placeholder="Введите Фамилия Имя" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 ui-sortable">
                            <div class="form-group" >
                                <label for="edit_passport">Пасспорт</label>
                                <input type="text" name="passport" id="edit_passport" placeholder="Введите Пасспорт" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 ui-sortable">
                            <div class="form-group" >
                                <label for="edit_birthdate">Дата рождения</label>
                                <input type="date" name="birthdate" id="edit_birthdate" placeholder="Введите Дата рождения" class="form-control">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6 ui-sortable">
                            <div class="form-group" >
                                <label for="edit_phone">Телефон</label>
                                <input type="text" name="phone" id="edit_phone" placeholder="Введите Телефон" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 ui-sortable">
                            <div class="form-group" >
                                <label for="edit_address_id">Адрес</label>
                                <select name="address_id" id="edit_address_id" class="form-control">
                                    <option value="">Выбрать...</option>
                                    @foreach ($regions as $key => $region)
                                        <option value="{{$region->id}}">{{$region->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="edit_id" name="id">
                        <input type="hidden" class="form-control" id="edit_driver_id" name="driver_id">
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


