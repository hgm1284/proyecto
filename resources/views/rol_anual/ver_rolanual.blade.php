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
                  <div class="col-md-10"><h3 class="box-title">Buscar Distribución Anual</h3></div>
              </div>
            </div>
            <br>
          @csrf
          <section class="content">
          <div class="row">
            <div class="col-md-3">
            <div class="box box-success" style="text-align:center">
              <div class="box-header-success">
                <label for="exampleInputPassword3">Servicio</label>
              </div>
              <div class="box-body">
                <select class="form-control selectpicker" id="id_servicio" name="id_servicio" data-live-search="true" required>
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
                  <label for="exampleInputPassword3">Perfil de Enfermera(o)</label>
                </div>
                <div class="box-body">
                  <select id="id_profile"  name="id_profile" class="form-control selectpicker" data-live-search="true" required>
                    <option value="">Seleccione Perfil de Enfermero</option>
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
              <button id="btnFiltrarRolAnual" type="button" aling"left" class="btn btn-block btn-warning">Buscar</button>
            </div>

           <div class="col-md-12">
              <div class="box box-success">
                <div class="box-header-success">
                  <label for="exampleInputPassword3">Tabla Rol Anual</label>
                </div>

                <table class="display compact nowrap" id="rolanualServicios" style="width:100%">
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
      <p>Selecciones el nuevo rol que desea asignar a esta enfermera(o)?</p>
      <select class="form-control selectpicker" id="id_rolanual" name="id_rolanual" required>
            <option value="10081"><?php echo "I"; ?></option>
            <option value="10083"><?php echo "II"; ?></option>
            <option value="10085"><?php echo "III"; ?></option>
      </select>
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

</script>
@endsection
