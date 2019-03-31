<div class="modal fade" id="modalDisable" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header alert alert-danger">
                <h5 class="modal-title">
                    <strong>
                        <i class="fas fa-times-circle"></i>
                        {{__(' Atención')}}
                    </strong>
                </h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <form action="{{route('buildings.disable')}}" method="post">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="code_id" id="code_id">
                    <p class="text-center">{{__('¿Realmente desea desactivar este edificio?')}}</p>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-success">
                    <i class="fas fa-check"></i>
                    {{__(' Aceptar')}}
                  </button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">
                    <i class="fas fa-times"></i>
                    {{__(' Cancelar')}}
                  </button>
                </div>
            </form>
        </div>
    </div>
</div>
