@include('admin.layout.css')
@include('admin.layout.navbar')
<main>
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
        <ul style="margin-top: 300px">
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

<div class="container ">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card shadow">
				<div style="background-color: #114537;" class="h3 card-header text-light shadow">
					 Profile user
				</div>

				<div class="card-body">
					<form method="POST" action="{{ route('profile.edit') }}">
						@method('patch')
						@csrf
					
<img src="https://cdn.iconscout.com/icon/free/png-256/user-1648810-1401302.png" class="img-fluid" alt="..." height="100" width="100">
						<div class="h2 form-group row">

							<label style="color: #114537;" for="name" class="col-md-4 col-form-label text-md-right fw-bold">{{
							__('Name') }}</label>

							<div class="col-md-6 ">
								<p style="color: #114537;" class="h2 card-body fw-bold">:   {{ old('name',$user->name) }}</p>

								@error ('name')

							<span class="invalid-feedback" role="alert">

                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="h2 form-group row">
                            <label style="color: #114537;" for="email" class="col-md-4 col-form-label text-md-right fw-bold">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6 ">
								<p style="color: #114537;" class="h2 card-body fw-bold">:   {{ old('email',$user->email) }}</p>
                                @error('email')

                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div></div>
                        
                             
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
</main>

@include('admin.layout.js')
@stack('js')