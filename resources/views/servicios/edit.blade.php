@extends('layouts.app4')

@section('content')
<section class="content-header" id="contentheader">
      <h1>
        Módulo de Servicios
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i> Inicio</a></li>
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
        <li>Modificar Servicio</li>
      </ol>
</section>
<br>
<br>
<br>
<div class="row">
<div class="col-md-8">
  <div class="box box-primary" >
        <form method="post" action="{{ route('servicios.update', $servicio->id) }}">
          @csrf
          @method('PATCH')
            <div class="box-header with-border">
              <div class="row">
                  <div class="col-md-10"><h3 class="box-title">Modificar Servicio</h3></div>
                  <div class="col-md-2" style="float: right; ">
                    <button type="submit" aling"left" class="btn btn-block btn-success">Guardar</button>
                  </div>
              </div>
            </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputname">Nombre del Servicio</label>
                  <input id="nombre"  placeholder="Nombre del Servicio" type="text"
                  class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                  value="{{ $servicio->nombre }}" required autocomplete="name" autofocus>
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Descripción del Servicio</label>
                  <textarea class="form-control" placeholder="Descripción del Servicio"
                  id="descripcion" name="descripcion" rows="3" >{{ $servicio->descripcion }}
                </textarea>
                  @error('descripcion')
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
