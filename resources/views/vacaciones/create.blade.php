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
<div class="col-md-12">
  <div class="box box-primary" >
            <form method="POST" action="{{ route('vacaciones.store') }}">
            <div class="box-header with-border">
              <div class="row">
                  <div class="col-md-10"><h3 class="box-title">Registro de Vacaciones</h3></div>
                  <div class="col-md-2" style="float: right; ">
                    <button type="submit" aling="left" class="btn btn-block btn-success">Registrar</button>
                  </div>
              </div>
            </div>
            <br>
                        @csrf
          <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-6">
            <div class="box box-info">
              <div class="form-group">
              <label for="exampleInputPassword3">Enfermera(o) Asignado</label>
                  <select id="enfermera"  name="id_enfermera" class="form-control">
                     <option value="">Seleccione Enfermera(o)</option>
                    @foreach ($enfermeras as $enfermera)
                     <option value="{{$enfermera['id']}}">{{$enfermera['name']}}  {{$enfermera['lastname']}}</option>
                    @endforeach
                 </select>                         
              </div>
            </div>
            </div>        
          </div>
          <div class="row">
              <div class="col-md-1">
              </div>
              <div class="col-md-4">        
                <div class="box box-success">
                    <div class="box-header with-border">
                      <h5 class="box-title">Fecha Inicio</h5>
                    </div>
            <!-- /.box-header -->
            <!-- form start -->
                      <div class="box-body">
                        <div class="form-group">
                                  <input type="date" id="fecha_inicio" name="fecha_inicio" min="1930-01-01"
                                    max="3000-12-31" class="form-control">
                                  @error('fecha_inicio')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-2">   
                </div>
                <div class="col-md-4">        
                <div class="box box-info">
                    <div class="box-header with-border">
                      <h5 class="box-title">Fecha Final</h5>
                    </div>
            <!-- /.box-header -->
            <!-- form start -->
                      <div class="box-body">
                        <div class="form-group">
                                  <input type="date" id="fecha_final" name="fecha_final" min="1930-01-01"
                                    max="3000-12-31" class="form-control">
                                  @error('fecha_final')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                        </div>
                      </div>
                  </div>
                </div>
          </div>
          <div class="col-md-1">   
          </div>
        </div>
      </form>
    </div>
</div>
</div>
@endsection
