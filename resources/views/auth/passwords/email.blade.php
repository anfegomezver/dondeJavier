@extends('layouts.applogin')

@section('content')

<div class="d-flex justify-content-center align-items-center">
    <div class="w-100" style="max-width: 400px;">
        @if (session('status'))
            <div id="floating-alert" class="alert alert-success alert-dismissible fade show position-fixed top-0 end-0 m-3"
                role="alert">
                {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="login-box p-4 rounded shadow-lg bg-white">
            <div class="card border-0">
                <div class="card-body login-card-body text-center">
                    <h3 class="text-danger fw-bold">Recuperar Contraseña</h3>
                    <p class="login-box-msg">Ingresa tu correo para recibir un enlace de restablecimiento</p>

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="input-group mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus 
                                placeholder="Correo Electrónico">

                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope text-danger"></span>
                                </div>
                            </div>

                            @error('email')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-paper-plane"></i> Enviar Enlace
                            </button>
                        </div>
                    </form>

                    <div class="d-flex justify-content-between mt-3">
                        <a href="{{ route('login') }}" class="text-danger fw-bold">
                             Volver atrás
                        </a>
                        <a href="{{ url('/') }}" class="text-danger fw-bold">
                            Ir al Inicio
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
