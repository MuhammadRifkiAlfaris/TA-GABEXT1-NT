@extends('admin.layout.master')
@push('css')
@endpush
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">


<div class="container-fluid">
  <div class="row">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

<main style="margin-left: 215px" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 bg-light text-dark ">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom border-success ">
        <h1 style="color: #114537;" class="h2 fw-bold">Data Item</h1>
        <div class="btn-toolbar mb-2 mb-md-0 ">
          
          </div>
        </div>

        <div class="table table-striped table-responsive shadow ">
          <table id="postTable" class="table  table-striped table-bordered  table-responsive table align-middle" style="width: 100%">
            <thead class="text-light" style="background-color: #114537;" align="middle">
              <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Merk Mobil</th>
                <th>Description</th>
                <th>Image</th>
                <th>Created At</th>
                <th>Updated At</th>
              </tr>
            </thead>
            <tbody>
              <?php $id=1; ?>
              @foreach($posts as $p)
              <tr>
                <td><?php echo $id++; ?></td>
                <td>{{ $p->category_id }}</td>
                <td>{{ $p->title }}</td>
                <td>{{ $p->description }}</td>
                <td><img src="{{ asset('image_upload/'.$p->image) }}" height="150" width="150"></td>
                <td>{{ $p->created_at }}</td>
                <td>{{ $p->updated_at }}</td>
              </tr>
              @endforeach
            </tbody>
           
          </table>
      </div>
      @include('admin.layout.js')
@stack('js')
</main>
@push('js')



  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">

  </script>

  @endsection
    @endpush