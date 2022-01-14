<header class="navbar navbar-light sticky-top flex-md-nowrap p-2 shadow bg-light">
    <a class="navbar-brand mt-2 mb-2" href="#">
      <a href="/" class="navbar-brand">
        <img src="{{ asset('img/internal/POTRET.In.png') }}" alt="" width="100" class="d-inline-block align-text-top">
      </a>
    </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100 me-3" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap me-3">
        @if (session('login'))
        <a href="/" class="me-2">
          <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='black' class='bi bi-cart-fill' viewBox='0 0 16 16'>
              <path d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
          </svg>
        </a>
          <a class='btn btn-outline-secondary text-black' href='/profile'>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
            Profile
          </a>
        @else
          <a href="{{ route('loginpage') }}" type="button" class="btn btn-secondary">Login</a>
          <a href="{{ route('registerpage') }}" type="button" class="btn btn-warning">Register</a>
        @endif
      </div>
    </div>
</header>