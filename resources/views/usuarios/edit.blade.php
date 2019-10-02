@extends('layouts.app3')

@section('content')

<div class="row justify-content-center">
<div class="col-6">
  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Registro de nuevo Usuario</p>
      <form method="post" action="{{ route('usuarios.update', $user->id) }}">
		@csrf
		@method('PATCH')
        <div class="input-group mb-1">
		  <input type="text" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus
		   placeholder="Nombre"   class="form-control input-lg" />
          @error('name')
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
		  <input type="email" placeholder="Correo Electrónico" name="email" value="{{ $user->email }}"
		  class="form-control input-lg" required autocomplete="email" />
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
        <div class="input-group mb-3">
		  <input type="password" name="password" value="{{ $user->password }}"
		  class="form-control input-lg" required autocomplete="new-password" placeholder=" Contraseña"/>
          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
		  <input type="password" name="password-confirm" value="{{ $user->password }}"
		  class="form-control input-lg" required autocomplete="new-password" placeholder="Confirmar Contraseña"/>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <select id="privilegio"  name="privilegio" class="form-control">
                        <option value="0" selected disabled>Seleccione Tipo Usuario</option>
                        <option value="1">Administrador</option>
                        <option value="2">Supervisor</option>
                        <option value="3">Invitado</option>
                      </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-users-cog"></span>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Modificar Usuario</button>
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
