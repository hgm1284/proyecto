@extends('layouts.app4')

@section('content')
<section class="content-header" id="contentheader">
  <h1>
    Módulo de Vacaciones
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
      <form method="POST" action="{{ route('vacaciones.store') }}">
        <div class="box-header with-border">
          <div class="row">
            <div class="col-md-10"><h3 class="box-title">Registro de Vacaciones</h3></div>
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
                <div class="box-body">
                  <label for="exampleInputPassword3">Enfermera(o) Asignado</label>
                  <select class="form-control selectpicker" id="enfermera" name="id_enfermera" data-live-search="true" required>
                    <option disabled selected value>Seleccione Enfermera(o)</option>
                    @foreach ($enfermeras as $enfermera)
                    <option value="{{$enfermera['id']}}" data-tokens="{{$enfermera['name']}} {{$enfermera['lastname']}}">{{$enfermera['name']}}  {{$enfermera['lastname']}}</option>
                    $fecha= $enfermera['fecha_ingreso'];
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="box box-info">
                <div class="form-group">
                  <label for="exampleInputPassword1">Fecha de Ingreso(CCSS)</label>
                  <input type="text" id="fecha_ingreso" name="fecha_ingreso" 
                    value="{{ date($enfermera->fecha_ingreso->format('L')) }}"
                  class="form-control" placeholder="Fecha de Ingreso" disabled="disable">
                  @error('fecha_ingreso')
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
                  <label for="exampleInputPassword1">Días de vacaciones</label>
                  <input type="text" class="form-control date" placeholder="Selecciones los dias" required  name="diasVaciones">
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="box box-info">
                <div class="form-group">
                  <label for="exampleInputPassword3">Periodo</label>
                  <select class="form-control selectpicker" id="enfermera" name="id_periodo" data-live-search="true" required >
                    <option disabled selected value> -- Seleccione un periodo -- </option>
                    @foreach ($periodos as $periodo)
                    <option value="{{$periodo['id']}}" data-tokens="{{$periodo['periodo']}}">{{$periodo['periodo']}} </option>
                    $fecha= $periodo['fecha_ingreso'];
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
          </div>

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
