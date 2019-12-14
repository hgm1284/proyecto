@extends('layouts.app4')

@section('content')
<section class="content-header" id="contentheader">
      <h1>
        Módulo de Servicios
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i> Inicio</a></li>
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
        <li>Administración</li>
      </ol>
</section>
<br>
        <div class="card-body">
        {!! Form::open(['route' => 'servicios.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}

        {!! Form::close() !!}
                <table class="table table-hover" id="tablaServicios">
                  <thead>
                    <tr>
                      <th>Nombre del Servicio</th>
                      <th>Descripción del Servicio</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach ($servicios as $servicio)
                     <tr>
                       <td>{{ $servicio->nombre }}</td>
                       <td> {{ $servicio->descripcion }}</td>
                       <td>
                         <a href="{{ route('servicios.edit', $servicio->id  ) }}" title="Editar Servicio" class="btn btn-primary"> <i class="fa fa-pencil"></i> </a>
                         <a href="javascript:;" class="btn btn-danger" title="Eliminar Servicio" data-toggle="modal" onclick="deleteDataServicios({{$servicio->id}})"
                           data-target="#deleteDataServicios"><i class="fa fa-trash"></i> </a>
                       </td>
                     </tr>
                      @endforeach
                  </tbody>
                </table>
                <br>
                <!-- MODAL -->
                <style>
                  .link { color: #FFFFFF; } /* CSS link color (red) */
                </style>
                <div class="modal modal-danger fade in" id="deleteDataServicios" style="display: none;">
                <div class="modal-dialog">
                  <form action="" id="deleteForm" method="post">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                      <h4 class="modal-title">Eliminar Servicio</h4>
                    </div>
                    <div class="modal-body">
                      {{ csrf_field() }}
                      {{ method_field('post') }}
                      <p>¿Realmente desea eliminar el servicio?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
                      <button type="button" class="btn btn-outline" onclick="formSubmitS()">Aceptar</button>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
                <!--fin MODAL -->
            </div>

@endsection
<script type="text/javascript">
$(function() {
  $('.selectpicker').selectpicker();
});
</script>
@section('scripts')
<script type="text/javascript">
window.setTimeout(function() {
  $(".alert").fadeTo(500, 0).slideUp(500, function(){
      $(this).remove();
  });
}, 3500);
</script>
@endsection
