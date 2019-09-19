<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gestión de Roles | Dirección de Enfermería</title>

  <!-- Font Icon -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
  rel="stylesheet">

  <!-- Main css -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="main">

        <!-- Sign up form -->
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
  <label for="name" <i class="material-icons">create</label>


                            <div class="col-md-6">
                                <input id="name" placeholder="Tu Nombre" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" <i class="material-icons">mail</i></label>

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
                          <label for="password" <i class="material-icons">lock</i></label>

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
                          <label for="password" <i class="material-icons">lock</i></label>

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
