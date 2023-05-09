@extends('main.bootstrap')
@section('css')
    <style>
        ::placeholder{
            text-align: center;
        }
    </style>
@endsection


@section('content')
  <div class="vh-100" style="background-color: hsl(0,0%,0%,4%)">
    <div class="container h-100">
        <div class = "row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-8 col-xl-8 col-sm-12-col-12">
                <div class="card text-center">
                    <div class="card-body">
                        <h3>Login</h3>
                        <form action="{{url('auth')}}">
                            <input type="email" name="email" id="email" class="form-control py-2 mt-3 mb-3" placeholder="Email">
                            <input type="password" name="password" id="password" class="form-control py-2" placeholder="Password">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
