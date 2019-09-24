@extends('layouts.app2')

@section('content')

  <div class="row justify-content-center">
  <div class="col-6">
    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Registro de nuevo Usuario</p>
        <form method="POST" action="{{ route('register') }}">
                    @csrf
          <div class="input-group mb-1">
            <input id="name"  placeholder="Nombre" type="text"
            class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
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
            <select id="privilegio"  name="privilegio" class="form-control">
                          <option value="" selected disabled>Seleccione Tipo Usuario</option>
                          <option>Administrador</option>
                          <option>Supervisor</option>
                          <option>Invitado</option>
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







<!--
<div class="main">
      <!-- Sign up form
      <section class="signup">
          <div class="container">
              <div class="signup-content">
                <div class="signup-image">
                                    <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                                </div>
                  <div class="signup-form">
                      <h4 class="form-title">Gestión de Roles | Dirección de Enfermería</h4>
                        <h4 class="form-title">Registrar Usuario</h4>
          <form method="POST" action="{{ route('register') }}">
                      @csrf

                  <div class="form-group">
                    <label for="name" <i class="fas fa-arrow-circle-right"></i></label>
                          <div class="col-md-6">
                              <input id="name"  placeholder="Tu Nombre" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                              @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="email" <i class="zmdi zmdi-email"></i></label>

                          <div class="col-md-6">
                              <input id="email" placeholder="Tu Correo Electrónico" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group">
                        <label for="password" <i class="zmdi zmdi-lock"</i></label>

                          <div class="col-md-6">
                              <input id="password" type="password" placeholder="Tu Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                              @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group">
                        <label for="password" <i class="zmdi zmdi-lock-outline"</i></label>

                          <div class="col-md-6">
                              <input id="password-confirm" placeholder="Confirmar Contraseña" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                          </div>
                      </div>

                      <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                          <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Registrar"/>
                          </div>
                  </form>
                </div>
                </div>
                <!-- JS -->
                    <script src="vendor/jquery/jquery.min.js"></script>
                    <script src="js/main.js"></script>
                </body>
                </html>
@endsection
