@extends('layouts.applogin')

@section('content')

    @if (session('success'))
        <div id="floating-alert" class="alert alert-success alert-dismissible fade show position-fixed top-0 end-0 m-3"
            role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="login-box p-4 rounded shadow-lg bg-white">
        <div class="login-logo text-center  rounded bg-white bg-opacity-75 shadow">
            <img src="{{ asset('logo.png') }}" alt="Logo" class="img-fluid w-100 rounded">
        </div>
        <!-- /.login-logo -->
        <div class="card border-0">
            <div class="card-body login-card-body text-center">
                <h3 class="text-danger font-weight-bold">¡Bienvenido!</h3>
                <p class="login-box-msg">Inicia sesión para disfrutar la mejor comida rápida</p>


                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group mb-3">

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">

                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">

                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-danger">Ingresar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center mb-3">

                </div>
                <!-- /.social-auth-links -->

                <p class="mb-1">
                    @if (Route::has('password.request'))
                        <a class="text-danger fw-bold" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </p>
                <p class="mb-0">
                    @if (Route::has('register'))
                        <a class="text-danger fw-bold" href="{{ route('register') }}">
                            {{ __('Register a new membership') }}
                        </a>
                    @endif

                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
@endsection
