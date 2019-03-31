<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Medical Control')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="icon" href="{{asset('favicon.ico')}}" />
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
    <script src="{{asset('js/fontawesome.js')}}"></script>
    @yield('styles')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-style sticky-top">
        <a href="#" class="navbar-brand brand text-muted logo">
            <img class="img-fluid" src="{{asset('images/life-insurance.png')}}" width="30px" alt="">
            <span class="name-logo px-1 py-1">
                <strong>{{__('M')}}</strong>{{__('edical')}}<strong>{{__(' C')}}</strong>{{__('ontrol')}}
            </span>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapse-navbar" aria-controls="collapse-navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        @guest

        @else
        <div class="collapse navbar-collapse" id="collapse-navbar">
            <ul class="navbar-nav mr-auto navbar-right">
                <li class="nav-item mr-1">
                    <a href="{{route('home')}}" class="btn btn-outline-secondary rounded-pill @yield('home')">
                        <i class="fas fa-home-heart"></i>
                        {{__('Home')}}
                    </a>
                </li>
                <li class="nav-item mr-1">
                    <a href="{{route('buildings.index')}}" class="btn btn-outline-secondary rounded-pill @yield('edificios')">
                        <i class="fas fa-building"></i>
                        {{__('Edificios')}}
                    </a>
                </li>
                <li class="nav-item mr-1">
                    <a href="#" class="btn btn-outline-secondary rounded-pill @yield('clientes')">
                        <i class="fas fa-users"></i>
                        {{__('Clientes')}}
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown">
                        <img class="img-fluid img-icon-user" src="{{asset('images/surgeon.png')}}">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right user-collapse-navbar">
                        <div class="text-center">
                            <img class="img-fluid pt-2" src="{{asset('images/surgeon.png')}}" width="150px">
                            <div class="text-center py-3 user-name-text">
                                {{Auth::user()->name}}
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <button type="button" class="dropdown-item py-2 text-center" data-toggle="modal" data-target="#logoutModal">
                            <i class="fa fa-times logout-icon"></i>
                            {{__(' Cerrar Sesión')}}
                        </button>
                    </div>
                </li>
            </ul>
        </div>
        @endguest
    </nav>

    @yield('content')
    @include('errors/Notifications')
    @include('auth/logoutModal')

    @auth
    <div class="fixed-bottom shortcut-div">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-right">
                    <a href="#" class="btn btn-primary btn-lg mb-3 mr-1 rounded-circle shadow shortcut-button" data-toggle="tooltip" data-placement="left" title="Consultas">
                        <i class="fas fa-notes-medical shadow shortcut-icon"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endauth


    <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/TweenMax.min.js')}}"></script>
    <script src="{{asset('js/Notifications/notifications.js')}}"></script>
    <script type="text/javascript">
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    @yield('scripts')
</body>

</html>
