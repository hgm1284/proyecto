@extends('layouts.app4')
<title>Roles Mensual por Enfermera(o) </title>

@section('content')

<section class="content-header" id="contentheader">
  <h1>
    Módulo de Distribucion Mensual por Enfermera(o)
  </h1>
  <ol class="breadcrumb">
    <li><a href="/home"><i class="fa fa-home"></i>Inicio</a></li>
    <i class="fa fa-arrow-right" aria-hidden="true"></i>
    <li>Distribución Mensual por Enfermera(o)</li>
  </ol>
</section>
<br>
<style>
.sortable tr {
  cursor: hand;
}
</style>
<div class="row">
  <div class="box box-primary" style="text-align:center">
    <div class="box-header with-border">
      <div class="row">
        <div class="col-md-10"><h3 class="box-title">Buscar Distribución Mensual por Enfermera(o)</h3></div>
      </div>
    </div>
    <br>
    @csrf
    <section class="content">
      <div class="row">
        <div class="col-md-4">
          <div class="box box-primary" style="text-align:center">
            <div class="box-header-success">
              <label for="exampleInputPassword3">Enfermera(o)</label>
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
        <div class= "col-md-3">
          <div class="box box-primary">
            <div class="box-header-success">
              <label for="exampleInputPassword3">Mes</label>
            </div>
            <div class="box-body">
              <select class="form-control selectpicker" id="mes" name="mes"  required>
                <option value="">Seleccione un mes</option>
                @foreach ($meses as $messanno)
                <option value="{{$messanno['id']}}">{{$messanno['mes']}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        <div class= "col-md-3">
          <div class="box box-primary">
            <div class="box-header-success">
              <label for="exampleInputPassword3">Año</label>
            </div>
            <div class="box-body">
              <?php
              $cont = date('Y');
              $anno = 2019;
              $cont   += 1;
              $anno++;
              ?>
              <select class="form-control selectpicker" id="id_anno" name="anno"  required>
                <option value="">Seleccione un año</option>
                <?php while ($cont >= $anno) { ?>
                  <option value="<?php echo($cont); ?>"><?php echo($cont); ?></option>
                  <?php $cont = ($cont-1); } ?>
                </select>
              </div>
            </div>
          </div>

          <div class="col-md-2">
            <button id="btnFiltrarRolAnualEnfermera" type="button" aling"left" class="btn btn-block btn-warning">Buscar</button>
          </div>

          <div class="col-md-12">
            <div class="box box-success">
              <div class="box-header-success">
                <label for="exampleInputPassword3">Tabla Rol Mensual por Enfermera(o)</label>
              </div>
            </div>
          </div>
          <table class="display compact nowrap" id="RolAnualEnfermeras" style="width:100%">
            <thead>
              <tr>
                <th scope="col">Enfermero</th>
                @foreach ($mesesmin as $mesmin)
                <th scope="col">{{$mesmin['mes']}}</th>
                @endforeach
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>


<!-- MODAL -->
<style>
.link { color: #FFFFFF; } /* CSS link color (red) */
</style>
<div class="modal fade fade in" id="modal-default" style="display: none;">
  <div class="modal-dialog">
    <form action="" id="updateForm" method="post">
      @csrf
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Editar Rol</h4>
          </div>
          <div class="modal-body">
            <!-- {{ csrf_field() }}
            {{ method_field('put') }}-->
            <p>Seleccione el nuevo rol que desea asignar</p>
            <select class="form-control selectpicker" id="id_rolanual" name="id_rolanual" required>
              <option value="10081"><?php echo "I"; ?></option>
              <option value="10083"><?php echo "II"; ?></option>
              <option value="10085"><?php echo "III"; ?></option>
            </select>
            <input type="hidden" name="validar_retorno" value="regreso">
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-primary" onclick="formSubmit()">Aceptar</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
      </form>
      <!-- /.modal-dialog -->
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
<script type="text/javascript">
$(document).ready( function() {
$( '#RolAnualEnfermeras' ).dataTable( {
 "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
   // Bold the grade for all 'A' grade browsers
   if ( aData[4] == "A" )
   {
     $('td:eq(4)', nRow).html( '<b>A</b>' );
   }
 }
} );
} );
</script>
@endsection
