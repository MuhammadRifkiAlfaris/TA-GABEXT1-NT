
<nav id="sidebarMenu" class="navbar navbar-warning text-dark bg-light col-md-3 col-lg-2  d-md-block sidebar collapse shadow">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class=" nav-link {{ (request()->is('admin/dashboard')) ? 'active' : 'text-success' }}" href="{{ route('dashboard') }}">
              <span data-feather="home"></span>
              Home <span class="sr-only"></span>
            </a>
              <a class=" nav-link {{ (request()->is('admin/post')) ? 'active' : 'text-success' }}" href="{{ route('post.index') }}">
              <span data-feather="plus"></span>
              Tambah Data <span class="sr-only"></span>
            </a>
            <a class=" nav-link {{ (request()->is('admin/lihat')) ? 'active' : 'text-success' }}" href="{{ route('lihat') }}">
              <span data-feather="eye"></span>
              Lihat Data <span class="sr-only"></span>
            </a>

          </li>
          
        </ul>
      </div>
    </nav>

    