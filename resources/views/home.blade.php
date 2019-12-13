@extends('layouts.app4')

@section('content')
<section class="content-header" id="contentheader">
  <h1>
    Inicio
    <small>Menú Rapido</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/home"><i class="fa fa-home"></i>Inicio</a></li>
  </ol>
</section>
<br>
<br>
<section>
  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary" style="text-align:center">

          <div class="box-header with-border">
            <div class="row">
              <div class="col-md-10"><h3 class="box-title">Sistema de Gestión de Roles || Dirección de Enfermería || Hospital San Carlos</h3></div>
            </div>
          </div>
          <br>
          @csrf
          <?php $perfil = Auth::user()->id_rolusuario ?>

          @switch($perfil)
          @case('1')
          <br>

          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h4>Dist. Roles</h4>
                  <p>Crear Rol Anual</p>
                </div>
                <div class="icon">
                  <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                </div>
                <a href="/rol_anual/create" class="small-box-footer">Acceder <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h4>Enfermería</h4>
                  <p>Administración de Personal</p>
                </div>
                <div class="icon">
                  <i class="fa fa-stethoscope" aria-hidden="true"></i>
                </div>
                <a href="/enfermeras" class="small-box-footer">Acceder <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h4>Reportes de Vacaciones</h4>
                  <p>Generar Reporte por Servicio</p>
                </div>
                <div class="icon">
                  <i class="fa fa-file-text" aria-hidden="true"></i>
                </div>
                <a href="/reporte/vacaciones" class="small-box-footer">Acceder <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h4>Vacaciones</h4>
                  <p>Administración de Vacaciones</p>
                </div>
                <div class="icon">
                  <i class="fa fa-plane" aria-hidden="true"></i>
                </div>
                <a href="/vacaciones" class="small-box-footer">Acceder <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          @break

          @case('2')
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h4>Dist. Roles</h4>
                  <p>Asignar nuevo rol</p>
                </div>
                <div class="icon">
                  <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                </div>
                <a href="/rol_anual/create" class="small-box-footer">Acceder <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          @break

          @case('3')
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h4>Reportes de Vacaciones</h4>
                  <p>Generar Reporte por Servicio</p>
                </div>
                <div class="icon">
                  <i class="fa fa-file-text" aria-hidden="true"></i>
                </div>
                <a href="/reporte/vacaciones" class="small-box-footer">Acceder <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
          </div>
        </div>
      </div>
    </div>

  </div>

  @break
  @default
  @endswitch
</section><!-- /.col -->

@endsection
