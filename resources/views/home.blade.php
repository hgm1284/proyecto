@extends('layouts.app4')

@section('content')
<section class="content-header" id="contentheader">
      <h1>
        Inicio
        <small>Menú Rapido</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i> Inicio</a></li>
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
        <li><a href="/home">Menú Rapido</a></li>
      </ol>
</section>
<section class="content">
    <div class="row justify-content-center">
            <div class="container-fluid">
                <div class="row mb-2">
          <div class="col-sm-12">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <h3 class="row justify-content-center"><strong>Sistema de Gestión de Roles || Dirección de Enfermería || Hospital San Carlos</strong></h3>
          <br>
          </div>
        </div>
            </div>

              <br>
              <br>

              <?php $perfil = Auth::user()->id_rolusuario ?>

              @switch($perfil)
              @case('1')

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
            <a href="#" class="small-box-footer">Acceder <i class="fa fa-arrow-circle-right"></i></a>
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
            <a href="#" class="small-box-footer">Acceder <i class="fa fa-arrow-circle-right"></i></a>
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
      </div>
      <!-- ./col -->
</div><!-- /.col -->
@break
@default
@endswitch
</section><!-- /.col -->

@endsection
