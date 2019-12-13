@extends('layouts.app4')

@section('content')
<section class="content-header" id="contentheader">
      <h1>
        Módulo de Usuarios
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i> Inicio</a></li>
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
        <li>Modificar Usuario</li>
      </ol>
</section>
<br>
<div class="row " >
<div class="col-md-8">
  <div class="box box-primary" >
            <form method="post" action="{{ route('usuarios.update', $user->id) }}">
            <div class="box-header with-border">
              <div class="row">
                  <div class="col-md-10"><h3 class="box-title">Modificar Usuario</h3></div>
                  <div class="col-md-2" style="float: right; ">
                    <button type="submit" aling"left" class="btn btn-block btn-success">Guardar</button>
                  </div>
              </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

              @csrf
              @method('PATCH')
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputname">Nombre</label>
                  <input id="name"  value="{{ $user->name }}" placeholder="Nombre de usuario" type="text"
                  class="form-control @error('name') is-invalid @enderror"
                  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                  @error('name')
                      <span style="color: #E33510" class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Correo Electrónico</label>
                  <input id="email" value="{{ $user->email }}" placeholder="Correo Electrónico" type="email"
                  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                  @error('email')
                      <span style="color: #E33510" class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
<<<<<<< HEAD
                <div class="form-group">
                  <label for="exampleInputPassword1">Contraseña</label>
                  <input id="password" value="{{(Crypt::decryptString($user->password))}}" type="text" placeholder="Contraseña"
                  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                  @error('password')
                      <span style="color: #E33510" class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword2">Confirmar Contraseña</label>
                  <input id="password-confirm" value="{{ $user->password }}" placeholder="Confirmar Contraseña" type="password"
                  class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
=======

>>>>>>> 5ed2faafc2ee3ed156289678c123cfb81fa00c85
                <div class="form-group">
                  <label for="exampleInputSelect">Tipo de Usuario</label>
                  <select id="privilegio"  name="id_rolusuario" class="form-control">
                    <option value="">Seleccione Privilegio de Usuario</option>
                    @foreach ($privilegios as $privilegio)
                    @if ($user->id_rolusuario == $privilegio['id'] )
                      <option value="{{$privilegio['id']}}" selected>{{$privilegio['tipo_privilegio']}}</option>
                    @else
                      <option value="{{$privilegio['id']}}">{{$privilegio['tipo_privilegio']}}</option>
                    @endif
                    @endforeach
                    </select>
                    @error('privilegio')
                        <span style="color: #E33510" class="invalid-feedback" role="alert">
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
