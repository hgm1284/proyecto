@extends('layouts.app3')

@section('content')


<div class="row justify-content-center">
<div class="col-6">
  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Registro de Servicio de Enfermería</p>
      <form method="POST" action="{{ route('servicios.store') }}">
                  @csrf
        <div class="input-group mb-1">
          <input id="nombre"  placeholder="Nombre del Servicio" type="text"
          class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="name" autofocus>
          @error('nombre')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <textarea class="form-control" placeholder="Descripción del Servicio"  id="descripcion" name="descripcion" rows="3"></textarea>
          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar Servicio de Enfermería</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>

</div>
</div>
@endsection
