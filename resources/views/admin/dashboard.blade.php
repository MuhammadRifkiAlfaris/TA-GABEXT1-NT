@extends('admin.layout.master2')
@push('css')
@endpush
@section('content')
<!DOCTYPE html>
<!DOCTYPE html>
<!-- saved from url=(0049)https://getbootstrap.com/docs/5.0/examples/cover/ -->
<html lang="en" class="h-100"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Cover Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">

    

    <!-- Bootstrap core CSS -->
<link href="./Cover Template · Bootstrap v5.0_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
    <link href="./Cover Template · Bootstrap v5.0_files/cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">GARAGE MASSAGE</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link" href="{{ route('logout') }}"><h4>Logout</h4></a>
      </nav>
    </div>
  </header>

  <main class="px-3">
    <h1 style="margin-top: 100px;">WELCOME TO GARAGE MASSAGE</h1>
    <p style="margin: 20px" class="lead">Garage Massage menawarkan mobil-mobil bekas yang berkualitas. Saat Anda berbelanja di Garage Massage, Anda bisa yakin bahwa selama anda berbelanja di Garage Massage, produk-produk yang kami tawarkan di Garage Massage selalu mengutamakan keunggulan. Ciri khas kami adalah selalu mempersembahkan produk dengan standar kualitas terbaik
    </p>
    <a href="post"><button type="button" class="btn btn-primary">Tambah Data</button></a>
   <a href="lihat"><button type="button" class="btn btn-secondary">Lihat Data</button></a>
  

  </main>

  
</div>


    
  

</body></html>
    @endsection
    @push('js')
    @endpush