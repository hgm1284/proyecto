@extends('layouts.app3')


@section('content')

<div class="card-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Nombre del Perfil</th>
                      <th>Descripción del Perfil</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach ($profiles as $profile)
                     <tr>
                       <td>{{ $profile->nombre }}</td>
                       <td>{{ $profile->descripcion }}</td>
                     <td colspan="2">
                       <a href="{{ route('profiles.edit', $profile->id ) }}" class="btn btn-primary"> <i class="fas fa-pencil-alt"></i> </a>
                       <a href="{{ route('profiles.destroy', $profile->id ) }}" class="btn btn-danger">
                          <i class="fas fa-trash-alt"></i>
                        </a>
                     </td>
                     </tr>
                      @endforeach
                  </tbody>
                </table>
                <br>
                {!! $profiles->render()!!}
              </div>

@endsection
