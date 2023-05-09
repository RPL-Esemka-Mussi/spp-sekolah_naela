<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>spp sekolah</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('css/login.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">SPP Sekolah</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            @auth
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item text-white">Logout <i class="bi bi-box-arrow-right"></i></button>
            </form>
            @else
              <div calss="ms-auto"></div>
            <a class="nav-link text-white" href="{{url('/login')}}"><i class="bi bi-box-arrow-in-right"></i>Login</a>
            @endauth
        </div>
    </nav>

        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#"></a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
              <a class="nav-link text-dark {{Request::segment(1) == '/' ? 'active' : ''}} active" aria-current="page" href="{{url('/')}}">Home</a>
              <span data-feather="home" class="align-text-bottom"></span>
            </a>
          </li>
          <!-- @can('admin') -->
          <li class="nav-item">
          <a class="nav-link text-dark {{Request::segment(1) == 'user' ? 'active' : ''}}" href="{{url('/user')}}">User</a>
              <span data-feather="users" class="align-text-bottom"></span>
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link text-dark {{Request::segment(1) == 'siswa' ? 'active' : ''}}" href="{{url('/siswa')}}">Siswa</a>
              <span data-feather="siswa" class="align-text-bottom"></span>
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link text-dark {{Request::segment(1) == 'kelas' ? 'active' : ''}}" href="{{url('/kelas')}}">Kelas</a>
              <span data-feather="kelas" class="align-text-bottom"></span>
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link text-dark {{Request::segment(1) == 'spp' ? 'active' : ''}}" href="{{url('/spp')}}">Spp</a>
              <span data-feather="spp" class="align-text-bottom"></span>
            </a>
          </li>
          <!-- @endcan -->
          <li class="nav-item">
          <a class="nav-link text-dark {{Request::segment(1) == 'Pembayaran' ? 'active' : ''}}" href="{{url('/pembayaran')}}">Pembayaran</a>
              <span data-feather="pembayaran" class="align-text-bottom"></span>
            </a>
          </li>
        </ul>
    </div>
</nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome {{ auth()->user()->name}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0"></div>
      </div>
      @yield('content')
    </main>
  </div>
</div>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
      <script src="dashboard.js"></script>
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
