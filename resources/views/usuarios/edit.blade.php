@extends('layouts.app3')

@section('content')


<div class="row justify-content-center">
<div class="col-6">
  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Modificación de Usuario</p>
      <form method="PUT" action="{{ route('usuarios.update') }}">
                  @csrf
        <div class="input-group mb-1">
          <input id="name"  placeholder="Nombre" type="text"
          class="form-control @error('name') is-invalid @enderror" name="name" value="{{ <?php $user->name  ?> }}" required autocomplete="name" autofocus>
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
          <input id="email" placeholder="Correo Electrónico" type="email"
          class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
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
          <input id="password" type="password" placeholder="Contraseña"
          class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
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
          <input id="password-confirm" placeholder="Confirmar Contraseña" type="password"
          class="form-control" name="password_confirmation" required autocomplete="new-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <select id="privilegio"  name="id_rolusuario" class="form-control">
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
            <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar Usuario</button>
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
