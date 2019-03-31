@extends('layouts.app')
@section('title', 'Nuevo registro')
@section('edificios', 'active')
@section('styles')
<link rel="stylesheet" href="{{asset('css/Buildings/index.css')}}">
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 div-0 py-5">
            <h1 class="text-truncate text-muted text-center" id="title-create">{{__('Nuevo registro')}}</h1>
        </div>
    </div>
    <form action="{{route('buildings.store')}}" method="post">
        @csrf
        <div class="col-12 div-0 form-row">
            <div class="form-group col-xl-2 col-lg-6 col-md-6 col-sm-12">
                <label for="code_id">{{__('Código único ')}}<i class="fas fa-question-circle" data-toggle="tooltip" data-placement="top" title="Código único generado automáticamente"></i></label>
                <input type="number" name="code_id" class="form-control{{$errors->has('code_id')? ' is-invalid': ''}} shadow" value="{{$code}}" readonly required>
            </div>

            <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <label for="nombre">{{__('Nombre')}}</label>
                <input type="text" id="nombre" name="nombre" class="form-control{{$errors->has('nombre')? ' is-invalid': ''}} shadow" value="{{old('nombre')}}" placeholder="Nombre del edificio" required>
            </div>

            <div class="form-group col-xl-2 col-lg-6 col-md-6 col-sm-12">
                <label for="estado">{{__('Estado')}}</label>
                <input type="text" name="estado" class="form-control shadow" value="{{old('estado')}}" placeholder="Estado" required>
            </div>

            <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <label for="municipio">{{__('municipio')}}</label>
                <input type="text" name="municipio" class="form-control shadow" value="{{old('municipio')}}" placeholder="municipio" required>
            </div>

            <div class="form-group col-xl-2 col-lg-6 col-md-6 col-sm-12">
              <label for="colonia">{{__('Colonia / Fracc.')}}</label>
              <input type="text" name="colonia" class="form-control shadow" value="{{old('colonia')}}" placeholder="Colonia/Fracc." required>
            </div>

            <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
              <label for="calle">{{__('Calle')}}</label>
              <input type="text" name="calle" class="form-control shadow" value="{{old('calle')}}" placeholder="Calle" required>
            </div>

            <div class="form-group col-xl-2 col-lg-6 col-md-6 col-sm-12">
              <label for="numero_externo">{{__('Número exterior')}}</label>
              <input type="number" name="numero_externo" class="form-control shadow {{$errors->has('numero_externo')? ' is-invalid': ''}}" value="{{old('numero_externo')}}" placeholder="Número exterior" required>
            </div>

            <div class="form-group col-xl-2 col-lg-6 col-md-6 col-sm-12">
              <label for="numero_interno">{{__('Número interior')}}</label>
              <input type="text" name="numero_interno" class="form-control shadow {{$errors->has('numero_interno')? ' is-invalid': ''}}" value="{{old('numero_interno')}}" placeholder="Número interior">
            </div>

            <div class="form-group col-xl-2 col-lg-6 col-md-6 col-sm-12">
              <label for="codigo_postal">{{__('Código postal')}}</label>
              <input type="number" name="codigo_postal" class="form-control shadow {{$errors->has('codigo_postal')? ' is-invalid': ''}}" value="{{old('codigo_postal')}}" placeholder="Código postal" required>
            </div>

            <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
              <label for="user_id">{{__('Administrador')}}</label>
              <select class="form-control shadow" name="user_id" required>
                @foreach ($users as $user)
                  @if ($user->hasAnyRole(['Administrador','SAdministrador']))
                    <option value="{{$user->id}}">{{$user->name}}</option>
                  @endif
                @endforeach
              </select>
            </div>

            <div class="form-group col-xl-2 col-lg-6 col-md-6 col-sm-12">
              <label for="telefono">{{__('Teléfono')}}</label>
              <input type="number" name="telefono" class="form-control shadow{{$errors->has('telefono')? ' is-invalid': ''}}" value="{{old('telefono')}}" placeholder="Teléfono" required>
            </div>

            <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
              <label for="telefono_secundario">{{__('Teléfono secundario')}}</label>
              <input type="number" name="telefono_secundario" class="form-control shadow{{$errors->has('telefono_secundario')? ' is-invalid':''}}" value="{{old('telefono_secundario')}}" placeholder="Teléfono secundario">
            </div>
        </div>
        <div class="col-12 div-0 text-center pt-4">
          <button type="submit" class="btn btn-outline-success rounded-pill">
            <i class="fas fa-check"></i>
            {{__(' Registrar')}}
          </button>
          <a href="{{route('buildings.index')}}" class="btn btn-outline-danger rounded-pill">
            <i class="fas fa-times"></i>
            {{__(' Cancelar')}}
          </a>
        </div>
    </form>
</div>
@endsection
@section('scripts')
  <script src="{{asset('js/Buildings/create.js')}}"></script>
@endsection
