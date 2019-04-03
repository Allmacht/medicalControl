<div class="modal fade" id="modalActivate" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header alert alert-success">
                <h5 class="modal-title">
                    <strong>
                        <i class="fas fa-check"></i>
                        {{__(' Activar')}}
                    </strong>
                </h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <form action="{{route('buildings.activate')}}" method="post">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="code_activate" id="code_activate">
                    <p class="text-center">{{__('¿Realmente desea activar este edificio?')}}</p>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-success">
                    <i class="fas fa-check"></i>
                    {{__(' Activar')}}
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
