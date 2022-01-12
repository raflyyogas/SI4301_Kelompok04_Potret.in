<header class="navbar navbar-light sticky-top flex-md-nowrap p-0 shadow" style="background-color: #EAD3CB;">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('img/internal/logo.png') }}" alt="" width="100" class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100 me-3" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap me-3">
        @if (session('login'))
          <div class='dropdown text-black'>
            Profile
            <a class='dropdown-toggle' href='#' role='button' id='dropdownMenuLink' data-bs-toggle='dropdown' aria-expanded='false'>    
            </a>
            <ul class='dropdown-menu' aria-labelledby='dropdownMenuLink'>
                <li><a class='dropdown-item tex-black' href='/'>Profile</a></li>
                <li><a class='dropdown-item' href='{{ route('Logout') }}'>Logout</a></li>
            </ul>
          </div>
        @else
          <a href="{{ route('loginpage') }}" type="button" class="btn btn-outline-secondary">Login</a>
          <a href="{{ route('registerpage') }}" type="button" class="btn btn-outline-secondary">Register</a>
        @endif
      </div>
    </div>
</header>