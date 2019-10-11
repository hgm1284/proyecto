<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Gestión de Roles | H.SC</title>


  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Font Awesome Icons -->
  <link href=" {{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }} " rel="stylesheet" >
  <!-- Bootstrap 3.3.7 -->
  <link href=" {{ asset('adminlte3/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Theme style -->
  <link href=" {{ asset('adminlte3/dist/css/AdminLTE.css') }}" rel="stylesheet">

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link href=" {{ asset('adminlte3/dist/css/skins/skin-blue.min.css') }}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href=" {{ asset('adminlte3/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>H</b>SC</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Sis.</b>Roles</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
        <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('adminlte3/img/User_23096.png')}}" class="user-image" alt="">
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
              <i class="fa fa-gears"></i>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <a href="/home"></a>
                <img src="{{asset('adminlte/img/User_23096.png')}}" class="img-circle" alt="User Image">
                <p>
                   {{ Auth::user()->name }}
                </p>
              </li>
              <!-- Menu Footer-->
                    <a href="{{ route('logout') }}" class="btn btn-block btn-primary btn-sm"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                             <i class="fa fa-power-off" aria-hidden="true"></i>
                             {{ __('Cerrar Sesión') }}
                      <p>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                        </form>
                        @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                        @endif
                      </p>
                    </a>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('adminlte3/img/hospital.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Gestion de Roles</p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menú de Opciones</li>
        <!-- pestaña 1 -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Módulo Usuarios</span>
            <span class="pull-right-container">
              <i class=" fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/usuarios/create"><i class="fa fa-user-plus" aria-hidden="true"></i> Registrar</a></li>
            <li><a href="/usuarios"><i class="fa fa-user"></i> Administración</a></li>
          </ul>
        </li>
        <!-- pestaña 2 -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-hospital-o" aria-hidden="true"></i>
            <span>Módulo Servicios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/servicios/create"><i class="fa fa-plus" aria-hidden="true"></i> Agregar Servicio</a></li>
            <li><a href="/servicios"><i class="fa fa-list" aria-hidden="true"></i> Administración de Servicios</a></li>
          </ul>
        </li>
        <!-- pestaña 3 -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <span>Módulo Roles</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/roles/create"><i class="fa fa-plus" aria-hidden="true"></i>Crear Rol</a></li>
            <li><a href="/roles"><i class="fa fa-list" aria-hidden="true"></i> Administración de Roles</a></li>
          </ul>
        </li>
          <!-- pestaña 4 -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-medkit" aria-hidden="true"></i>
            <span>Módulo Enfermeras(os)</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/enfermeras/create"><i class="fa fa-plus" aria-hidden="true"></i>Agregar Personal</a></li>
            <li><a href="/enfermeras"><i class="fa fa-list" aria-hidden="true"></i> Administración de Personal</a></li>
          </ul>
        </li>
          <!-- pestaña 5 -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-md" aria-hidden="true"></i>
            <span>Módulo Perfiles </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/profiles/create"><i class="fa fa-plus" aria-hidden="true"></i>Crear Perfil</a></li>
            <li><a href="/profiles"><i class="fa fa-list" aria-hidden="true"></i> Administración de Perfiles</a></li>
          </ul>
        </li>
        <!-- pestaña 6 -->
      <li class="treeview">
        <a href="#">
          <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
          <span>Módulo Dist Roles </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href=""><i class="fa fa-plus" aria-hidden="true"></i>Asignar Nuevo Rol</a></li>
          <li><a href=""><i class="fa fa-list" aria-hidden="true"></i>Roles por Servicio</a></li>
          <li><a href=""><i class="fa fa-list" aria-hidden="true"></i>Roles por Enfermero</a></li>
        </ul>
      </li>
      <!-- pestaña 7 -->
    <li class="treeview">
      <a href="#">
        <i class="fa fa-plane" aria-hidden="true"></i>
        <span>Módulo Vacaciones </span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href=""><i class="fa fa-plus" aria-hidden="true"></i>Asignar Vacaciones</a></li>
        <li><a href=""><i class="fa fa-list" aria-hidden="true"></i> Administración de Vacaciones</a></li>
      </ul>
    </li>
    <!-- pestaña 8 -->
  <li class="treeview">
    <a href="#">
      <i class="fa fa-file-text" aria-hidden="true"></i>
      <span>Reportes</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="/profiles/create"><i class="fa fa-plus" aria-hidden="true"></i>Crear Perfil</a></li>
      <li><a href="/profiles"><i class="fa fa-list" aria-hidden="true"></i> Administración de Perfiles</a></li>
    </ul>
  </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="content-wrapper">
    <!-- Main content -->
    <section class="content" >
      <div class="content">
          @yield('content')
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Sistema de Gestión de Roles || Personal de Enfermería || Hospital San Carlos</strong>
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('adminlte3/jquery/dist/jquery.min.js') }}" defer></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('adminlte3/bootstrap/dist/js/bootstrap.min.js') }}" defer></script>
<!-- FastClick -->
<script src="{{ asset('adminlte3/fastclick/lib/fastclick.js') }}" defer></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte3/dist/js/adminlte.min.js') }}" defer></script>

</body>
</html>
