<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{__('Medical Control')}}</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="icon" href="{{asset('favicon.ico')}}" />
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
    <link rel="stylesheet" href="{{asset('css/welcome.css')}}">
    <script src="{{asset('js/fontawesome.js')}}"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-style sticky-top py-3">
        <a href="#" class="navbar-brand brand text-muted logo">
            <img class="" src="{{asset('images/life-insurance.png')}}" width="30px" alt="">
            <span class="name-logo px-1 py-1">
                <strong>{{__('M')}}</strong>{{__('edical')}}<strong>{{__(' C')}}</strong>{{__('ontrol')}}
            </span>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#welcome-collapse" aria-controls="welcome-collapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="welcome-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a href="{{route('login')}}" class="btn btn-outline-secondary btn-login py-auto">
                    <i class="fas fa-user-circle icon-btn-login"></i>
                    {{__('Iniciar sesión')}}
                  </a>
                </li>
            </ul>
        </div>
    </nav>

    <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
</body>

</html>
