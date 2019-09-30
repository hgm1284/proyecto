@extends('layouts.app3')


@section('content')

<div class="card-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Correo Electrónico</th>
                      <th>Tipo Usuario</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach ($users as $user)
                     <tr>
                       <td>{{ $user->name }}</td>
                       <td>{{ $user->email }}</td>
                       <td>
                         @if ($user->id_rolusuario == 1)
                         <span class="label label-danger"> {{"Administrador" }} </span>
                         @elseif  ($user->id_rolusuario == 2)
                         <span class="label label-danger"> {{"Supervisor" }} </span>
                        @elseif  ($user->id_rolusuario == 3)
                         <span class="label label-danger"> {{"Invitado" }} </span>
                        @endif
                      </td>
                     <td colspan="2">
                       <a href="{{ route('usuarios.edit', $user->id ) }}" class="btn btn-success"> <i class="fas fa-pencil-alt"></i> </a>
                       <a href="{{ route('usuarios.destroy', $user->id ) }}" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">
                          <i class="fas fa-trash-alt"></i>
                        </a>
                     </td>
                     </tr>
                      @endforeach
                  </tbody>
                </table>
                {!! $users->render()!!}
              </div>

              <style>

                .link { color: #FFFFFF; } /* CSS link color (red) */

              </style>

              <div class="modal fade" id="modal-danger" style="display: none;" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content bg-danger">
                    <div class="modal-header">
                      <h4 class="modal-title">Eliminar</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Realmente desea eliminar el usuario</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-outline-light"> <a class="link" href="{{ route('usuarios.destroy', $user->id ) }}">Aceptar</a></button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
@endsection
