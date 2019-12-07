@extends('layouts.app4')
<title>Reporte de Perfiles y Servicios </title>

@section('content')

<section class="content-header" id="contentheader">
      <h1>
        Módulo Reporte Perfil & Servicio
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i> Inicio</a></li>
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
        <li>Registrar</li>
      </ol>
</section>
<br>
<div class="row">
<div class="col-md-12">
  <div class="box box-primary">
            <div class="box-header with-border">
              <div class="row">
                  <div class="col-md-10"><h3 class="box-title">Reporte Perfil & Servicio</h3></div>
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
                  <label for="exampleInputPassword2">Seleccione un Perfil</label>
                  <select id="id_profile"  name="id_periodo" class="form-control">
                    <option value="">Seleccione Perfil</option>
                    @foreach ($profile as $perfil)
                      <option value="{{$perfil['id']}}">{{$perfil['nombre']}}</option>
                    @endforeach
                  </select>
                  @error('id_profile')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
             </div>
             <div class="col-md-2" style="float: right; ">
               <button id="btnFiltrarPerfiles" type="button" aling"left" class="btn btn-block btn-success">Aceptar</button>
             </div>
            </div>
            <!-- /.box-header -->
            <!-- /.box-body -->
           </div>
          </div>
         </div>
         <div class="box-body table-responsive no-padding">
           <table class="display" style="width:100%" id="reportePerfiles">
             <thead>
             <tr>
               <th>Nombre</th>
               <th>Apellido</th>
               <th>Cédula</th>
             </tr>
           </thead>
           <tbody>

           </tbody>
           </table>
         </div>
@endsection
