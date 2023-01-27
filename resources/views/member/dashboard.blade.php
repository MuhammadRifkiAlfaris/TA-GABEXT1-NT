@extends('admin.layout.master2')
@push('css')
@endpush
@section('content')
<!DOCTYPE html>
<!-- saved from url=(0048)https://getbootstrap.com/docs/5.0/examples/blog/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Blog Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/">

    

    <!-- Bootstrap core CSS -->
<link href="./Blog Template · Bootstrap v5.0_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">

      Swal.fire({
        customClass:{
          title: 'text-light'
        },
  background : '#114537',
  position: 'top',
  title: 'welcome to dashboard TrioCom',
  imageUrl: 'https://www.freepnglogos.com/uploads/logo-puskesmas-png/logo-puskesmas-terbaru-sesuai-permenkes-tahun-1.png',
  imageWidth: 70,
  imageHeight: 70,
  showConfirmButton: false,
  timer: 2000
})
    </script>
    
    <!-- Custom styles for this template -->
    <link href="./Blog Template · Bootstrap v5.0_files/css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./Blog Template · Bootstrap v5.0_files/blog.css" rel="stylesheet">
  </head>
  <body>
    
  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a href="{{ route('profile.edit') }}">
      <img style="margin-top: 10px" src="https://portal.tbina.co.id/infsystem/_BatikAssets/User/user6.png" width="40" height="40" class="rounded-circle" alt="..."></a>
      <a style="color: 114537;" class="p-2 link-secondary fw-bold " href="dashboard">Dashboard</a>
      <a style="color: 114537;" class="p-2 link-secondary fw-bold " href="index">Daftar Obat</a>
      <a style="color: 114537;" class="p-2 link-secondary fw-bold " href="https://getbootstrap.com/docs/5.0/examples/blog/#">E-Farmasi</a>
      <a style="color: 114537;" class="p-2 link-secondary fw-bold " href="https://getbootstrap.com/docs/5.0/examples/blog/#">Tag</a>
      <a style="color: 114537;" class="p-2 link-secondary fw-bold " href="{{ route('profile.edit')}}">Profile User</a>
      <a style="color: 114537;" class="p-2 link-secondary fw-bold " href="https://getbootstrap.com/docs/5.0/examples/blog/#">hiburan</a>
      <a style="color: 114537;" class="p-2 link-secondary fw-bold " href="https://getbootstrap.com/docs/5.0/examples/blog/#">Social engagement</a>
      <a style="color: 114537;" class="p-2 link-secondary fw-bold " href="https://getbootstrap.com/docs/5.0/examples/blog/#">Current</a>
    </nav>
  </div>
</div>
    <p>
      @if (Session::has('error'))
       <div class="text-center alert alert-danger alert ml-sm">
      <button type="button" class="btn-close" data-dismiss="alert"></button>
     {{ Session::get('error') }}
      </div>
      @endif
    </p>

<main class="container">
  <div style="background-image: url(https://siedunakes-ktki.kemkes.go.id/uploads/2020/Sep/13/1/Banner_Siedunakes-01_1600x800_1600x800.png);" class="p-4 p-md-5 mb-4 text-white rounded">
    <div class="col-md-6 px-0">
      <h1 style="margin-left: 700px" class="display-4 fst-italic fw-bold">PUSCOM!</h1>
      <p style="margin-left: 700px" class="lead mb-0"><a href="https://getbootstrap.com/docs/5.0/examples/blog/#" class="text-white fw-bold">Continue reading...</a></p>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">PUSCOM</strong>
          <h3 class="mb-0 text-dark fw-bold">About PUSCOM</h3>
          <div class="mb-1 text-muted">Jun 18</div>
          <p class="card-text mb-auto text-dark">Puscom adalah aplikasi web puskesmas online, yang menyediakan semua sumber informasi tentang puskes, mulai dari daftar obat yang diperlukan sampai daftar pasien. </p>
          <a href="https://getbootstrap.com/docs/5.0/examples/blog/#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="https://epuskesmas.id/image/mckup-img-ax-min.png" width="200" height="250">

        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Obat</strong>
          <h3 class="mb-0 text-dark fw-bold">Penerimaan Obat</h3>
          <div class="mb-1 text-muted">Jun 18</div>
          <p class="mb-auto text-dark">Permintaan Obat dari Puskesmas secara langsung ke Dinas Kesehatan Kota/Kabupaten dengan Papperlise hanya menggunakan Device Komputer.</p>
          <a href="https://getbootstrap.com/docs/5.0/examples/blog/#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="http://efarmasi.id/style/images/icons/online_efarmasi.svg" width="200" height="250">
        </div>
      </div>
    </div>
  </div>

  <div class="row g-5 text-dark">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        From the Firehose
      </h3>

      <article class="blog-post">
        <h2 class="blog-post-title">E-Antrian Infokes</h2>
        <p class="blog-post-meta">Juny 18, 2021 by <a href="https://getbootstrap.com/docs/5.0/examples/blog/#">Angga</a></p>

        <p>Manajemen Pelayanan Pendaftaran Mandiri di Puskesmas menggunakan Mesin Antrian Kiosk, yang sudah terintegrasi dengan Aplikasi PUSCOM.</p>
        <hr>
        <p>Melayani Pasien Secara Mandiri,
