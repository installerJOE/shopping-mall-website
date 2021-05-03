{{-- Header containing the navigation bar comes here
<header class="nav-bar row">
  <div class="col-lg-2 logo-icon nav-list">
    <li style="padding:0px">
      <h1 style="color: #ffff00">Logo</h1>
    </li>
  </div>
  <div class="col-lg-10 nav-list">
    <ul>
      <li>
        <a href="/">Home</a>
        </li>
      <li>
        <a href="/catalog">Catalogue</a>
        </li>
      <li>
        <a href="/about-us">About Us</a>
        </li>
      <li style="float:right">
        <a href="/user"> User </a>
      </li>
    </ul>
  </div>
</header> --}}

<nav class="navbar navbar-expand-lg" style="margin-bottom: 2em">
  <div class="container">
    <a class="navbar-brand" href="/" style="color:#ffff00 !important; font-size:30px">
      Shopping Mall
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
    </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/categories">Category</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/catalog">Catalogue</a>
            </li>
            {{-- Dropdown Menu --}}
             {{-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Products By
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="nav-link dropdown-item" href="/categories">Category</a>
                <a class="nav-link dropdown-item" href="#">Brand</a>
              </div>
            </li>  --}}
            {{-- <li class="nav-item">
              <a class="nav-link" href="/upload-image">Upload Image</a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link" href="/about-us">About Us</a>
            </li>
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              @guest
                  @if (Route::has('login'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{route('login')}}">Login</a>
                      </li>
                  @endif
                  
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="/register">Register</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }}
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item"  href="/dashboard">
                            Dashboard
                          </a>
                          <a class="dropdown-item"  href="/brands/create">
                            Add Brand
                          </a>
                          <a class="dropdown-item" href="/categories/create">
                            Add Category
                          </a>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input type="search" placeholder="Search" class="form-control mr-sm-2" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0 btn-nav-search" type="submit">Search</button>
          </form>
      </div>
  </div>
</nav>

