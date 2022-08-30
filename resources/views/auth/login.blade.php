@extends('layouts.templogin')

{{-- @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

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
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

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
@endsection --}}
@section('content')
     <!-- Basic login form-->
     <div class="card shadow-lg border-0 rounded-lg mt-5">
        <div class="card-header  justify-content-center">
            <div class="row">
                <div class="col-2"> <img src="{{ asset('darulihsan.png') }}" class="" height="50px" alt=""> </div>
                <div class="col-7"> <h3 class="fw-light mt-3  "><b>LOGIN</b></h3></div>
            </div>
           </div>
        <div class="card-body">
            <!-- Login form-->
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <!-- Form Group (email address)-->
                <div class="mb-3">
                    <label class="small mb-1" for="inputEmailAddress">NIK</label>
                    <input id="email" type="text"
                    class="form-control @error('nik') is-invalid @enderror" name="nik"
                    value="{{ old('nik') }}" required autocomplete="email" autofocus>

                @error('nik')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <!-- Form Group (password)-->
                <div class="mb-3">
                    <label class="small mb-1" for="inputPassword">Password</label>
                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                </div>
                <!-- Form Group (remember password checkbox)-->
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="rememberPasswordCheck">Ingat Saya</label>
                    </div>
                </div>
                <!-- Form Group (login box)-->
                <div class="d-flex align-items-center justify-content-between mt-4 mb-0"    >
                    {{-- <a class="small" href="auth-password-basic.html">Forgot Password?</a> --}}
                    <button type="submit" class="btn btn-primary " >
                        Masuk
                    </button>
                </div>
            </form>
        </div>
        <div class="card-footer text-center">
            <div class="small"><a href="/register">Belum mempunyai Akun? Daftar Sekarang!</a></div>
        </div>
    </div>
@endsection