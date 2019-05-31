<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Jatim Sakti</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{!! asset('assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css') !!}">
  <link rel="stylesheet" href="{!! asset('assets/vendors/css/vendor.bundle.base.css') !!}">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{!! asset('assets/images/favicon.png') !!}" />


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Jatim Sakti {{config('multiauth.prefix')}}</title>

    <!-- Scripts -->
    <!-- plugins:js -->
    <script src="{!! asset('assets/vendors/js/vendor.bundle.base.js') !!}"></script>
    <script src="{!! asset('assets/vendors/js/vendor.bundle.addons.js') !!}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{!! asset('assets/js/off-canvas.js') !!}"></script>
    <script src="{!! asset('assets/js/misc.js') !!}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{!! asset('assets/js/dashboard.js') !!}"></script>
    <!-- End custom js for this page-->

    <!-- Fonts -->


    <!-- Styles -->

</head>

<body>
  <div class="container-scroller">
    <div id="app">

      {{-- Navbar Atas --}}
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">

          <img src="{!! asset('assets/images/logo.png') !!}" alt="logo" href="{{ route('home') }}">

        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">


{{-- Account Things --}}

<ul class="navbar-nav navbar-nav-right">
  <ul class="navbar-nav ml-auto">
      <!-- Authentication Links -->
      <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>

                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
      </ul>

{{-- /Account Things --}}

        </div>
      </nav>
      <!-- partial -->

      {{-- /Navbar Atas --}}

      {{-- Sidebar --}}
<div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->

      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Pengajuan</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('daftar.anggaran') }}">Daftar Anggaran</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('form.anggaran') }}">Pengajuan Anggaran</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item sidebar-actions">
            <span class="nav-link">
              <div class="border-bottom">
                <h6 class="font-weight-normal mb-3">Projects</h6>
              </div>
              <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>

            </span>
          </li>
        </ul>
      </nav>
      <!-- partial -->

      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')
        </div>
      </div>


    </div>
  </div>
</div>

{{-- End Sidebar --}}
</body>
</html>
