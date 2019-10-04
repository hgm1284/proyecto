@extends('layouts.app3')

@section('content')

<div class="row justify-content-center">
<div class="col-6">
  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Editar Perfil</p>
      <form method="post" action="{{ route('profiles.update', $profile->id) }}">
		@csrf
		@method('PATCH')
        <div class="input-group mb-1">
		  <input type="text" name="nombre" value="{{ $profile->nombre }}" required autocomplete="nombre" autofocus
		   placeholder="Nombre del Perfil"   class="form-control input-lg" />
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
		  <input type="text" placeholder="Descripción del Perfil" name="descripcion" value="{{ $profile->descripcion }}"
		  class="form-control input-lg" required autocomplete="descripcion" />
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
            <button type="submit" class="btn btn-primary btn-block btn-flat">Modificar Perfil</button>
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
