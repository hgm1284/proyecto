@extends('layouts.app4')

@section('content')

<!-- Content Wrapper. Contains page content -->
<section class="content-header" id="contentheader">
      <h1>
        Módulo de Perfiles de Enfermería
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i> Inicio</a></li>
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
        <li>Registrar</li>
      </ol>
</section>

<!-- Main content -->
 <section class="content">

   <div class="row">
     <div class="col-md-3">

       <!-- Profile Image -->
       <div class="box box-primary">
         <div class="box-body box-profile">
           <img src="{{asset('adminlte3/img/User_23096.png')}}" class="img-circle" alt="User Image">
           <p class="text-center">
              {{ Auth::user()->name }}
           </p>
         </div>
         <!-- /.box-body -->
       </div>
       <!-- /.box -->


     </div>
     <!-- /.col -->
     <div class="col-md-9">
       <div class="nav-tabs-custom">
         <ul class="nav nav-tabs">
          <li class="active">
          <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">Editar Usuario</a>
          </li>
           <li>
             <a href="#settings" data-toggle="tab">Editar Contrasena</a></li>
         </ul>
         <div class="tab-content">
           <div class="active tab-pane" id="activity">
             <?php $id = Auth::user()->id ?>
           </div>
           <!-- /.tab-pane -->
           <div class="tab-pane" id="timeline">
             <form method="POST" class="form-horizontal" action="{{ route('usuarios.perfil', $id) }}">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <div class="form-group">
                 <label for="inputName" class="col-sm-2 control-label">Nombre</label>
                 <?php $nombre = Auth::user()->name ?>
                 <?php $email = Auth::user()->email ?>
                 <div class="col-sm-10">
                   <input type="text" name="name" value="{{$nombre}}" class="form-control" id="inputName" placeholder="Name">
                 </div>
               </div>
               <div class="form-group">
                 <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                 <div class="col-sm-10">
                   <input type="text" name="email" value="{{$email}}"class="form-control" id="inputEmail" placeholder="Email">
                 </div>
               </div>


               <div class="form-group">
                 <div class="col-sm-offset-2 col-sm-10">
                   <button type="submit" class="btn btn-primary">Actualizar</button>
                   <button type="button" class="btn btn-default">Cancelar</button>
                 </div>
               </div>
             </form>

           </div>
           <!-- /.tab-pane -->

           <div class="tab-pane" id="settings">
             <form method="POST" class="form-horizontal" action="{{ route('usuarios.updatePass', $id) }}">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <div class="form-group">
                 <label for="inputPass" class="col-sm-2 control-label">Nueva Contraseña</label>

                 <div class="col-sm-10">
                   <input type="password" name="password" class="form-control" id="inputPass" required>
                 </div>
               </div>
               <div class="form-group">
                 <label for="inputConfirmPass"  class="col-sm-2 control-label">Confirmar Contraseña</label>

                 <div class="col-sm-10">
                   <input type="password"  name="password_confirmed" class="form-control" id="inputConfirmPass" required>
                 </div>
               </div>

               <div class="form-group">
                 <div class="col-sm-offset-2 col-sm-10">
                   <button type="submit" class="btn btn-primary">Actualizar</button>
                          <button type="button" class="btn btn-default">Cancelar</button>
                 </div>
               </div>
             </form>
           </div>
           <!-- /.tab-pane -->
         </div>
         <!-- /.tab-content -->
       </div>
       <!-- /.nav-tabs-custom -->
     </div>
     <!-- /.col -->
   </div>
   <!-- /.row -->

 </section>
 <!-- /.content -->


@endsection
