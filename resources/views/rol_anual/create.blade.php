@extends('layouts.app4')
@section('content')

<section class="content-header" id="contentheader">
<<<<<<< HEAD
  <h1>
    Módulo Distribución Rol Anual por Enfermera(o)
  </h1>
  <ol class="breadcrumb">
    <li><a href="/home"><i class="fa fa-home"></i>Inicio</a></li>
    <i class="fa fa-arrow-right" aria-hidden="true"></i>
    <li>Distribución Rol Anual por Enfermera(o)</li>
  </ol>
=======
      <h1>
        Módulo Distribución Rol Anual por Enfermera(o)
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i>Inicio</a></li>
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
        <li>Distribución Rol Anual por Enfermera(o)</li>
      </ol>
>>>>>>> 946075c2ccc652aeff22b1c2dd3b2207dc114fcb
</section>
<br>
<div class="row">
  <div class="col-md-12">
    <div class="box box-primary" style="text-align:center">
      <form method="POST" action="{{ route('rol_anual.store') }}">
        <div class="box-header with-border">
          <div class="row">
            <div class="col-md-10"><h3 class="box-title">Asignación Rol Anual</h3></div>
            <div class="col-md-2">
              <button type="submit" aling="left" class="btn btn-block btn-warning">Crear Rol</button>
            </div>
          </div>
        </div>
        <br>
        @csrf
        <section class="content">
          <div class="row">
            <div class="col-md-6">
              <div class="box box-success" style="text-align:center">
                <div class="box-header-success">
                  <label for="exampleInputPassword3">Servicio Asignado</label>
                </div>
                <div class="box-body">
                  <select class="form-control selectpicker" id="id_servicio" name="id_servicio" data-live-search="true" required>
                    <option disabled selected value>Seleccione Servicio</option>
                    @foreach ($servicios as $servicio)
                    <option value="{{$servicio['id']}}" data-tokens="{{$servicio['nombre']}}">{{$servicio['nombre']}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="box box-primary" style="text-align:center">
                <div class="box-header-success">
                  <label for="exampleInputPassword3">Enfermera(o) Asignado</label>
                </div>
                <div class="box-body">
                  <select class="form-control selectpicker" id="id_enfermera" name="id_enfermera" data-live-search="true" required>
                    <option disabled selected value>Seleccione Enfermera(o)</option>
                    @foreach ($enfermeras as $enfermera)
                    <option value="{{$enfermera['id']}}" data-tokens="{{$enfermera['name']}} {{$enfermera['lastname']}}">{{$enfermera['name']}}  {{$enfermera['lastname']}}</option>
                    @endforeach
                  </select>
                  @error('id_enfermera')
                  <span style="color: #E33510" class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="box box-primary" style="text-align:center">
                <div class="box-header-success">
                  <label for="exampleInputPassword3">Perfil Asignado</label>
                </div>
                <div class="box-body">
                  <select id="id_profile"  name="id_profile" class="form-control selectpicker" data-live-search="true" required>
                    <option value="">Seleccione Perfil</option>
                    @foreach ($profiles as $profile)
                    <option value="{{$profile['id']}}">{{$profile['nombre']}}</option>
                    @endforeach
                  </select>
                  @error('id_profile')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
            </div>
            <div class= "col-md-6">
              <div class="box box-success">
                <div class="box-header-success">
                  <label for="exampleInputPassword3">Año</label>
                </div>
                <div class="box-body">
                  <?php
                  $cont = date('Y');
                  $cont++;
                  ?>
                  <select class="form-control selectpicker" id="anno" name="anno" required>
                    <?php while ($cont >= 2018) { ?>
                      <option value="<?php echo($cont); ?>"><?php echo($cont); ?></option>
                      <?php $cont = ($cont-1); } ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header-success">
                    <label for="exampleInputPassword3">Tabla Rol Anual</label>
                  </div>
                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        @foreach ($meses as $messanno)
                        <th scope="col">{{$messanno['mes']}}</th>
                        @endforeach
                      </tr>
                      <tr>
                        @foreach ($meses as $messanno)
                        <td>
                          <select class="form-control selectpicker" id="mes" name="mes{{$messanno['id']}}" required>
                            <option value="1"><?php echo "I"; ?></option>
                            <option value="2"><?php echo "II"; ?></option>
                            <option value="3"><?php echo "III"; ?></option>
                          </select>
                        </td>
                        @endforeach
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </form>
  </div>
</div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
window.setTimeout(function() {
  $(".alert").fadeTo(500, 0).slideUp(500, function(){
    $(this).remove();
  });
}, 3500);
</script>
@endsection
