<div class="modal" id="modal-dialog-create" style="display: none;" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Создать </h4>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" id="add_project">
                    @csrf
                        <div class="row">
                            <div class="col-md-6 ui-sortable">
                                <div class="form-group" >
                                    <label for="create_sender_id">Отправитель</label>
                                    <select name="sender_id" id="create_sender_id" class="form-control">
                                        <option value="">Выбрать...</option>
                                        @foreach ($companies as $key => $company)
                                            <option value="{{$company->id}}">{{$company->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 ui-sortable">
                                <div class="form-group" >
                                    <label for="create_receiver_id">Получатель</label>
                                    <select name="receiver_id" id="create_receiver_id" class="form-control">
                                        <option value="">Выбрать...</option>
                                            @foreach ($companies as $key => $company)
                                                <option value="{{$company->id}}">{{$company->name}}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-md-6 ui-sortable">
                            <div class="form-group" >
                                <label for="create_company_contract_id">Договор</label>
                                <select name="company_contract_id" id="create_company_contract_id" class="form-control">
                                    <option value="">Выбрать...</option>
                                    @foreach ($company_contracts as $key => $contract)
                                        <option value="{{$contract->id}}">{{$contract->sender->name}} - {{$contract->receiver->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 ui-sortable">
                            <div class="form-group" >
                                <label for="create_incoterm_id">Инкотермс</label>
                                <select name="incoterm_id" id="create_incoterm_id" class="form-control">
                                    <option value="">Выбрать...</option>
                                        @foreach ($incoterms as $key => $incoterm)
                                            <option value="{{$incoterm->id}}">{{$incoterm->name}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 ui-sortable">
                            <div class="form-group" >
                                <label for="create_name">Название проекта</label>
                                <input type="text" name="name" id="create_name" class="form-control" placeholder="Введите название проекта">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 ui-sortable">
                            <div class="form-group" >
                                <label for="create_phone">Код</label>
                                <input type="text" name="code" id="create_code" placeholder="Введите Код" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 ui-sortable">
                            <div class="form-group" >
                                <label for="create_ready_date">Дата</label>
                                <input type="date" name="ready_date" id="create_ready_date" placeholder="Введите Дата" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 ui-sortable">
                            <div class="form-group" >
                                <label for="create_status">Статус</label>
                                <select name="status" id="create_status" class="form-control">
                                    <option value="">Выбрать...</option>
                                    <option value="1">Jarayonda</option>
                                    <option value="2">Tayyor</option>
                                    <option value="3">Qayta ishlangan</option>
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
