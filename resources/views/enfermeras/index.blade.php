@extends('layouts.app4')


@section('content')
<section class="content-header" id="contentheader">
      <h1>
        Módulo de Enfermeras(os)
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
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Apellidos</th>
                      <th>Fecha de Ingreso</th>
                      <th>Servicio</th>
                      <th>Perfil</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach ($enfermeras as $enfermera)
                     <tr>
                       <td>{{ $enfermera->name }}</td>
                       <td>{{ $enfermera->lastname }}</td>
                       <td>{{ date('d-m-Y',strtotime($enfermera->fecha_ingreso))  }}</td>
                       @foreach ($servicios as $servicio)
                        @if ($enfermera->id_servicio == $servicio['id'] )
                          <td>{{$servicio['nombre']}}</td>
                        @endif
                       @endforeach
                       @foreach ($profiles as $profile)
                        @if ($enfermera->id_profile == $profile['id'] )
                          <td>{{$profile['nombre']}}</td>
                        @endif
                       @endforeach
                     <td colspan="2">
                       <a href="{{ route('enfermeras.edit', $enfermera->id ) }}" class="btn btn-primary"> <i class="fas fa-pencil-alt"></i> </a>
                       <a href="javascript:;" class="btn btn-danger" data-toggle="modal" onclick="deleteData({{$enfermera->id}})"
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
                      <h4 class="modal-title">Eliminar Enfermera(o)</h4>
                    </div>
                    <div class="modal-body">
                      {{ csrf_field() }}
                      {{ method_field('post') }}
                      <p>Realmente desea eliminar a  enfermera(o)???</p>
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
                {!! $enfermeras->render()!!}
              </div>
@endsection

<script type="text/javascript">
    function deleteData(id) {
      var id = id;
      var url = ' {{ route("enfermeras.destroy", ":id") }}';
      url = url.replace(':id', id);
      $("#deleteForm").attr('action', url); }
    function formSubmit() {
      $("#deleteForm").submit();
    }
</script>
