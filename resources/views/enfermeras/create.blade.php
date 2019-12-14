@extends('layouts.app4')

@section('content')
<section class="content-header" id="contentheader">
  <h1>
    Módulo de Enfermeras(os)
  </h1>
  <ol class="breadcrumb">
    <li><a href="/home"><i class="fa fa-home"></i> Inicio</a></li>
    <i class="fa fa-arrow-right" aria-hidden="true"></i>
    <li>Registrar</li>
  </ol>
</section>
<br>
<div class="row">
  <div class="col-md-8">
    <div class="box box-primary" >
      <form method="POST" action="{{ route('enfermeras.store') }}">
        <div class="box-header with-border">
          <div class="row">
            <div class="col-md-10"><h3 class="box-title">Registro de enfermera(o)</h3></div>
            <div class="col-md-2" style="float: right; ">
              <button type="submit" aling"left" class="btn btn-block btn-success">Registrar</button>
            </div>
          </div>
        </div>
        @csrf
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputname">Nombre</label>
            <input id="name"  placeholder="Nombre" type="text"
            class="form-control @error('name') is-invalid @enderror" name="name"
            value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Apellidos</label>
            <input id="lastname"  placeholder="Apellidos" type="text"
            class="form-control @error('lastname') is-invalid @enderror" name="lastname"
            value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
            @error('lastname')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputname">Cédula</label>
            <input id="cedula"  placeholder="Cédula de identidad" type="text"
            class="form-control @error('name') is-invalid @enderror" name="cedula"
            value="{{ old('cedula') }}"
            required autocomplete="name" autofocus/>
            @error('cedula')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Fecha de Ingreso(CCSS)</label>
            <input type="date" id="fecha_ingreso" name="fecha_ingreso" min="1930-01-01"
            max="3000-12-31" class="form-control" placeholder="Fecha de Ingreso">
            @error('fecha_ingreso')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputPassword2">Servicio Asignado</label>
            <select id="id_servicio"  name="id_servicio" class="form-control">
              <option value="">Seleccione Servicio</option>
              @foreach ($servicios as $servicio)
              <option value="{{$servicio['id']}}">{{$servicio['nombre']}}</option>
              @endforeach
            </select>
            @error('id_servicio')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputSelect">Perfil de Enfermera(o)</label>
            <select id="id_profile"  name="id_profile" class="form-control">
              <option value="">Seleccione Perfil de Usuario</option>
              @foreach ($profiles as $profile)
              <option value="{{$profile['id']}}">{{$profile['nombre']}}</option>
              @endforeach
            </select>
            @error('id_profile')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
<script>
onload = function(){
  var ele = document.querySelectorAll('#cedula')[0];
  ele.onkeypress = function(e) {
    if(isNaN(this.value+String.fromCharCode(e.charCode)))
    return false;
  }
  ele.onpaste = function(e){
    e.preventDefault();
  }
}
</script>
