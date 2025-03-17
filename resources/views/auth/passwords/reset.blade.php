@extends('layouts.applogin')

@section('content')

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
                <h3 class="text-danger fw-bold">Restablecer Contraseña</h3>
                <p class="login-box-msg">Ingresa tu nueva contraseña</p>

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="input-group mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus 
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

                    <div class="input-group mb-3">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password" placeholder="Nueva Contraseña">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock text-danger"></span>
                            </div>
                        </div>

                        @error('password')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <input id="password-confirm" type="password" class="form-control"
                            name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Contraseña">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock text-danger"></span>
                            </div>
                        </div>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-key"></i> Restablecer
                        </button>
                    </div>
                </form>

               
                
            </div>
        </div>
    </div>

@endsection
