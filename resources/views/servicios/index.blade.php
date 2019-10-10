@extends('layouts.app4')


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
                       <a href="javascript:;" class="btn btn-danger" data-toggle="modal" onclick="deleteData({{$servicio->id}})"
                         data-target="#DeleteModal"><i class="fa fa-trash"></i> </a>
                        </a>
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
                        <h4 class="modal-title">Eliminar usuario</h4>
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
                        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel </button>
                        <button type="submit" name="" class="btn btn-info" data-dismiss="modal"
                        onclick="formSubmit()">Aceptar</button>
                      </div>
                    </div>
                    </form>
                    </div>
                   </div>
        <!--fin MODAL -->
                {!! $servicios->render()!!}
              </div>

@endsection
<script type="text/javascript">
    function deleteData(id) {
      var id = id;
      var url = ' {{ route("servicios.destroy", ":id") }}';
      url = url.replace(':id', id);
      $("#deleteForm").attr('action', url); }
    function formSubmit() {
      $("#deleteForm").submit();
    }
</script>
