<div class="modal fade" id="logoutModal" role="dialog">
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
            <div class="modal-body">
                <p class="text-center" style="font-size: 17px">
                    {{__('¿Realmente desea cerrar sesión?')}}
                </p>
            </div>
            <form action="{{route('logout')}}" method="post">
                @csrf
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-check"></i>
                        {{__(' Salir')}}
                    </button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        <i class="fas fa-times-circle"></i>
                        {{__(' Cancelar')}}
                    </button>
                </div>
            </form>

        </div>

    </div>
</div>
