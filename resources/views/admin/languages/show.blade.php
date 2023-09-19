<div class="modal-content" tabindex="-1">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"aria-hidden="true">×
        </button>
        <h5><b>{{$language->name}}</b></h5>
    </div>
    <div class="modal-body">
        <div class="panel-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td rowspan="10" class="image-profile" >
                            <img src="{{asset($language->image)}}" class="img-round img-responsive " style="width:150px; height:100px; overflow: hidden;border-radius:10%;">
                        </td>
                    </tr>
                    <tr>
                        <th>Статус</th>
                        <td colspan="2">{{$language->getStatus()}}</td>
                    </tr>
                    <tr>
                        <th>URL-адрес</th>
                        <td colspan="2">{{$language->url}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal-footer">
        <a href="javascript:;" class="btn btn-sm btn-danger pull-left"
            data-dismiss="modal">Закрыть</a>
        <a href="#modal-dialog-edit"
            class=" btn btn-sm btn-info edit_seo"
            data-toggle="modal" onclick="getLanguageData('{{$language->id}}')">Изменить
        </a>
    </div>
</div>




