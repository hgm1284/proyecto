@extends('layouts.app4')

@section('content')

<section class="content-header" id="contentheader">
  <h1>
    Módulo de Vacaciones
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
          <h3 class="box-title">Detalle vacaciones de: </h3>
          @foreach($enfermeras as $info)
          <h3 class="box-title">{{$info->name.' '.$info->lastname }}</h3>
          @endforeach
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form">
          <div class="box-body">
            <div class="row">
              <div class="col-xs-3">
                <div class="form-group">
                  <label>Periodo</label>
                  <select class="form-control" name="periodo_id" id="periodo">
                    <option disabled selected value>Seleccione periodo</option>
                    @foreach($periodos as $item)
                    <option value="{{$item->id}}">{{$item->periodo}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-xs-4">
                <div class="form-group">
                  <label># Solictud </label>
                  <select class="form-control" name="vacaciones_id" id="solictudes">
                  </select>
                </div>
              </div>
              <div class="col-xs-4">
                <br>
                <div class="form-group">
                  <button id="buscar" class="btn btn-success" type="button" name="button">Filtrar</button>
                  <a href="/vacaciones"><button id="buscar" class="btn btn-info" type="button" name="button">Regresar</button></a>
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
          <h3 class="box-title">Vacaciones</h3>
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
          <table class="table table-hover" id="datos">
            <tr>
              <th># Solictud</th>
              <th>Periodo</th>
              <th>Fecha Disfrute</th>
              <th>Estado</th>
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
