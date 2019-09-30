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
                       <td>{{ $user->id_rolusuario }}</td>
                     <td colspan="2">
                       <button type="button" class="btn btn-success">Actualizar</button>
                       <button type="button" class="btn btn-danger">Eliminar</button>
                     </td>
                     </tr>
                      @endforeach
                  </tbody>
                </table>
                {!! $users->render()!!}
              </div>
@endsection
