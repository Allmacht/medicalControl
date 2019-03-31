@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{asset('css/Auth/login.css')}}">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 div-0">
            <form action="{{route('login.post')}}" method="post">
                @csrf
                <div class="col-lg-12 col-sm-12 div-2 py-5 form-row">
                    <div class="col-12 text-center">
                        <img class="pulse" src="{{asset('images/life-insurance.png')}}" width="50px">
                    </div>
                    <h1 class="text-muted text-truncate col-12 mensaje-bienvenida text-center"><strong>{{__('B')}}</strong>{{__('ienvenido.')}}</h1>
                    <div class="form-group col-lg-8 col-sm-12 mx-auto">
                        <input type="email" name="email" class="form-control shadow {{$errors->has('email')? ' is-invalid':''}} rounded-pill" placeholder="Ingresa tu correo electrónico" value="{{old('email')}}" required>
                    </div>
                    <div class="form-group col-lg-8 col-sm-12 mx-auto">
                        <input type="password" name="password" class="form-control shadow {{$errors->has('email')? ' is-invalid':''}} rounded-pill" placeholder="Ingresa tu contraseña" required>
                    </div>
                    <div class="col-lg-8 mx-auto text-center">
                        <button type="submit" class="btn btn-success btn-block shadow mb-3 rounded-pill">
                            <i class="fas fa-check"></i>
                            {{__(' Iniciar sesión')}}
                        </button>
                        <button class="btn btn-link" type="button" data-toggle="modal" data-target="#modalEmail">
                            {{__('¿Ha olvidado su contraseña?')}}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@include('auth/passwords/email')

@endsection
