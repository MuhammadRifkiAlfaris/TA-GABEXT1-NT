<!doctype html>
<body style="background-image: linear-gradient(#EEE8AA,#FFA500)">
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Signin</title>

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" intergrity="sha384-Jckb8q3iqJ61gNV9KGb8thSsNjpSl0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
  </head>
<div style="margin-left: 150px" class="lh-1">

    <!-- <img src="https://www.gambaranimasi.org/data/media/544/animasi-bergerak-imut-kawai-0274.gif"> -->

</div>

  <main style="margin-left:  350px; border-radius: 15px" class="text-center bg-white w-25 p-3 shadow-lg p-3 mb-5 bg-body ">
    <form action="{{ route('login') }}" method="post" class="form-signin " >
      @csrf
 <img src="{{ asset('image/garage.jpg') }}" width="300" height="200">
  <h1 style="color: #114537" class="h3 mb-3 fw-bold fs-6">Sign in</h1>
  @if (Session::has('error'))
  <div class="alert alert-danger">
    {{ Session::get('error') }}
  </div>
  @endif
<div class="p-2">
  <label for="inputEmail" class="sr-only bg-light">Email address</label>
  <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
</div>
<div class="p-2">
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
</div>
   <div class="font-monospace checkbox mb-3">
    <label>
      <input class="" type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button style="background-color: #FFA500" class="btn btn-lg btn-block text-light fw-bold" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
</form>
</main>
</html>
  <!--<img style="margin: 60px" src="https://lh6.googleusercontent.com/proxy/ZMquMjptO4l4yjc0fpJd9AO_Rq0hEZMl80jgPHNKhvkMpJrTrmkVwNGoBeDTDKNjS9wmCurLGaoQISHuCQPDqzcj7H4te65YYA8vwC7bX5n3uQvvxsaT2uImH1_2ZdU=s0-d" height="500" width="150">-->
