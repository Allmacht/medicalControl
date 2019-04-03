<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header alert alert-danger">
                <h5 class="modal-title">
                    <strong>
                        <i class="fas fa-times"></i>
                        {{__(' Atención')}}
                    </strong>
                </h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <form action="{{route('buildings.delete')}}" method="post">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="code_delete" id="code_delete">
                    <p class="text-center">{{__('¿Realmente desea eliminar este edificio?')}}</p>
                    <p class="text-center">
                        <strong>{{__('Esta acción no se puede revertir')}}</strong>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-check"></i>
                        {{__(' Eliminar')}}
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
