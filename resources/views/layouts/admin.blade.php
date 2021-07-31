<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adminlte.io/themes/v3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Dec 2020 18:02:44 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../../code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/summernote/summernote-bs4.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{url('/')}}" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>



      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="{{ asset('backend/dist/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="{{ asset('backend/dist/img/user8-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="{{ asset('backend/dist/img/user3-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <!-- Authentication -->
          <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                    this.closest('form').submit();">
              {{ __('Logout') }}
            </x-jet-dropdown-link>
          </form>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->


      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Hasnur Jahan</a>
          </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item active">
              <a href="{{url('/admin/dashboard')}}" class="nav-link {{ 'admin/dashboard'== request()->path() ? 'active' : '' }}">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>

            <li class="nav-item ">
              <a href="{{url('/admin/project')}}" class="nav-link {{ 'admin/project'== request()->path() ?  : '' }}">
                <i class="nav-icon far fa-image"></i>
                <p>
                  Project
                </p>
              </a>
            </li>


            <li class="nav-item ">
              <a href="{{url('/admin/blog')}}" class="nav-link {{ 'admin/blog'== request()->path() ?  : '' }}">
                <i class="nav-icon far fa-image"></i>
                <p>
                  Blog
                </p>
              </a>
            </li>


            <li class="nav-item ">
              <a href="{{url('/admin/publication')}}" class="nav-link {{ 'admin/publication'== request()->path() ?  : '' }}">
                <i class="nav-icon far fa-image"></i>
                <p>
                  Publication
                </p>
              </a>
            </li>

            <li class="nav-item ">
              <a href="{{url('/admin/question')}}" class="nav-link {{ 'admin/question'== request()->path() ?  : '' }}">
                <i class="nav-icon far fa-image"></i>
                <p>
                  Question
                </p>
              </a>
            </li>

            <li class="nav-item ">
              <a href="{{url('/admin/circular')}}" class="nav-link {{ 'admin/circular'== request()->path() ?  : '' }}">
                <i class="nav-icon far fa-image"></i>
                <p>
                  Circular
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
    <main>
      {{ $slot }}
    </main>
    <!-- /.content-wrapper -->
    <footer class="main-footer" style="text-align: center;">
      <strong>Copyright 2021 © All rights reserved by Hasnur Jahan</strong>
      <div class="float-right d-none d-sm-inline-block">

      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  @stack('modals')

  @livewireScripts

  <!-- jQuery -->
  <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ asset('backend/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- ChartJS -->
  <script src="{{ asset('backend/plugins/chart.js/Chart.min.js') }}"></script>
  <!-- Sparkline -->
  <script src="{{ asset('backend/plugins/sparklines/sparkline.js') }}"></script>
  <!-- JQVMap -->
  <script src="{{ asset('backend/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
  <script src="{{ asset('backend/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{ asset('backend/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
  <!-- daterangepicker -->
  <script src="{{ asset('backend/plugins/moment/moment.min.js') }}"></script>
  <script src="{{ asset('backend/plugins/daterangepicker/daterangepicker.js') }}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{ asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
  <!-- Summernote -->
  <script src="{{ asset('backend/plugins/summernote/summernote-bs4.min.js') }}"></script>
  <!-- overlayScrollbars -->
  <script src="{{ asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('backend/dist/js/adminlte.js') }}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('backend/dist/js/demo.js') }}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{ asset('backend/dist/js/pages/dashboard.js') }}"></script>
  <script src="{{ asset('backend/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
</body>

<!-- Mirrored from adminlte.io/themes/v3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Dec 2020 18:03:37 GMT -->

</html>