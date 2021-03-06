<div class="container-fluid fixed-top container-errors" style="margin-top: 75px">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="row mx-2">
                <div class="col-xl-3 col-sm-8 col-lg-6 ml-auto shadow alert alert-danger alert-dismissible fade show form-row errors">
                    <div class="col-2" style="display:flex; align-items:center;">
                        <i class="fas fa-exclamation-triangle fa-2x mx-auto"></i>
                    </div>
                    <div class="col-10 pl-3">
                        <h5 class="alert-heading align-middle">
                            <strong>Error</strong>
                        </h5>
                        <p class="text-notification">{{ $error }}</p>
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        @endforeach
    @endif

    @if (session('status') || session('resent'))
        <div class="row mx-2">
            <div class="col-xl-3 col-sm-8 col-lg-6 ml-auto shadow alert alert-success alert-dismissible fade show form-row status">
                <div class="col-1" style="display:flex; align-items:center;">
                    <i class="fas fa-thumbs-up fa-lg mx-auto"></i>
                </div>
                <div class="col-10 pl-3">
                    <h5 class="alert-heading align-middle">
                        <strong>¡Éxito!</strong>
                    </h5>
                    @if (session('status'))
                      <p class="text-notification">{{ session('status') }}</p>
                    @endif
                    @if (session('resent'))
                      <p class="text-notification">{{ __('Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.') }}</p>
                    @endif
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @endif
</div>
