<div class="modal" id="modal-dialog-create" style="display: none;" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Создать </h4>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" id="add_company">
                    @csrf
                        <div class="row">
                            <div class="col-md-6 ui-sortable">
                                <div class="form-group" >
                                    <label for="create_name">Название</label>
                                    <input type="text" name="name" id="create_name" placeholder="Введите Название" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 ui-sortable">
                                <div class="form-group" >
                                    <label for="create_country_id">Страны</label>
                                    <select name="country_id" id="create_country_id" class="form-control">
                                        <option value="">Выбрать...</option>
                                            @foreach ($countries as $key => $country)
                                                <option value="{{$country->id}}">{{$country->name}}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-md-6 ui-sortable">
                            <div class="form-group" >
                                <label for="create_address">Адрес</label>
                                <input type="text" name="address" id="create_address" placeholder="Введите Адрес" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 ui-sortable">
                            <div class="form-group" >
                                <label for="create_region_id">Регионы</label>
                                <select name="region_id" id="create_region_id" class="form-control">
                                    <option value="">Выбрать...</option>
                                        @foreach ($regions as $key => $region)
                                            <option value="{{$region->id}}">{{$region->name}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ui-sortable">
                            <div class="form-group" >
                                <label for="create_phone">Телефон</label>
                                <input type="text" name="phone" id="create_phone" placeholder="Введите Телефон" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 ui-sortable">
                            <div class="form-group" >
                                <label for="create_district_id">Районы</label>
                                <select name="district_id" id="create_district_id" class="form-control">
                                    <option value="">Выбрать...</option>
                                    @foreach ($districts as $key => $district)
                                        <option value="{{$district->id}}">{{$district->name}}</option>
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
