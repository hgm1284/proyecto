@extends('layouts.app4')

@section('content')

<section class="content-header" id="contentheader">
      <h1>
        Ver Distribución Anual por Enfermera(o)
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i>Inicio</a></li>
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
        <li>Ver Distribución Anual por Enfermera(o)</li>
      </ol>
</section>
<br>
<style>
.sortable tr {
  cursor: hand;
}
</style>
<div class="row">
<div class="col-md-12">
  <div class="box box-primary" style="text-align:center">
            <div class="box-header with-border">
              <div class="row">
                  <div class="col-md-10"><h3 class="box-title">Buscar Distribución Anual por Enfermera(o)</h3></div>
              </div>
            </div>
            <br>
          @csrf
          <section class="content">
          <div class="row">
            <div class="col-md-3">
            <div class="box box-success" style="text-align:center">
              <div class="box-header-success">
                <label for="exampleInputPassword3">Enfermera</label>
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
                    <label for="exampleInputPassword3">Año</label>
                  </div>
                <div class="box-body">
                      <?php
                        $cont = date('Y');
                        $anno = date('Y');
                        $cont   += 2;
                        $anno++;
                      ?>
                  <select class="form-control selectpicker" id="id_anno" name="anno" required>
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
                  <label for="exampleInputPassword3">Tabla Rol Anual</label>
                </div>

                <table class="display compact nowrap" id="RolAnualEnfermeras" style="width:100%">
                  <thead>
                    <tr>
                        <th>Enfermero</th>
                      @foreach ($meses as $messanno)
                        <th scope="col">{{$messanno['mes']}}</th>
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
<script type="text/javascript">
  function prueba(){
    alert("Entro");
  }
</script>
@endsection
