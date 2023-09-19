<div class="modal fade" id="modal-dialog-delete{{$incoterm->id}}" style="display: none;">
    <div class="modal-dialog">
        <form action="{{route('admin.incoterms.destroy', ['incoterm' => $incoterm->id])}}" method="post" >
            @method('DELETE')
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Подтвердите действие</h4>
                </div>
                <div class="modal-body">
                    Вы уверены что хотите удалить этого элемент?
                </div>
                <div class="modal-footer">
                    <a href="javascript:;" class="btn btn-sm btn-default pull-left" data-dismiss="modal">Отмена</a>
                    <button type="submit" class="btn btn-sm btn-success">Удалить</button>
                </div>
            </div>
        </form>
    </div>
</div>
