          <!doctype html>
          <html lang="en">
            <head>
              <!-- Required meta tags -->
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

              <!-- Bootstrap CSS -->
              <link href=" {{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
              <!-- Font Awesome Icons -->
              <link href=" {{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }} " rel="stylesheet" >
              <!-- Theme style -->
              <link href=" {{ asset('adminlte/css/adminlte.min.css') }} " rel="stylesheet" >


              <title>Gestión de Roles | Dirección de Enfermería</title>
            </head>
            <body>
              <body class="hold-transition sidebar-mini">
            <div class="wrapper">

              <!-- Navbar -->
              <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                  </li>
                  <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Inicio</a>
                  </li>
                </ul>

                <!-- SEARCH FORM -->
                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                  <!-- Messages Dropdown Menu -->

                  <!-- Notifications Dropdown Menu -->
                </ul>
              </nav>
              <!-- /.navbar -->

              <!-- Main Sidebar Container -->
              <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="index3.html" class="brand-link">
                  <img src="{{asset('adminlte/img/hospital.png')}}"
                    alt="AdminLTE Logo"class="brand-image  elevation-3"
                       style="opacity: .8">
                  <span class="brand-text font-weight-light">Gestión de Roles</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                  <!-- Sidebar user panel (optional) -->
                  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                      <img src="{{asset('adminlte/img/User_23096.png')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                    </div>
                  </div>

                  <!-- Sidebar Menu -->
                  <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                      <!-- pestaña 1 -->
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link active">
                          <i class="nav-icon fas fa-user-md"></i>
                          <p>
                            Módulo Usuarios
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="/usuarios/create" class="nav-link active">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Registrar</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="/usuarios" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Administración</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                          <!-- pestaña 2 -->
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link active">
                          <i class="nav-icon fas fa-address-book"></i>
                          <p>
                            Módulo Servicios
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="#" class="nav-link active">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Active Page</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Inactive Page</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                          <!-- pestaña 3 -->
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link active">
                          <i class="nav-icon fas fa-award"></i>
                          <p>
                            Módulo Roles
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="#" class="nav-link active">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Active Page</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Inactive Page</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <!-- pestaña 4 -->
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link active">
                      <i class="nav-icon fas fa-user-nurse"></i>
                      <p>
                        Módulo Enfermeras(os)
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="#" class="nav-link active">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Active Page</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Inactive Page</p>
                        </a>
                      </li>
                    </ul>
                  </li>

                        <!-- pestaña 5 -->
                      <li class="nav-item has-treeview">
                      <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-notes-medical"></i>
                        <p>
                          Mód Perf-Enfermeras(os)
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Active Page</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Inactive Page</p>
                          </a>
                        </li>
                      </ul>
                      </li>
                      <!-- pestaña 6 -->
                      <li class="nav-item has-treeview">
                      <a href="#" class="nav-link active">
                      <i class="nav-icon fas fa-hospital"></i>
                      <p>
                        Módulo Dist de Roles.
                        <i class="right fas fa-angle-left"></i>
                      </p>
                      </a>
                      <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="#" class="nav-link active">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Active Page</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Inactive Page</p>
                        </a>
                      </li>
                      </ul>
                      </li>

                      <!-- pestaña 7 -->
                      <li class="nav-item has-treeview">
                      <a href="#" class="nav-link active">
                      <i class="nav-icon fas fa-bed"></i>
                      <p>
                        Módulo Vacaciones.
                        <i class="right fas fa-angle-left"></i>
                      </p>
                      </a>
                      <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="#" class="nav-link active">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Active Page</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Inactive Page</p>
                        </a>
                      </li>
                      </ul>
                      </li>
                      <!-- pestaña 8 -->
                      <li class="nav-item has-treeview">
                      <a href="#" class="nav-link active">
                      <i class="nav-icon fas fa-file-invoice"></i>
                      <p>
                        Módulo Reportes.
                      <i class="right fas fa-angle-left"></i>
                      </p>
                      </a>
                      <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="#" class="nav-link active">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Active Page</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Inactive Page</p>
                        </a>
                      </li>
                      </ul>
                      </li>
                      <!-- pestaña 9 -->
                      <li class="nav-item ">

                        <a href="{{ route('logout') }}" class="nav-link inactive"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                 <i class="nav-icon fas fa-power-off"></i>
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
                      </li>

                    </ul>
                  </nav>
                  <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
              </aside>

              <!-- Content Wrapper. Contains page content -->
              <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">

                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <div class="content">
                    @yield('content')
                </div>
                <!-- /.content -->
              </div>
              <!-- /.content-wrapper -->

              <!-- Control Sidebar -->

              <!-- /.control-sidebar -->

              <!-- Main Footer -->
              <footer class="main-footer">
                <!-- To the right -->
                <div class="float-right d-none d-sm-inline">
                  Anything you want
                </div>
                <!-- Default to the left -->
                <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
              </footer>
            </div>
            <!-- ./wrapper -->

      <!-- REQUIRED SCRIPTS -->

      <!-- jQuery -->
      <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}" defer></script>

      <!-- Bootstrap 4 -->
      <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
      <!-- AdminLTE App -->
      <script src="{{ asset('adminlte/js/adminlte.min.js') }}" defer></script>
      </body>

    </html>
