@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="container-fluid">
                <div class="row mb-2">
          <div class="col-sm-6">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <h3 class="row justify-content-center">Gestión de Roles | Dirección de Enfermería</h3>
            <h4 class="m-0 text-dark">Bienvenido(a)!</h4>
            <br>
          </div><!-- /.container-fluid -->
        </div>
            </div>

              <div class="container-fluid">
  <div class="row">
  <div class="col-12">
    <div class="callout callout-info">
      <h5><i class="fas fa-info"></i>Nota:</h5>
      Este menú le permite acceder de manera ágil a los módulos más importantes de la plataforma.
    </div>
  </div>
  </div>
</div>

              <br>
              <br>
              <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                              <div class="inner">
                                <p>Dist. Roles</p>
                              </div>
                              <div class="icon">
                                <i class="ion ion-person-add"></i>
                              </div>
                              <a href="#" class="small-box-footer">Acceder <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                          </div>
                    <!-- ./col -->
              <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                              <div class="inner">
                                <p>Mod. Enfermeras(os)</p>
                              </div>
                              <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                              </div>
                              <a href="#" class="small-box-footer">Acceder <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                          </div>
                  <!-- ./col -->
              <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                              <div class="inner">
                                <p>Mod. Reportes</p>
                              </div>
                              <div class="icon">
                                <i class="ion ion-person-add"></i>
                              </div>
                              <a href="#" class="small-box-footer">Acceder <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                          </div>
                              <!-- ./col -->
              <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                              <div class="inner">
                                <p>Vacaciones</p>
                              </div>
                              <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                              </div>
                              <a href="#" class="small-box-footer">Acceder <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                          </div>
    <!-- ./col -->
</div><!-- /.col -->
</div><!-- /.col -->

@endsection
