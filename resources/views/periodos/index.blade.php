@extends('layouts.app4')

@section('content')
<section class="content-header" id="contentheader">
      <h1>Crear de Periodos</h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i> Inicio</a></li>
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
        <li>Administración</li>
      </ol>
</section>
<br>
<div class="card-body">
                <table class="table table-hover" id="tablaPerfiles">
                  <thead>
                    <tr>
                      <th>Periodo</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach ($periodos as $periodo)
                     <tr>
                       <td>{{ $periodo->periodo }}</td>
                     </tr>
                      @endforeach
                  </tbody>
                </table>
                <br>
              </div>
@endsection
