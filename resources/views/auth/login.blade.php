@extends('layouts.app')

@section('content2')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="authentication-page-content p-4 d-flex align-items-center min-vh-100">
    <div class="w-100">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div>
                    <div class="text-center">
                        <div>
                            <a href="index.html" class="logo">
                                {{-- <img src="assets/images/logo-dark.png" height="20" alt="logo"> --}}
                                <h4>MembeToko</h4>
                            </a>
                        </div>

                        {{-- <h4 class="font-size-18 mt-4">Welcome Back !</h4> --}}
                        <p class="text-muted">Admin Login</p>
                    </div>

                    <div class="p-2 mt-5">
                        <form class="" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3 auth-form-group-custom mb-4">
                                <i class="ri-user-2-line auti-custom-input-icon"></i>
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" value="{{ old('email') }}" name="email" placeholder="Enter username">
                            </div>
    
                            <div class="mb-3 auth-form-group-custom mb-4">
                                <i class="ri-lock-2-line auti-custom-input-icon"></i>
                                <label for="userpassword">Password</label>
                                <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                            </div>
    
                            <div class="form-check">
                                <input name="remember" value="{{ old('password') }}" type="checkbox" class="form-check-input" id="customControlInline">
                                <label class="form-check-label" for="customControlInline">Remember me</label>
                            </div>

                            <div class="mt-4 text-center">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                            </div>

                            <div class="mt-4 text-center">
                                <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock me-1"></i> Lupa Password?</a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
