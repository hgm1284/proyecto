@extends('layouts.app4')

@section('content')

<section class="content-header" id="contentheader">
  <h1>
    Módulo de Cambios
  </h1>
  <ol class="breadcrumb">
    <li><a href="/home"><i class="fa fa-home"></i>Inicio</a></li>
    <i class="fa fa-arrow-right" aria-hidden="true"></i>
    <li>Administración</li>
  </ol>
</section>
<br>
<br>

<div class="card-body">
  <div class="row">
    <div class="col-md-12">
      <input id="ds" type="hidden" value="{{ Request()->id }}">

      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Boleta Cambios de: </h3>
          @foreach($enfermeras as $info)
          <h3 class="box-title">{{$info->name.' '.$info->lastname }}</h3>
          @endforeach
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="col-xs-4">
          <div class="form-group">
            <div class="form-group">
              <label for="exampleInputPassword2">Cambio Asignado</label>
              <select id="id_cambio"  name="id_cambio" class="form-control">
                <option value="">Seleccione Número de Cambio</option>
                @foreach ($cambios as $cambio)
                <option value="{{$cambio['id']}}">{{$cambio['created_at']}}</option>
                @endforeach
              </select>
              @error('id')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
        </div>
        <div class="col-xs-4">
          <br>
          <div class="form-group">
            <button id="btnFiltrarCambios" class="btn btn-success" type="button" name="button">Filtrar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- /.box-body -->
  </form>
</div>
</div>
</div>

<!-- /.row -->
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Botela de Cambios</h3>
        <div class="box-tools">
          <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
            <input type="text" name="table_search" class="form-control pull-right" placeholder="Buscar">

            <div class="input-group-btn">
              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover" id="datosCambios">
          <tr>
            <th>Número de Cambio</th>
            <th>Fecha de Cambio</th>
            <th>Servicio</th>
            <th>Rol</th>
          </tr>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
 </div>
</div>

@endsection
