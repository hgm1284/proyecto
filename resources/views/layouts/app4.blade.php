<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Gestión de Roles - Departamento Enfermería</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Font Awesome Icons -->
  <!-- Bootstrap 3.3.7 -->
  <link href=" {{ asset('adminlte3/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
  <!-- Theme style -->
  <link href=" {{ asset('adminlte3/dist/css/AdminLTE.css') }}" rel="stylesheet">
  <!-- Selectpicker -->
  <link href=" {{ asset('adminlte3/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link href=" {{ asset('adminlte3/dist/css/skins/skin-blue.min.css') }}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href=" {{ asset('adminlte3/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/bootstrap-datepicker/css/bootstrap-datepicker.css">
  <link href='/fullcalendar/core/main.css' rel='stylesheet' />
  <link href='/fullcalendar/daygrid/main.css' rel='stylesheet' />
  <script src='/fullcalendar/core/main.js'></script>
  <script src='/fullcalendar/daygrid/main.js'></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/datatables.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.dataTables.min.css"/>

</head>
<meta name="csrf-token" content="{{ csrf_token() }}" />

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="/home" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>H</b>SC</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Gestión de Roles</b></span>
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
                  <img src="{{asset('adminlte3/img/User_23096.png')}}" class="img-circle" alt="User Image">
                  <p>
                    {{ Auth::user()->name }}
                  </p>
                </li>

                <li class="user-footer">
                  <div class="pull-left">
                    <a href="/perfil" class="btn btn-default btn-flat">
                      <i class="fa fa-id-badge" aria-hidden="true"></i>
                      {{ __('Perfil') }}
                    </a>
                  </div>
                  <div class="pull-right">
                    <a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off" aria-hidden="true"></i>
                    {{ __('Cerrar Sesión') }}
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                    </div>
                    @endif
                  </a>
                </div>
              </li>
              <!-- Menu Footer-->
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
          <p>Hospital San Carlos</p>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menú de Opciones</li>

        <?php $perfil = Auth::user()->id_rolusuario ?>

        @switch($perfil)
        @case('1')

        <!-- pestaña 1 -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Módulo Usuarios</span>
            <span class="pull-right-container">
              <i class=" fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/usuarios/create"><i class="fa fa-user-plus" aria-hidden="true"></i>Registrar Usuarios</a></li>
            <li><a href="/usuarios"><i class="fa fa-user"></i>Administración de Usuarios</a></li>
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

        <!-- pestaña 5 -->
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
            <li><a href="/rol_anual/create"><i class="fa fa-plus" aria-hidden="true"></i>Crear Rol Anual</a></li>
            <li><a href="/rol/servicios"><i class="fa fa-calendar-o" aria-hidden="true"></i>Ver Rol Anual-Servicio</a></li>
            <li><a href="/rol/enfermeras"><i class="fa fa-calendar" aria-hidden="true"></i>Rol Anual Enfermera(o)</a></li>
            <li><a href="/rol/serviciosmes"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i>Rol Mes Servicio</a></li>
            <li><a href="/rol/enfermerasmes"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>Rol Mes Enfermera(o)</a></li>
            <li><a href="/cambios/create"><i class="fa fa-reply" aria-hidden="true"></i>Crear Cambios</a></li>
            <li><a href="/cambios"><i class="fa fa-retweet" aria-hidden="true"></i>Boleta de Cambios</a></li>
          </ul>
        </li>

        <!-- pestaña 7 -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-plane" aria-hidden="true"></i>
            <span>Módulo Vacaciones</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/vacaciones/create"><i class="fa fa-plus" aria-hidden="true"></i>Asignar Vacaciones</a></li>
            <li><a href="/vacaciones"><i class="fa fa-list" aria-hidden="true"></i>Administración de Vacaciones</a></li>
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
            <li><a href="/reporte/vacaciones"><i class="fa fa-list" aria-hidden="true"></i>Reporte Vacaciones</a></li>
            <li><a href="/reporte/perfiles"><i class="fa fa-list" aria-hidden="true"></i>Reporte Servicios & Perfiles</a></li>
          </ul>
        </li>

        <!-- pestaña 9 -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text" aria-hidden="true"></i>
            <span>Administración</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/periodos/create"><i class="fa fa-plus" aria-hidden="true"></i>Crear Periodo</a></li>
            <li><a href="/periodos"><i class="fa fa-list" aria-hidden="true"></i>Ver Periodos</a></li>
          </ul>
        </li>

        @break

        @case('2')

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
            <li><a href="/rol_anual/create"><i class="fa fa-plus" aria-hidden="true"></i>Crear Rol Anual</a></li>
            <li><a href="/rol/servicios"><i class="fa fa-calendar-o" aria-hidden="true"></i>Ver Rol Anual-Servicio</a></li>
            <li><a href="/rol/enfermeras"><i class="fa fa-list" aria-hidden="true"></i>Roles por Enfermera(o)</a></li>
            <li><a href="/cambios/create"><i class="fa fa-plus" aria-hidden="true"></i>Crear Cambios</a></li>
            <li><a href="/cambios"><i class="fa fa-list" aria-hidden="true"></i>Boleta de Cambios</a></li>
          </ul>
        </li>

        @break

        @case('3')

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
            <li><a href="/reporte/vacaciones"><i class="fa fa-list" aria-hidden="true"></i>Reporte Vacaciones</a></li>
            <li><a href="/reporte/perfiles"><i class="fa fa-list" aria-hidden="true"></i>Reporte Servicios & Perfiles</a></li>
          </ul>
        </li>
      </ul>

      @break
      @default
      @endswitch

    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="content-wrapper">
    <!-- Main content -->
    <section class="content" >
      <div class="content">
        @include('flash-message')
        @include('toast::messages')
        @include('toast::messages-jquery')
        @yield('content')
        @yield('scripts')
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version 1.0</b>
    </div>
    <strong>© <?php echo date("Y"); ?> Dirección de Enfermería | Hospital San Carlos.</strong>
  </footer>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<!-- <script src="{{ asset('/adminlte3/jquery/dist/jquery.min.js') }}" defer></script> -->
<script src="{{ asset('js/jquery.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('adminlte3/bootstrap/dist/js/bootstrap.min.js') }}" defer></script>
<!-- FastClick -->
<script src="{{ asset('adminlte3/fastclick/lib/fastclick.js') }}" defer></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte3/dist/js/adminlte.min.js') }}" defer></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte3/dist/js/bootstrap-select.min.js') }}" defer></script>
<script src="https://uicdn.toast.com/tui.code-snippet/latest/tui-code-snippet.js"></script>
<script src="https://uicdn.toast.com/tui.dom/v3.0.0/tui-dom.js"></script>
<script src="https://uicdn.toast.com/tui.time-picker/latest/tui-time-picker.min.js"></script>
<script src="https://uicdn.toast.com/tui.date-picker/latest/tui-date-picker.min.js"></script>
<script src="https://uicdn.toast.com/tui-calendar/latest/tui-calendar.js"></script>
<script src="{{ asset('adminlte3/js/moment.js') }}"></script>
<script src="/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="/js/main.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/datatables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>


</body>
</html>
