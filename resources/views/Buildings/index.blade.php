@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{asset('css/Buildings/index.css')}}">
@endsection
@section('title', 'Edificios')
@section('edificios', 'active')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div id="title-banner" class="col-12 alert alert-primary shadow">
            <h1 class="text-center text-lg-left text-truncate">{{__('Edificios')}}</h1>
        </div>

        <div class="col-12 div-0 pt-4 pb-3">
            <div class="col-lg-6 col-sm-12 float-left px-0 text-lg-left text-center mb-2">
                @if (Auth::user()->hasRole('SAdministrador'))
                <a href="{{route('buildings.create')}}" class="btn btn-success rounded-pill">
                    <i class="fas fa-plus"></i>
                    {{__(' Nuevo registro')}}
                </a>
                @endif
                <a href="#" class="btn btn-danger rounded-pill" data-toggle="tooltip" data-placement="right" title="Imprimir PDF">
                    <i class="fas fa-file-pdf"></i>
                </a>
            </div>
            <div class="col-lg-6 col-sm-12 float-right px-0 text-center text-lg-left">
                <form method="get">
                    <div class="input-group has-feedback">
                        <input type="text" class="form-control rounded-pill" name="busqueda" value="{{$busqueda}}" placeholder="Buscar...">
                    </div>
                </form>
            </div>
        </div>

        @if ($buildings->count())
        <div class="col-12 table-responsive div-0">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="align-middle">{{__('ID')}}</th>
                        <th class="align-middle text-truncate">{{__('Nombre')}}</th>
                        <th class="align-middle text-truncate">{{__('Teléfono')}}</th>
                        <th class="align-middle text-truncate">{{__('Teléfono alt.')}}</th>
                        <th class="align-middle text-truncate">{{__('Encargado')}}</th>
                        <th class="align-middle text-truncate">{{__('Acciones')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($buildings as $building)
                    <tr class="@if($building->status == false) table-danger @endif">
                        <td class="align-middle text-truncate">{{$building->code_id}}</td>
                        <td class="align-middle text-truncate">{{$building->nombre}}</td>
                        <td class="align-middle text-truncate">{{$building->telefono}}</td>
                        @if ($building->telefono_secundario == null)
                        <td class="align-middle text-truncate">{{__('N/D')}}</td>
                        @else
                        <td class="align-middle text-truncate">{{$building->telefono_secundario}}</td>
                        @endif
                        <td class="align-middle text-truncate">
                            <a href="#" class="btn btn-outline-success" data-toggle="tooltip" data-placement="left" title="Ver perfil">
                                {{$building->user->name}}
                            </a>
                        </td>
                        <td class="align-middle text-truncate">
                            <a href="#" class="btn btn-primary btn-table px-0" data-toggle="tooltip" data-placement="left" title="Información">
                                <i class="fas fa-eye btn-table-icon"></i>
                            </a>
                            @if (Auth::user()->hasRole('SAdministrador'))
                              <span data-toggle="tooltip" data-placement="top" title="Modificar">
                                  <a href="#" class="btn btn-warning btn-table px-0">
                                      <i class="fas fa-edit btn-table-icon"></i>
                                  </a>
                              </span>
                              @if ($building->status)
                                <span data-toggle="tooltip" data-placement="right" title="Desactivar">
                                    <button type="button" class="btn btn-danger btn-table px-0 open-modal" data-toggle="modal" data-target="#modalDisable" data-code="{{$building->code_id}}">
                                        <i class="fas fa-times btn-table-icon"></i>
                                    </button>
                                </span>
                              @else
                                <span data-toggle="tooltip" data-placement="top" title="Activar">
                                    <button type="button" class="btn btn-success btn-table px-0" data-toggle="modal">
                                        <i class="fas fa-check btn-table-icon"></i>
                                    </button>
                                </span>
                                <span data-toggle="tooltip" data-placement="right" title="Eliminar">
                                    <button type="button" class="btn btn-danger btn-table px-0" data-toggle="modal">
                                        <i class="fas fa-times btn-table-icon"></i>
                                    </button>
                                </span>
                              @endif
                            @endif

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <div class="col-12 pt-5 text-center">
            <h2 class="text-truncate text-muted">{{__('Sin resultados')}}</h2>
        </div>
        @endif
    </div>
</div>

@if (Auth::user()->hasRole('SAdministrador'))
  @include('Buildings.modalDisable')
@endif

@endsection
@section('scripts')
<script src="{{asset('js/Buildings/index.js')}}"></script>
@endsection
