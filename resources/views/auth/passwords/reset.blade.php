@extends('layouts.app')
@section('title','Restablecer contraseña')
@section('styles')
  <link rel="stylesheet" href="{{asset('css/Auth/login.css')}}">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{ route('password.update') }}" method="post">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="col-lg-12 col-sm-12 py-5 form-row">
                    <div class="col-12 text-center">
                        <img class="pulse" src="{{asset('images/life-insurance.png')}}" width="50px">
                        <h2 class="text-muted text-truncate col-12 mensaje-bienvenida text-center pt-1"><strong>{{__('R')}}</strong>{{__('establecer ')}}<strong>{{__(' C')}}</strong>{{__('ontraseña')}}</h2>
                    </div>
                    <div class="form-group col-lg-8 col-sm-12 mx-auto mt-2">
                        <input type="email" name="email" class="form-control{{$errors->has('email')? ' is-invalid': ''}} shadow" placeholder="Ingrese su correo electrónico" required autofocus>
                    </div>
                    <div class="form-group col-lg-8 col-sm-12 mx-auto">
                        <input type="password" name="password" class="form-control shadow{{$errors->has('password')? ' is-invalid': ''}}" placeholder="Ingrese su nueva contraseña" required>
                    </div>
                    <div class="form-group col-lg-8 col-sm-12 mx-auto">
                        <input type="password" name="password_confirmation" class="form-control  shadow{{$errors->has('password')? ' is-invalid': ''}}" placeholder="Confirme su nueva contraseña" required>
                    </div>
                    <div class="col-lg-8 mx-auto text-center">
                        <button type="submit" class="btn btn-success btn-block shadow mb-3">
                            <i class="fas fa-check"></i>
                            {{__(' Restablecer contraseña')}}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
