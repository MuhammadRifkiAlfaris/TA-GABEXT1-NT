@include('admin.layout.navbar')
@include('admin.layout.css')
@push('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endpush
    @stack('css')

<div class="container-fluid">
  <div class="row">

    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse shadow">
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
             <a class=" nav-link {{ (request()->is('member/index')) ? 'active' : 'text-success' }}" href="{{ route('lihat') }}">
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
        <ul style="margin-top: 330px">
          <footer class="mt-auto text-dark-50">
          <p>Welcome to member dashboard, <strong>{{ Auth::user()->name }}</strong></p>
          <p>Your role is <strong>{{ Auth::user()->role }}</strong></p>
          </footer>
        </ul>

      </div>
    </nav>

@push('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endpush
@section('content')
<main style="margin-left: 215px" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 bg-light text-dark ">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom border-success ">
        <h1 style="color: #114537;" class="h2 fw-bold">Daftar Obat<img src="https://www.freepnglogos.com/uploads/logo-puskesmas-png/logo-puskesmas-terbaru-sesuai-permenkes-tahun-1.png" alt="image" height="70" width="70"></h1>
        <div class="btn-toolbar mb-2 mb-md-0 ">
          
          </div>
        </div>

        <div class="table table-striped table-responsive shadow ">
          <table id="postTable" class="table  table-striped table-bordered  table-responsive table align-middle" style="width: 100%">
            <thead class="text-light" style="background-color: #114537;" align="middle">
              <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Nama Obat</th>
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
                <td class="w-25 p-3">{{ $p->description }}</td>
                <td><img src="{{ asset('image_upload/'.$p->image) }}" height="75" width="150"></td>
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

@endpush