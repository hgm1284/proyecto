@extends('layouts.app3')


@section('content')

<div class="card-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Nomenclatura del Rol</th>
                      <th>Detalle del Rol</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach ($roles as $role)
                     <tr>
                       <td>{{ $role->nomenclatura }}</td>
                       <td>{{ $role->detalle }}</td>
                     <td colspan="2">
                       <a href="{{ route('roles.edit', $role->id ) }}" class="btn btn-primary"> <i class="fas fa-pencil-alt"></i> </a>
                       <a href="{{ route('roles.destroy', $role->id ) }}" class="btn btn-danger">
                          <i class="fas fa-trash-alt"></i>
                        </a>
                     </td>
                     </tr>
                      @endforeach
                  </tbody>
                </table>
                <br>
                {!! $roles->render()!!}
              </div>

@endsection
