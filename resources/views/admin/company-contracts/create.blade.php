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
                                    <label for="create_sender_id">Отправитель</label>
                                    <select name="sender_id" id="create_sender_id" class="form-control">
                                        <option value="">Выбрать...</option>
                                        @foreach ($sender_companies as $key => $country)
                                            <option value="{{$country->id}}">{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 ui-sortable">
                                <div class="form-group" >
                                    <label for="create_receiver_id">Получатель</label>
                                    <select name="receiver_id" id="create_receiver_id" class="form-control">
                                        <option value="">Выбрать...</option>
                                            @foreach ($receiver_companies as $key => $country)
                                                <option value="{{$country->id}}">{{$country->name}}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-md-5 ui-sortable">
                            <div class="form-group" >
                                <label for="create_date">Дата</label>
                                <input type="date" name="from_date" id="create_date" placeholder="Введите Адрес" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-5 ui-sortable">
                            <div class="form-group" >
                                <label for="create_code">Контактный номер </label>
                                <input type="text" name="code" id="create_code" placeholder="Введите Адрес" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2 ui-sortable">
                            <div class="form-group" >
                                <label for="create_status">Статус</label>
                                <input type="checkbox" name="status" id="create_status" style="width: 50px; margin: 0px" class="form-control">
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
