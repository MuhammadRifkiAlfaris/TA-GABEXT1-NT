<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Garage Massage</title>
    @include('admin.layout.css')
    @stack('css')
  </head>
  <body>

<div class="container-fluid text-warning">
  <div class="row">
    @include('admin.layout.sidebar')
    @yield('content')
  </div>
</div>
@include('admin.layout.js')
@stack('js')
</body>
</html>
