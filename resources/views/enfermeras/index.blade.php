@extends('layouts.app4')

@section('content')
<section class="content-header" id="contentheader">
      <h1>
        Módulo de Enfermeras(os)
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i> Inicio</a></li>
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
        <li>Administración</li>
      </ol>
</section>
<br>
<div class="card-body">
      <table class="table table-hover" id="tablaEnfermeras">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Apellidos</th>
                      <th>Fecha de Ingreso</th>
                      <th>Servicio</th>
                      <th>Perfil</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach ($enfermeras as $enfermera)
                        @include('enfermeras.row', ['enfermera' => $enfermera])
                      @endforeach
                  </tbody>
                </table>
                <br>
                <!-- MODAL -->
                <style>
                  .link { color: #FFFFFF; } /* CSS link color (red) */
                </style>
                <div class="modal modal-danger fade in" id="deleteDataEnfermera" style="display: none;">
                <div class="modal-dialog">
                  <form action="" id="deleteForm" method="post">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                      <h4 class="modal-title">Eliminar Enfermera(o)</h4>
                    </div>
                    <div class="modal-body">
                      {{ csrf_field() }}
                      {{ method_field('post') }}
                      <p>¿Realmente desea eliminar a enfermera(o)?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
                      <button type="button" class="btn btn-outline" onclick="formSubmitE()">Aceptar</button>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
        <!--fin MODAL -->
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
