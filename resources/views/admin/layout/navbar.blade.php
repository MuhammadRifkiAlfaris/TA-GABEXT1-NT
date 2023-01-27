<nav style="background-color: #114537" class="navbar navbar-dark sticky-top flex-md-nowrap p-1 shadow ">
  <a style="background-color: #114537" class="navbar-brand col-md-3 col-lg-2 mr-0 px-3 text-center text-light shadow fw-bold" href="{{ route('dashboard') }}">
     <img src="{{ asset('image/logoo.png') }}" width="30" height="30" alt="" class="d-inline-block align-text-top">
      TRIOCOM
    </a>
  
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 shadow" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link text-light fw-bold" href="{{ route('logout') }}">Sign out</a>
    </li>
  </ul>
</nav>