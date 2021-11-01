<!-- MESSAGE MODAL -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="example-Modal3">İşlem Ekle</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <form>

                <div class="modal-body">
                    <div class="form-group">
                    <input hidden value="{{$orders->id }}" id="orderId" name="orderId"/>
                    </div>
                    <div class="form-group">
                        <label for="statusId" class="form-control-label">Durumu:</label>
                        <select name="statusId" id="statusId" class="form-control select2 custom-select">>
                            @foreach ($status as $item)
                                @if ($item->id == $orders->status->id)
                                    <option value="{{ $item->id }}" selected>{{ $item->statusName }}</option>
                                @else
                                    <option value="{{ $item->id }}">{{ $item->statusName }}</option>

                                @endif
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="processNote" class="form-control-label">İşlem Notu:</label>
                        <textarea class="form-control" name="processNote" id="processNote"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <a  class="btn btn-danger" data-dismiss="modal">Kapat</a>
                    <a  class="btn btn-islem btn-success">Ekle</a>
                </div>
            </form>


        </div>
    </div>
</div>
<!-- MESSAGE MODAL CLOSED -->
