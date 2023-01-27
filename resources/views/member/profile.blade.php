<!doctype html>
<html lang="en">
  <head>
    <link href="./Cover Template · Bootstrap v5.0_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
<link href="./Carousel Template · Bootstrap v5.0_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="./Carousel Template · Bootstrap v5.0_files/carousel.css" rel="stylesheet">
    <title>Dashboard</title>
    @include('admin.layout.css')
    @stack('css')
  </head>
  <body>
    @include('admin.layout.navbar')
<div class="container-fluid">
  <div class="row">

    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class=" nav-link {{ (request()->is('member/dashboard')) ? 'active' : 'text-success' }}" href="{{ route('memberDashboard') }}">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only"></span>
            </a>
          </li>
          <li class="nav-item">
             <a class=" nav-link {{ (request()->is('profile')) ? 'active' : 'text-success' }}" href="{{ route('profile.edit') }}">
              <span data-feather="user"></span>
              Profile
            </a>
          </li>
           <li class="nav-item">
             <a class=" nav-link {{ (request()->is('member/index')) ? 'active' : 'text-success' }}" href="{{ route('obat') }}">
              <span data-feather="layers"></span>
              Daftar Obat
            </a>
          </li>
          <li class="nav-item">
              <a class=" nav-link {{ (request()->is('profile')) ? 'active' : 'text-success' }}" href="{{ route('profile.edit') }}">
              <span data-feather="users"></span>
              eAntrian
            </a>
          </li>
        </ul>
        <ul style="margin-top: 370px">
          <footer class="mt-auto text-dark-50">
          <p>Welcome to member dashboard, <strong>{{ Auth::user()->name }}</strong></p>
          <p>Your role is <strong>{{ Auth::user()->role }}</strong></p>
          </footer>
        </ul>

      </div>
    </nav>

    <p>
      @if (Session::has('error'))
       <div style="margin-left: 95px" class="text-center alert alert-danger alert ml-sm">
      <button type="button" class="btn-close" data-dismiss="alert"></button>
     {{ Session::get('error') }}
      </div>
      @endif
    </p>


    </main>
  </div>
</div>
@include('admin.layout.js')
@stack('js')
</body>
</html>
