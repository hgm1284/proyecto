<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Iniciar Sesión | Gestión de Roles - Departamento Enfermería</title>

  <!-- Font Icon -->
  <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- Main css -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!-- main -->
  <div class="main">
    <!-- Sign up form -->
    <section class="signup">
      <div class="container">
        <div class="signup-content">
          <div class="signin-image">
            <figure>
              <img src="images/hospital3.png" alt="sing up image">
            </figure>
          </div>
          <div class="signup-form">
            <h3 class="form-title">Gestión de Roles  Dirección de Enfermería</h3>
            <h4 class="form-title">Iniciar Sesión</h4>
            <form method="POST" action="{{ route('login') }}">
              @csrf

              <div class="form-group">
                <label for="email" <i class="zmdi zmdi-account material-icons-name"> </i></label>
                <div class="col-md-6">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"  placeholder="Correo Electrónico" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                    <input id="password" type="password"  placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="form-group row mb-0">
                  <div class="col-md-8 offset-md-4">
                    <div class="form-group form-button">
                      <input type="submit" name="signin" id="signin" class="form-submit" value="Inicio de sesión"/>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <!-- JS -->
          <script src="vendor/jquery/jquery.min.js"></script>
          <script src="js/main.js"></script>

        </body>
        </html>
