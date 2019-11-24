@extends('layouts.app4')

@section('content')
<section class="content-header" id="contentheader">
  <h1>
    Módulo de Boleta de Cambios
  </h1>
  <ol class="breadcrumb">
    <li><a href="/home"><i class="fa fa-home"></i>Inicio</a></li>
    <i class="fa fa-arrow-right" aria-hidden="true"></i>
    <li>Registrar</li>
  </ol>
</section>
<br>
<div class="row">
  <div class="col-md-12">
    <div class="box box-primary" >
      <form method="POST" action="{{ route('cambios.store') }}">
        <div class="box-header with-border">
          <div class="row">
            <div class="col-md-10"><h3 class="box-title">Registro de Cambios</h3></div>
            <div class="col-md-2" style="float: right; ">
              <button type="submit" aling="left" class="btn btn-block btn-success">Registrar</button>
            </div>
          </div>
        </div>
        <br>
        @csrf
        <div class="row">
          <div class="col-md-5">
            <div class="box box-info">
              <div class="form-group">
                <label for="exampleInputPassword3">Enfermera(o) Asignado</label>
                <select class="form-control selectpicker" id="enfermera" name="id_enfermera" data-live-search="true" required>
                  <option disabled selected value>Seleccione Enfermera(o)</option>
                  @foreach ($enfermeras as $enfermera)
                  <option value="{{$enfermera['id']}}" data-tokens="{{$enfermera['name']}} {{$enfermera['lastname']}}">{{$enfermera['name']}}  {{$enfermera['lastname']}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="box box-info">
              <div class="form-group">
                <label for="exampleInputPassword2">Servicio Asignado</label>
                <select class="form-control selectpicker" id="servicio" name="id_servicio" data-live-search="true" required>
                  <option value="">Seleccione Servicio</option>
                  @foreach ($servicios as $servicio)
                    <option value="{{$servicio['id']}}">{{$servicio['nombre']}}</option>
                  @endforeach
                </select>
                @error('id_servicio')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-5">
            <div class="box box-info">
              <div class="form-group">
                <label for="exampleInputPassword1">Días de Cambio</label>
                <input type="text" class="form-control date" placeholder="Selecciones los dias" required  name="diasCambios">
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="box box-info">
              <div class="form-group">
                <label for="exampleInputPassword2">Rol Asignado</label>
                <select class="form-control selectpicker" id="rol" name="id_rol" data-live-search="true" required>
                  <option value="">Seleccione Rol</option>
                  @foreach ($roles as $rol)
                    <option value="{{$rol['id']}}">{{$rol['nomenclatura']}}</option>
                  @endforeach
                </select>
                @error('id_rol')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-2">
            <div class="box box-success">
              <div class="box-header with-border">
                <label for="exampleInputPassword1">Años Laborados</label>
              </div>
              <div class="box-body">
                <input type="text" id="annos" name="annos" class="form-control" disabled="disabled">
                @error('annos')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
</div>

@endsection
