@extends('layouts.app4')

@section('content')
<section class="content-header" id="contentheader">
      <h1>
        Módulo de Enfermeras(os)
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i> Inicio</a></li>
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
        <li>Modificar Enfermera(o)</li>
      </ol>
</section>
<br>
<div class="row">
<div class="col-md-8">
  <div class="box box-primary" >
      <form method="post" action="{{ route('enfermeras.update', $enfermera->id) }}">
          @csrf
          @method('PATCH')
            <div class="box-header with-border">
              <div class="row">
                  <div class="col-md-10"><h3 class="box-title">Modificar Enfermera(o)</h3></div>
                  <div class="col-md-2" style="float: right; ">
                    <button type="submit" aling"left" class="btn btn-block btn-success">Guardar</button>
                  </div>
              </div>
            </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputname">Nombre</label>
                  <input type="text" name="name" value="{{ $enfermera->name }}"
                  required autocomplete="name" autofocus
            		  placeholder="Nombre"   class="form-control input-lg" />
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Apellidos</label>
                  <input type="text" name="lastname" value="{{ $enfermera->lastname }}"
                  required autocomplete="lastname" autofocus
            		  placeholder="Apellidos"   class="form-control input-lg" />
                  @error('lastname')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Fecha de Ingreso(CCSS)</label>
                  <input type="date" id="fecha_ingreso" name="fecha_ingreso" min="1000-01-01"
                    max="3000-12-31" class="form-control"
                    value="{{ date($enfermera->fecha_ingreso->format('Y-m-d')) }}" >
                  @error('fecha_ingreso')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword2">Servicio Asignado</label>
                  <select id="servicio"  name="id_servicio" class="form-control">
                    <option value="">Seleccione Servicio de Enfermer@</option>
                    @foreach ($servicios as $servicio)
                    @if ($enfermera->id_servicio == $servicio['id'] )
                      <option value="{{$servicio['id']}}" selected>{{$servicio['nombre']}}</option>
                    @else
                      <option value="{{$servicio['id']}}">{{$servicio['nombre']}}</option>
                    @endif
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputSelect">Perfil de Enfermera(o)</label>
                  <select id="profile"  name="id_profile" class="form-control">
                    <option value="">Seleccione Perfil de Enfermer@</option>
                    @foreach ($profiles as $profile)
                    @if ($enfermera->id_profile == $profile['id'] )
                      <option value="{{$profile['id']}}" selected>{{$profile['nombre']}}</option>
                    @else
                      <option value="{{$profile['id']}}">{{$profile['nombre']}}</option>
                    @endif
                    @endforeach
                    </select>
                </div>
              </div>
            </form>
          </div>
</div>
</div>
@endsection
