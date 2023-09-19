<div class="modal" id="about-modal-create" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Создать </h4>
            </div>
            <div class="modal-body">
                {{-- <ul class="nav nav-pills" style="background: #ffffff;" id="error_message">
                     @foreach (getAllLanguage() as $language)
                     <li id="tab-orders-{{$language->id+1}}" class="{{ $language->default == 1 ? 'active' : '' }}">
                         <a href="#default-tab-orders-{{$language->id+1}}" data-toggle="tab" aria-expanded="true">{{$language->name}}
                         </a>
                     </li>
                     @endforeach
                 </ul>
                 <form enctype="multipart/form-data" id="add_category">
                     @csrf
                     <div class="tab-content">
                         @foreach ($languages as $language)
                         <div class="tab-pane fade {{ $language->default == 1 ? 'active' : '' }} in" id="default-tab-orders-{{$language->id+1}}">
                             <div class="row">
                                 <div class="col-md-12 ui-sortable">
                                     <div class="form-group" >
                                         <label for="create_name">Заголовок({{$language->name}}) </label>
                                         <input type="text" id="create_name_{{$language->url}}" name="name[{{$language->url}}]" value ="{{old('name')}}" placeholder="Введите полное Заголовок" class="form-control create_error">
                                     </div>
                                 </div>
                             </div>
                         </div>
                         @endforeach
                         <div class="row">
                             <div class="col-md-12 ui-sortable">
                                 <div class="form-group" >
                                     <label for="create_key">Ключ </label>
                                     <input type="text" name="key" value="{{old('key')}}" placeholder="Введите полное Ключ" class="form-control" id="create_key">
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="modal-footer">
                         <a href="javascript:;" class="btn btn-sm btn-danger pull-left"
                             data-dismiss="modal">Закрыть</a>
                         <button type="submit" class="btn btn-sm btn-primary">Сохранить</button>
                     </div>
                 </form>--}}
            </div>
        </div>
    </div>
</div>
