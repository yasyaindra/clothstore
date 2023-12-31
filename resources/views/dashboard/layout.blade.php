<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="{{asset("assets/plugins/fontawesome-free/css/all.min.css")}}"
    />
    <!-- Ionicons -->
    <link
      rel="stylesheet"
      href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
    />
    <!-- Tempusdominus Bootstrap 4 -->
    <link
      rel="stylesheet"
      href="{{asset("assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}"
    />
    <!-- iCheck -->
    <link
      rel="stylesheet"
      href="{{asset("assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}"
    />
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset("assets/plugins/jqvmap/jqvmap.min.css")}}" />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("assets/dist/css/adminlte.min.css")}}" />
    <!-- overlayScrollbars -->
    <link
      rel="stylesheet"
      href="{{asset("assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}"
    />
    <!-- Daterange picker -->
    <link
      rel="stylesheet"
      href="{{asset("assets/plugins/daterangepicker/daterangepicker.css")}}"
    />
    <!-- summernote -->
    <link
      rel="stylesheet"
      href="{{asset("assets/plugins/summernote/summernote-bs4.min.css")}}"
    />
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
      <!-- Preloader -->
      <div
        class="preloader flex-column justify-content-center align-items-center"
      >
        <img
          class="animation__shake"
          src="{{asset("assets/dist/img/AdminLTELogo.png")}}"
          alt="AdminLTELogo"
          height="60"
          width="60"
        />
      </div>

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"
              ><i class="fas fa-bars"></i
            ></a>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
              <a href="#" class="d-block">Yasya Indra</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul
              class="nav nav-pills nav-sidebar flex-column"
              data-widget="treeview"
              role="menu"
              data-accordion="false"
            >
              <li class="nav-header">Dashboard</li>
              <li class="nav-item">
                <a href="/8607101e-3b82-11ee-be56-0242ac120002/dashboard/product" class="nav-link">
                  <i class="nav-icon fa-solid fa-shirt"></i>
                  <p>Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route("category.index")}}" class="nav-link">
                  <i class="nav-icon fa-solid fa-bars-staggered"></i>
                  <p>Category</p>
                </a>
              </li>
              <li class="nav-header">SETTINGS</li>
              <li class="nav-item">
                <a href="{{route("profile")}}" class="nav-link">
                  <i class="nav-icon fa-solid fa-user"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item" style="margin-top:auto">
                <a href="{{route("logout")}}" class="nav-link text-danger">
                  <i class="nav-icon fa-solid fa-right-from-bracket"></i>
                  <p>Logout</p>
                </a>
              </li>
              <li class="nav-header">DEVELOPER</li>
              <li class="nav-item">
                <a href="pages/calendar.html" class="nav-link">
                  <i class="nav-icon fa-solid fa-globe"></i>
                  <p>API</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/calendar.html" class="nav-link">
                  <i class="nav-icon fa-solid fa-book"></i>
                  <p>Documentation</p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      @yield('content')
      
      <footer class="main-footer">
        <strong
          >Copyright &copy; 2014-2021
          <a href="https://adminlte.io">AdminLTE.io</a>.</strong
        >
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 3.1.0
        </div>
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <script
      src="https://kit.fontawesome.com/4c03683015.js"
      crossorigin="anonymous"
    ></script>
    <!-- jQuery -->
    <script src="{{asset("assets/plugins/jquery/jquery.min.js")}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset("assets/plugins/jquery-ui/jquery-ui.min.js")}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge("uibutton", $.ui.button);
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset("assets/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <!-- ChartJS -->
    <script src="{{asset("assets/plugins/chart.js/Chart.min.js")}}"></script>
    <!-- Sparkline -->
    <script src="{{asset("assets/plugins/sparklines/sparkline.js")}}"></script>
    <!-- JQVMap -->
    <script src="{{asset("assets/plugins/jqvmap/jquery.vmap.min.js")}}"></script>
    <script src="{{asset("assets/plugins/jqvmap/maps/jquery.vmap.usa.js")}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset("assets/plugins/jquery-knob/jquery.knob.min.js")}}"></script>
    <!-- daterangepicker -->
    <script src="{{asset("assets/plugins/moment/moment.min.js")}}"></script>
    <script src="{{asset("assets/plugins/daterangepicker/daterangepicker.js")}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset("assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")}}"></script>
    <!-- Summernote -->
    <script src="{{asset("assets/plugins/summernote/summernote-bs4.min.js")}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset("assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset("assets/dist/js/adminlte.js")}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset("assets/dist/js/demo.js")}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset("assets/dist/js/pages/dashboard.js")}}"></script>
  </body>
</html>
