@extends('layouts.app4')

@section('content')

<section class="content-header" id="contentheader">
      <h1>
        Módulo de Perfiles de Enfermería
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
            <form method="POST" action="{{ route('profiles.store') }}">
            <div class="box-header with-border">
              <div class="row">
                  <div class="col-md-10"><h3 class="box-title">Registro de Perfil</h3></div>
                  <div class="col-md-2" style="float: right; ">
                    <button type="submit" aling"left" class="btn btn-block btn-success">Registrar</button>
                  </div>
              </div>
            </div>
                        @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputname">Nombre del Perfil</label>
                  <input id="nombre"  placeholder="Nombre del Perfil" type="text"
                  class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                  value="{{ old('nombre') }}" required autocomplete="name" autofocus>
                  @error('nombre')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Detalle del Perfil</label>
                  <textarea class="form-control" placeholder="Descripción del Perfil"
                   id="descripcion" name="descripcion" rows="3"></textarea>
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
