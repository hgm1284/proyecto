@extends('layouts.app4')

@section('content')

<div class="row justify-content-center">
<div class="col-6">
  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Editar Nomenclatura del Rol</p>
      <form method="post" action="{{ route('roles.update', $role->id) }}">
		@csrf
		@method('PATCH')
        <div class="input-group mb-1">
		  <input type="text" name="nomenclatura" value="{{ $role->nomenclatura }}" required autocomplete="nomenclatura" autofocus
		   placeholder="Nomenclatura del Rol"   class="form-control input-lg" />
          @error('nomenclatura')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-info-circle"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
		  <input type="text" placeholder="Detalle del Rol" name="detalle" value="{{ $role->detalle }}"
		  class="form-control input-lg" required autocomplete="descripcion" />
          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-pencil-alt"></span>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Modificar Rol</button>
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
