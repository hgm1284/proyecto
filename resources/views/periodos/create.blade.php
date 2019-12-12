@extends('layouts.app4')

@section('content')

<section class="content-header" id="contentheader">
      <h1>
        Crear Periodos
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
            <form method="POST" action="{{ route('periodos.store') }}">
            <div class="box-header with-border">
              <div class="row">
                  <div class="col-md-10"><h3 class="box-title">Registro de Periodo</h3></div>
                  <div class="col-md-2" style="float: right; ">
                    <button type="submit" aling"left" class="btn btn-block btn-success">Registrar</button>
                  </div>
              </div>
            </div>
                        @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputname">Periodo (Formato 2000 - 2001)</label>
                  <input id="periodo"  placeholder="Periodo (Formato 2000 - 2001)" type="text"
                  class="form-control @error('periodo') is-invalid @enderror" name="periodo"
                  value="{{ old('periodo') }}" required autocomplete="periodo" autofocus>
                  @error('periodo')
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
