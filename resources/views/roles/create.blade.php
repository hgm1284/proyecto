@extends('layouts.app4')

@section('content')

<section class="content-header" id="contentheader">
      <h1>
        Módulo de Roles
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
            <form method="POST" action="{{ route('roles.store') }}">
            <div class="box-header with-border">
              <div class="row">
                  <div class="col-md-10"><h3 class="box-title">Registro de Rol</h3></div>
                  <div class="col-md-2" style="float: right; ">
                    <button type="submit" aling"left" class="btn btn-block btn-success">Registrar</button>
                  </div>
              </div>
            </div>
                        @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputname">Nomenclatura del Rol</label>
                  <input id="nomenclatura"  placeholder="Nomenclatura del Rol" type="text"
                  class="form-control @error('nomenclatura') is-invalid @enderror" name="nomenclatura"
                   value="{{ old('nomenclatura') }}" required autocomplete="nomenclatura" autofocus>
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Detalle del Rol</label>
                  <textarea class="form-control" placeholder="Detalle del Rol"
                  id="detalle" name="detalle" rows="3"></textarea>
                  @error('detalle')
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
