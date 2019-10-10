@extends('layouts.app4')

@section('content')

<div class="row justify-content-center">
<div class="col-6">
  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Modificar Enfermer@</p>
      <form method="post" action="{{ route('enfermeras.update', $enfermera->id) }}">
		@csrf
		@method('PATCH')
        <div class="input-group mb-1">
		  <input type="text" name="name" value="{{ $enfermera->name }}" required autocomplete="name" autofocus
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
        <div class="input-group mb-1">
		  <input type="text" name="lastname" value="{{ $enfermera->lastname }}" required autocomplete="lastname" autofocus
		   placeholder="Apellidos"   class="form-control input-lg" />
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
            <option value="">Seleccione Servicio de Enfermer@</option>
            @foreach ($servicios as $servicio)
            @if ($enfermera->id_servicio == $servicio['id'] )
              <option value="{{$servicio['id']}}" selected>{{$servicio['nombre']}}</option>
            @else
              <option value="{{$servicio['id']}}">{{$servicio['nombre']}}</option>
            @endif
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
            <option value="">Seleccione Perfil de Enfermer@</option>
            @foreach ($profiles as $profile)
            @if ($enfermera->id_profile == $profile['id'] )
              <option value="{{$profile['id']}}" selected>{{$profile['nombre']}}</option>
            @else
              <option value="{{$profile['id']}}">{{$profile['nombre']}}</option>
            @endif
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
            <option value="">Seleccione Rol de Enfermer@</option>
            @foreach ($roles as $role)
            @if ($enfermera->id_role == $role['id'] )
              <option value="{{$role['id']}}" selected>{{$role['nomenclatura']}}</option>
            @else
              <option value="{{$role['id']}}">{{$role['nomenclatura']}}</option>
            @endif
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
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Modificar Enfermer@</button>
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
