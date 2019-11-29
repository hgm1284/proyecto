@extends('layouts.app4')

@section('content')
<section class="content-header" id="contentheader">
      <h1>
        Módulo Reporte Vacaciones
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i> Inicio</a></li>
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
        <li>Registrar</li>
      </ol>
</section>
<br>
<div class="row">
<div class="col-md-8">
  <div class="box box-primary" >
            <div class="box-header with-border">
              <div class="row">
                  <div class="col-md-10"><h3 class="box-title">Reporte de Vacaciones</h3></div>
              </div>
            </div>
                        @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputPassword2">Seleccione un Servicio</label>
                  <select id="id_servicio"  name="id_servicio" class="form-control">
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
                  <label for="exampleInputPassword2">Seleccione un Perido</label>
                  <select id="id_periodo"  name="id_periodo" class="form-control">
                    <option value="">Seleccione Periodo</option>
                    @foreach ($periodos as $periodo)
                      <option value="{{$periodo['id']}}">{{$periodo['periodo']}}</option>
                    @endforeach
                  </select>
                  @error('id_periodo')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
             </div>
             <div class="col-md-2" style="float: right; ">
               <button id="btnFiltrarVacaciones" type="button" aling"left" class="btn btn-block btn-success">Aceptar</button>
             </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover" id="reportevacaciones">
                <tr>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Fechas Disfrute</th>
                  <th>Estado</th>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
           </div>
          </div>
         </div>
@endsection
