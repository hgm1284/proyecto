@extends('layouts.app4')

@section('content')


<div class="row justify-content-center">
<div class="col-6">
  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Registro de nueva Enfermer@</p>
      <form method="POST" action="{{ route('enfermeras.store') }}">
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
        <div class="input-group mb-1">
          <input id="lastname"  placeholder="Apellidos" type="text"
          class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
          @error('lastname')
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
        <br>
        <div class="form-group">
        <input type="date" id="fecha_ingreso" name="fecha_ingreso" min="1000-01-01"
          max="3000-12-31" class="form-control" placeholder="Fecha de Ingreso">
       </div>

<div class="input-group mb-3">
  <select id="servicio"  name="id_servicio" class="form-control">
    <option value="">Seleccione Servicio</option>
    @foreach ($servicios as $servicio)
      <option value="{{$servicio['id']}}">{{$servicio['nombre']}}</option>
    @endforeach
              </select>
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-info-circle"></span>
    </div>
  </div>
</div>

        <div class="input-group mb-3">
          <select id="profile"  name="id_profile" class="form-control">
            <option value="">Seleccione Perfil de Usuario</option>
            @foreach ($profiles as $profile)
              <option value="{{$profile['id']}}">{{$profile['nombre']}}</option>
            @endforeach
                      </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="far fa-id-card"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <select id="role"  name="id_role" class="form-control">
            <option value="">Seleccione Rol</option>
            @foreach ($roles as $role)
              <option value="{{$role['id']}}">{{$role['nomenclatura']}}</option>
            @endforeach
                      </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-info-circle"></span>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <!-- /.col -->
          <div class="col-5">
            <button type="submit" class="btn btn-block btn-primary btn-lg">Registrar Enfermer@</button>
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
