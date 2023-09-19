<div class="modal" id="modal-dialog-create" style="display: none;" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Создать </h4>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" id="add_productCategories">
                    @csrf
                        <div class="row">
                            <div class="col-md-4 ui-sortable">
                                <div class="form-group" >
                                    <label for="create_full_name">Фамилия Имя</label>
                                    <input type="text" name="full_name" id="create_full_name" placeholder="Введите Фамилия Имя" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 ui-sortable">
                                <div class="form-group" >
                                    <label for="create_passport">Пасспорт</label>
                                    <input type="text" name="passport" id="create_passport" placeholder="Введите Пасспорт" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 ui-sortable">
                                <div class="form-group" >
                                    <label for="create_birthdate">Дата рождения</label>
{{--                                    <input type="date" name="birthdate" id="create_birthdate"  class="form-control">--}}
{{--                                    <input type="date" data-date="" data-date-format="DD/MM/YYYY" value="2020-08-29">--}}
{{--                                    <input type="text" name="birthdate" id="create_birthdate" placeholder="Введите Дата рождения" class="form-control" oninput="formatDate(this)">--}}
                                    <input data-mask='dd/mm/yyyy' name="birthdate" id="create_birthdate" placeholder="dd/mm/yyyy" class="birthdate form-control">
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
                                    <label for="create_address_id">Адрес</label>
                                    <select name="address_id" id="create_address_id" class="form-control">
                                        <option value="">Выбрать...</option>
                                        @foreach ($regions as $key => $region)
                                            <option value="{{$region->id}}">{{$region->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
{{--                            <div class="col-md-4 ui-sortable">--}}
{{--                                <div class="form-group" >--}}
{{--                                    <label for="create_driver_id">Водитель</label>--}}
{{--                                    <select name="driver_id" id="create_driver_id" class="form-control">--}}
{{--                                        <option value="">Выбрать...</option>--}}
{{--                                        --}}{{--                                        @foreach ($companies as $key => $company)--}}
{{--                                        --}}{{--                                            <option value="{{$company->id}}">{{$company->name}}</option>--}}
{{--                                        --}}{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
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

<style>

</style>
