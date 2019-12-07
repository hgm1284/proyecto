@extends('layouts.app4')

@section('content')
<section class="content-header" id="contentheader">
      <h1>
        Módulo de Usuarios
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i> Inicio</a></li>
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
        <li>Registrar Usuario</li>
      </ol>
</section>
<br>

@if(Session::has('message'))
    <div class="alert alert-primary" role="alert">
        {{ Session::get('message') }}
    </div>
@endif
<div class="row">
<div class="col-md-8">
  <div class="box box-primary" >
            <form method="POST" action="{{ route('usuarios.store') }}">
            <div class="box-header with-border">
              <div class="row">
                  <div class="col-md-10"><h3 class="box-title">Registro de Usuario</h3></div>
                  <div class="col-md-2" style="float: right; ">
                    <button type="submit" aling"left" class="btn btn-block btn-success">Registrar</button>
                  </div>
              </div>
            </div>
                        @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputname">Nombre</label>
                  <input id="name"  placeholder="Nombre de usuario" type="text"
                  class="form-control @error('name') is-invalid @enderror"
                  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Correo Electrónico</label>
                  <input id="email" placeholder="Correo Electrónico" type="email"
                  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                  @error('email')
                      <span style="color: #E33510" class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Contraseña</label>
                  <input id="password" type="password" placeholder="Contraseña"
                  class="form-control @error('password') is-invalid @enderror"
                  name="password" required autocomplete="new-password">
                  @error('password')
                      <span  style="color: #E33510" class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword2">Confirmar Contraseña</label>
                  <input id="password-confirm" placeholder="Confirmar Contraseña" type="password"
                  class="form-control" name="password_confirmation"
                  required autocomplete="new-password">
                </div>
                <div class="form-group">
                  <label for="exampleInputSelect">Tipo de Usuario</label>
                  <select id="privilegio"  name="id_rolusuario" class="form-control">
                    <option value="">Seleccione Privilegio de Usuario
                  </option>
                    @foreach ($privilegios as $privilegio)
                      <option value="{{$privilegio['id']}}">{{$privilegio['tipo_privilegio']}}</option>
                    @endforeach
                  </select>
                  @error('privilegio')
                      <span  style="color: #E33510" class="invalid-feedback" role="alert">
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
