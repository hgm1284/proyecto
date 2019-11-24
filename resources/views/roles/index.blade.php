@extends('layouts.app4')

@section('content')
<section class="content-header" id="contentheader">
      <h1>
        Módulo de Roles
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i> Inicio</a></li>
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
        <li>Administración</li>
      </ol>
</section>
<br>
<div class="card-body">
      <table class="table table-hover" id="tablaRoles">
                  <thead>
                    <tr>
                      <th>Nomenclatura del Rol</th>
                      <th>Detalle del Rol</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach ($roles as $role)
                     <tr>
                       <td>{{ $role->nomenclatura }}</td>
                       <td>{{ $role->detalle }}</td>
                       <td colspan="2">
                         <a href="{{ route('roles.edit', $role->id  ) }}" title="Editar Rol" class="btn btn-primary"> <i class="fa fa-pencil"></i> </a>
                         <a href="javascript:;" class="btn btn-danger" title="Eliminar Rol" data-toggle="modal" onclick="deleteData({{$role->id}})"
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
                      <h4 class="modal-title">Eliminar Rol</h4>
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
            </div>

@endsection
<script type="text/javascript">
    function deleteData(id) {
      var id = id;
      var url = ' {{ route("roles.destroy", ":id") }}';
      url = url.replace(':id', id);
      $("#deleteForm").attr('action', url); }
    function formSubmit() {
      $("#deleteForm").submit();
    }
</script>
