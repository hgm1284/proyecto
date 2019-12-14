@extends('layouts.app4')

@section('content')
<section class="content-header" id="contentheader">
  <h1>
    Módulo de Usuarios
  </h1>
  <ol class="breadcrumb">
    <li><a href="/home"><i class="fa fa-home"></i> Inicio</a></li>
    <i class="fa fa-arrow-right" aria-hidden="true"></i>
    <li>Administración</li>
  </ol>
</section>
<br>
<div class="card-body">
  <table class="table table-hover" id="tablaUsuarios">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Correo Electrónico</th>
        <th>Tipo de Usuario</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        @foreach ($privilegios as $privilegio)
        @if ($user->id_rolusuario == $privilegio['id'] )
        <td>{{$privilegio['tipo_privilegio']}}</td>
        @endif
        @endforeach
        <td colspan="2">
          <a href="{{ route('usuarios.edit', $user->id) }}" title="Editar usuario" class="btn btn-primary"> <i class="fa fa-pencil"></i></a>
          <a href="javascript:;" class="btn btn-danger" title="Eliminar usuario" data-toggle="modal" onclick="deleteDataU({{$user->id}})"
            data-target="#deleteDataU"><i class="fa fa-trash"></i> </a>
            <a href="{{ route('usuarios.resetpassword', $user->id) }}" title="Reset password" class="btn btn-primary"><i class="fa fa-wrench"></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <br>
  <!-- MODAL -->
  <style>
  .link { color: #FFFFFF; } /* CSS link color (red) */
  </style>
  <div class="modal modal-danger fade in" id="deleteDataU" style="display: none;">
    <div class="modal-dialog">
      <form action="" id="deleteForm" method="post">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span></button>
              <h4 class="modal-title">Eliminar Usuario</h4>
            </div>
            <div class="modal-body">
              {{ csrf_field() }}
              {{ method_field('post') }}
              <p>¿Realmente desea eliminar el usuario?</p>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-outline" onclick="formSubmitU()">Aceptar</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
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
      @endsection
