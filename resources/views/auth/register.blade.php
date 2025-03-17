@extends('layouts.applogin')

@section('content')
<div class="login-box p-5 rounded shadow-lg bg-white" style="width: 500px; max-width: 100%;">

        <div class="login-logo text-center rounded bg-white bg-opacity-75 shadow">
            <img src="{{ asset('logo.png') }}" alt="Logo" class="img-fluid w-100 rounded">
        </div>
        
        <div class="card border-0">
            <div class="card-body login-card-body text-center" >
                <h3 class="text-danger font-weight-bold">¡Regístrate!</h3>
                <p class="login-box-msg">Crea una cuenta para disfrutar la mejor comida rápida</p>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="input-group mb-3">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus 
                            placeholder="Nombre">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                            name="email" value="{{ old('email') }}" required autocomplete="email" 
                            placeholder="Correo electrónico">

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
                            name="password" required autocomplete="new-password" placeholder="Contraseña">

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

                    <div class="input-group mb-3">
                        <input id="password-confirm" type="password" class="form-control" 
                            name="password_confirmation" required autocomplete="new-password" 
                            placeholder="Confirmar contraseña">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-danger">Registrarse</button>
                        </div>
                    </div>
                    
                </form>

                <p class="mt-3">
                    <a class="text-danger fw-bold" href="{{ route('login') }}">¿Ya tienes cuenta? Inicia sesión</a>
                </p>
            </div>
        </div>
    </div>
@endsection