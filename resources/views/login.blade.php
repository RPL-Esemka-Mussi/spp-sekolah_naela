<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPP Sekolah</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('css/login.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

   @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
             {{session('loginError')}}
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
   </div>
   @endif
   @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> 
    @endif
   <main class="form-signin w-100 m-auto pt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
            <form action="{{url('login')}}" method="POST">
                @csrf
                <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" name="email" placeholder="name@example.spp" autofocus required value="{{old('email')}}">
                    <label for="floatingInput" name="email" id="email">Email</label>
                    @error('email')
                    <div  class="invalid-feedback">
                       {{$message}}
                    </div>
                    @enderror 
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password"  placeholder="password" required>
                    <label for="floatingPassword" name="password" id="password">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-2" type="sumbit">Login</button>
            </form>
            <small class="d-block text-center mt-3">Not resgister? <a href="/register">Register now!</a></small>
        </div>
    </div>
   </main>
   <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
       <script src="{{ asset('js/bootsrap.bundle.min.js') }}"></script>
</html>