Membuat Antrian Lebih Cepat,
Membantu Akreditasi Puskesmas.</p>
        <h2>Blockquotes</h2>
        <p>This is an example blockquote in action:</p>
        <blockquote class="blockquote">
          <p>Quoted text goes here.</p>
        </blockquote>
        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
        <h3>Example lists</h3>
        <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout. This is an example unordered list:</p>
        <ul>
          <li>First list item</li>
          <li>Second list item with a longer description</li>
          <li>Third list item to close it out</li>
        </ul>
        <p>And this is an ordered list:</p>
        <ol>
          <li>First list item</li>
          <li>Second list item with a longer description</li>
          <li>Third list item to close it out</li>
        </ol>
       

        <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
      </article>

      <article class="blog-post">
        <h2 class="blog-post-title">New feature</h2>
        <p class="blog-post-meta">December 14, 2020 by <a href="https://getbootstrap.com/docs/5.0/examples/blog/#">Chris</a></p>

        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
        <ul>
          <li>First list item</li>
          <li>Second list item with a longer description</li>
          <li>Third list item to close it out</li>
        </ul>
        <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
      </article>

      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary" href="https://getbootstrap.com/docs/5.0/examples/blog/#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="https://getbootstrap.com/docs/5.0/examples/blog/#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>

    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">About</h4>
          <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Archives</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="https://getbootstrap.com/docs/5.0/examples/blog/#">March 2021</a></li>
            <li><a href="https://getbootstrap.com/docs/5.0/examples/blog/#">February 2021</a></li>
            <li><a href="https://getbootstrap.com/docs/5.0/examples/blog/#">January 2021</a></li>
            <li><a href="https://getbootstrap.com/docs/5.0/examples/blog/#">December 2020</a></li>
            <li><a href="https://getbootstrap.com/docs/5.0/examples/blog/#">November 2020</a></li>
            <li><a href="https://getbootstrap.com/docs/5.0/examples/blog/#">October 2020</a></li>
            <li><a href="https://getbootstrap.com/docs/5.0/examples/blog/#">September 2020</a></li>
            <li><a href="https://getbootstrap.com/docs/5.0/examples/blog/#">August 2020</a></li>
            <li><a href="https://getbootstrap.com/docs/5.0/examples/blog/#">July 2020</a></li>
            <li><a href="https://getbootstrap.com/docs/5.0/examples/blog/#">June 2020</a></li>
            <li><a href="https://getbootstrap.com/docs/5.0/examples/blog/#">May 2020</a></li>
            <li><a href="https://getbootstrap.com/docs/5.0/examples/blog/#">April 2020</a></li>
          </ol>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="https://getbootstrap.com/docs/5.0/examples/blog/#">GitHub</a></li>
            <li><a href="https://getbootstrap.com/docs/5.0/examples/blog/#">Twitter</a></li>
            <li><a href="https://getbootstrap.com/docs/5.0/examples/blog/#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>

<footer class="blog-footer text-dark fw-bold">
  <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
  <p>
    <a href="https://getbootstrap.com/docs/5.0/examples/blog/#">Back to top</a>
  </p>
</footer>


    
  

</body></html>
    @endsection
    @push('js')
    @endpush