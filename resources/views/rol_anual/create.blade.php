@extends('layouts.app4')
@section('content')

<section class="content-header" id="contentheader">
      <h1>
        Módulo de Distribucion Anual del Personal
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i>Inicio</a></li>
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
        <li>Dist. Anual</li>
      </ol>
</section>
<br>
<div class="row">
<div class="col-md-12">
  <div class="box box-primary" style="text-align:center">
            <form method="POST" action="{{ route('rol_anual.store') }}">
            <div class="box-header with-border">
              <div class="row">
                  <div class="col-md-10"><h3 class="box-title">Asignacion Anual</h3></div>
              </div>
            </div>
            <br>
          @csrf
          <section class="content">
          <div class="row">
            <div class="col-md-4">
            <div class="box box-success" style="text-align:center">
              <div class="box-header-success">
                <label for="exampleInputPassword3">Servicio Asignado</label>
              </div>
              <div class="box-body">
                <select class="form-control selectpicker" id="servicio" name="servicio" data-live-search="true" required>
                    <option disabled selected value>Servicio</option>
                    @foreach ($servicios as $servicio)
                      <option value="{{$servicio['id']}}" data-tokens="{{$servicio['nombre']}}">{{$servicio['nombre']}}</option>
                    @endforeach
              </select>
              </div>
            </div>
            </div>
            <div class="col-md-4">
              <div class="box box-primary" style="text-align:center">
                <div class="box-header-success">
                  <label for="exampleInputPassword3">Enfermera(o) Asignado</label>
                </div>
                <div class="box-body">
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
            <div class= "col-md-2">
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
            <div class="col-md-2">
              <button type="submit" aling="left" class="btn btn-block btn-warning">Asignar al Rol</button>
            </div>

           <div class="col-md-12">
              <div class="box box-success">
                <div class="box-header-success">
                  <label for="exampleInputPassword3">Tabla Rol Anual</label>
                </div>
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Enfermera(o)</th>
                      @foreach ($meses as $messanno)
                        <th scope="col">{{$messanno['mes']}}</th>
                      @endforeach
                    </tr>
                  </thead>
                  <tbody>
                    <tr>

                    </tr>
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