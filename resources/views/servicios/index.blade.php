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
<br>
        <div class="card-body">
        {!! Form::open(['route' => 'servicios.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
        <div class="input-group">
            {!! Form:: text('name', null, ['class'=> 'form-control', 'placeholder' => 'Buscar Servicio']) !!}
            <span class="input-group-addon">
                        <i class="fa fa-search"></i>
            </span>
        </div>
      {!! Form::close() !!}
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th colspan="6">Nombre del Servicio</th>
                      <th colspan="6">Descripción del Servicio</th>
                      <th colspan="2">Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach ($servicios as $servicio)
                     <tr>
                       <td colspan="6" class="nowrap">{{ $servicio->nombre }}</td>
                       <td colspan="6" class="nowrap"> {{ $servicio->descripcion }}</td>
                       <td colspan="2" class="nowrap">
                         <a href="{{ route('servicios.edit', $servicio->id  ) }}" title="Editar Servicio" class="btn btn-primary"> <i class="fa fa-pencil"></i> </a>
                         <a href="javascript:;" class="btn btn-danger" title="Eliminar Servicio" data-toggle="modal" onclick="deleteData({{$servicio->id}})"
                           data-target="#DeleteModal"><i class="fa fa-trash"></i> </a>
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
                <div class="modal modal-danger fade in" id="DeleteModal" style="display: none;">
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
                      <p>¿Realmente desea eliminar a enfermera(o)?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
                      <button type="button" class="btn btn-outline" onclick="formSubmit()">Aceptar</button>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
                <!--fin MODAL -->
                {!! $servicios->render()!!}
              </div>

@endsection
<script type="text/javascript">
    function deleteData(id) {
      var id = id;
      var url = ' {{ route("servicios.destroy", ":id") }}';
      url = url.replace(':id', id);
      $("#deleteForm").attr('action', url); }
    function formSubmit() {
      $("#deleteForm").submit();
    }
</script>
<script type="text/javascript">
$(function() {
  $('.selectpicker').selectpicker();
});
</script>
