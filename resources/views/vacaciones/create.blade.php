@extends('layouts.app4')

@section('content')
<section class="content-header" id="contentheader">
      <h1>
        Módulo de Vacaciones
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i>Inicio</a></li>
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
        <li>Registrar</li>
      </ol>
</section>
<br>
<div class="row">
<div class="col-md-8">
  <div class="box box-primary" >
            <form method="POST" action="{{ route('vacaciones.store') }}">
            <div class="box-header with-border">
              <div class="row">
                  <div class="col-md-10"><h3 class="box-title">Registro de Vacaciones</h3></div>
                  <div class="col-md-2" style="float: right; ">
                    <button type="submit" aling"left" class="btn btn-block btn-success">Registrar</button>
                  </div>
              </div>
            </div>
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputPassword3">Enfermera(o) Asignado</label>
                          <select id="enfermera"  name="id_enfermera" class="form-control">
                            <option value="">Seleccione Enfermera(o)</option>
                            @foreach ($enfermeras as $enfermera)
                              <option value="{{$enfermera['id']}}">{{$enfermera['name']}}  {{$enfermera['lastname']}}</option>
                            @endforeach
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputPassword1">Fecha de Inicio</label>
                          <input type="date" id="fecha_inicio" name="fecha_inicio" min="1000-01-01"
                            max="3000-12-31" class="form-control">
                          @error('fecha_inicio')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>

                <div class="form-group">
                  <label for="exampleInputPassword2">Fecha Final</label>
                  <input type="date" id="fecha_final" name="fecha_final" min="1000-01-01"
                    max="3000-12-31" class="form-control">
                  @error('fecha_final')
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
