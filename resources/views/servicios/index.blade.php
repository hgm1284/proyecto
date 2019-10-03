@extends('layouts.app3')


@section('content')

<div class="card-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Nombre del Servicio</th>
                      <th>Descripción del Servicio</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach ($servicios as $servicio)
                     <tr>
                       <td>{{ $servicio->nombre }}</td>
                       <td>{{ $servicio->descripcion }}</td>
                     <td colspan="2">
                       <a href="{{ route('servicios.edit', $servicio->id ) }}" class="btn btn-primary"> <i class="fas fa-pencil-alt"></i> </a>
                       <a href="{{ route('servicios.destroy', $servicio->id ) }}" class="btn btn-danger">
                          <i class="fas fa-trash-alt"></i>
                        </a>
                     </td>
                     </tr>
                      @endforeach
                  </tbody>
                </table>
                <br>
                {!! $servicios->render()!!}
              </div>
              
@endsection
