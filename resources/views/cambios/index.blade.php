@extends('layouts.app4')

@section('content')
<section class="content-header" id="contentheader">
  <h1>
    Módulo de Cambios
  </h1>
  <ol class="breadcrumb">
    <li><a href="/home"><i class="fa fa-home"></i>Inicio</a></li>
    <i class="fa fa-arrow-right" aria-hidden="true"></i>
    <li>Administración</li>
  </ol>
</section>
<br>
<br>

<div class="card-body">
<table class="table table-hover" id="tablaCambios">
    <thead>
      <tr>
      <th>Cedúla</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($enfermeras as $enfermera)
      <tr>
      <td>{{$enfermera['cedula']}}</td>
        <td>{{$enfermera['name']}}</td>
        <td>{{$enfermera['lastname']}}</td>
        <td colspan="2">
          <a href="{{ route('cambios.history', $enfermera->id ) }}" class="btn btn-info"> <i class="fa fa-history"></i> </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <br>
      {!! $cambios->render()!!}
    </div>
    @endsection
