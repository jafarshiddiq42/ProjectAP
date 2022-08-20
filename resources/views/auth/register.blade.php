@extends('layouts.tempregister')

{{-- @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

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
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
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
    <div class="card shadow-lg border-0 rounded-lg mt-5">
        <div class="card-header justify-content-center">
            <div class="row">
                <div class="col-2"> <img src="{{ asset('darulihsan.png') }}" class="" height="50px" alt=""> </div>
                <div class="col-7"> <h3 class="fw-light mt-3  "><b>Register Akun</b></h3></div>
            </div>
        </div>
        <div class="card-body">
            <!-- Registration form-->
            <form method="POST" action="{{ route('register') }}">
               @csrf
                <!-- Form Row-->
                <div class="row gx-3">
                    <div class="col">
                        <!-- Form Group (first name)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputFirstName">Nama</label>
                            <input class="form-control" name="name" id="inputFirstName" type="text" placeholder="Nama" />
                        
                        </div>
                    </div>
                </div>
                <!-- Form Group (email address)            -->
                <div class="mb-3">
                    <label class="small mb-1" for="inputEmailAddress">Nomor WhatsApp</label>
                    <input class="form-control" name="phone" id="inputEmailAddress" type="text" aria-describedby="emailHelp"
                        placeholder="Nomor WhatsApp" />
                </div>
                <!-- Form Row    -->
                <div class="row gx-3">
                    <div class="col-md-6">
                        <!-- Form Group (password)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputPassword">Password</label>
                            <input name="password" class="form-control" id="inputPassword" type="password" placeholder="password" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Form Group (confirm password)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputConfirmPassword">Ulangi Password</label>
                            <input name="password_confirmation" class="form-control" id="inputConfirmPassword" type="password"
                                placeholder="Ulangi password" />
                        </div>
                    </div>
                </div>
                <!-- Form Group (create account submit)-->
                <button type="submit" class="btn btn-primary btn-block"  >Daftar</button>
            </form>
        </div>
        <div class="card-footer text-center">
            <div class="small"><a href="/login">Sudah Punya akun? Login</a></div>
        </div>
    </div>
    </div>
@endsection
