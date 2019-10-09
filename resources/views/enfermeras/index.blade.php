@extends('layouts.app3')


@section('content')

<div class="card-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Apellidos</th>
                      <th>Fecha de Ingreso</th>
                      <th>Servicio</th>
                      <th>Perfil</th>
                      <th>Rol Actual</th>
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
                       @foreach ($roles as $role)
                        @if ($enfermera->id_role == $role['id'] )
                          <td>{{$role['nomenclatura']}}</td>
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
                <div class="modal fade" id="DeleteModal" style="display: none;" aria-hidden="true">
                  <div class="modal-dialog">
                    <form action="" id="deleteForm" method="post">
                    <div class="modal-content bg-danger">
                      <div class="modal-header">
                        <h4 class="modal-title">Eliminar Enfermera</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        {{ csrf_field() }}
                        {{ method_field('post') }}
                        <p class="text-center">Realmente desea eliminar?</p>
                      </div>
                      <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
                        <button type="submit" name="" class="btn btn-info" data-dismiss="modal"
                        onclick="formSubmit()">Aceptar</button>
                      </div>
                    </div>
                    </form>
                    </div>
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
