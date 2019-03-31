<div class="modal fade" id="modalEmail" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-email-request" role="document">
        <div class="modal-content">
            <img class="mx-auto img-fluid img-request-link" src="{{asset('images/question.png')}}" alt="" width="150px">
            <div class="modal-header">
                <div class="text-center col-12">
                    <h5 class="modal-title">{{__('Restablecer contraseña')}}</h5>
                </div>
            </div>
            <form action="{{ route('password.email') }}" method="post">
              @csrf
                <div class="modal-body">
                  <p class="text-center">{{__('Para restablecer su contraseña, ingrese el correo electrónico asociado a su cuenta.')}}</p>
                  <input type="email" name="email" class="form-control shadow" value="{{old('email')}}" required placeholder="Ingrese email">
                </div>
                <div class="modal-footer">
                  <button type="submit" name="button" class="btn btn-success mr-auto">
                    <i class="fas fa-check"></i>
                    {{__(' Aceptar')}}
                  </button>
                  <button type="button" data-dismiss="modal" class="btn btn-danger">
                    <i class="fa fa-times"></i>
                    {{__(' Cancelar')}}
                  </button>
                </div>
            </form>
        </div>
    </div>
</div>
