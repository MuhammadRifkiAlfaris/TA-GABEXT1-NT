@extends('admin.layout.master')
@push('css')
@endpush
@section('content')
<body>
<main style="margin-left: 215px" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Post</h1>
      </div>

      @if ($errors->any())
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <div class="card">
        <div class="card-body">
          <form action="{{ route('post.update', $posts->id) }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PATCH')}}
            <div class="form-group">
              <div class="mb-3">
              <label for="exampleFormControlInput1">Title</label>
              <input type="text" class="form-control" name="title" id="exampleFormControlInput1" value="{{ $posts->title }}">
            </div>
            <div class="form-group">
              <div class="mb-3">
              <label for="exampleFormControlTextarea1">Description</label>
              <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{ $posts->description }}</textarea>
            </div>
          <div class="form-group">
            <div class="mb-3">
            <label for="exampleFormControlFile1">Image</label><br>
            <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
          </div></div>
            <div class="mb-3">
            <button type="submit" class="btn btn-primary mb-2">Save</button>

   </div></div></div></form></div></div></main></body>
    @endsection
    @push('js')
    @endpush