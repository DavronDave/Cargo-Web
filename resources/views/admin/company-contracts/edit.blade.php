<div class="modal" id="modal-dialog-edit" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                </button>
                <h4 class="modal-title">Изменить</h4>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" id="update_contract">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-6 ui-sortable">
                            <div class="form-group" >
                                <label for="edit_sender_id">Отправитель</label>
                                <select name="sender_id" id="edit_sender_id" class="form-control">
                                    <option value="">Выбрать...</option>
                                    @foreach ($sender_companies as $key => $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 ui-sortable">
                            <div class="form-group" >
                                <label for="edit_receiver_id">Получатель</label>
                                <select name="receiver_id" id="edit_receiver_id" class="form-control">
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
                                <label for="edit_date">Дата</label>
                                {{-- <input type="date" name="from_date" value="{{$company->from_date}}" id="edit_date" placeholder="Введите Адрес" class="form-control"> --}}
                            </div>
                        </div>
                        <div class="col-md-5 ui-sortable">
                            <div class="form-group" >
                                <label for="edit_code">Контактный номер </label>
                                <input type="text" name="code" id="edit_code" placeholder="Введите Адрес" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2 ui-sortable">
                            <div class="form-group" >
                                <label for="edit_status">Статус</label>
                                {{-- <input type="checkbox" @if($company->status==1) checked @endif name="status" id="edit_status" style="width: 50px; margin: 0px" class="form-control"> --}}
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


