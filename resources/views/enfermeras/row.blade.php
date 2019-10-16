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
