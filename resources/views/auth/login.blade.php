@if (Auth::check())
    <script>
        window.location = '/'
    </script>
@endif

@extends('index-master')

@section('title', 'Đăng Nhập')

@section('head-import')
    <link rel="stylesheet" href="{{ asset('dist/css/admin/login.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
@endsection

@section('main')
    <div class="wrapper">
        <div class="banner6 py-5 d-flex" style="height: 100vh">
            <!-- Row  -->
            <div class="row w-100 justify-content-center align-items-center">
                <div class="container-fluid">
                    <div class="col-lg-7 align-justify-center pr-4 pl-0 contact-form">
                        <div>
                            <h2 class="mb-3 font-weight-light text-center">Đăng Nhập</h2>
                            @if (session('errMsg') !== null)
                                <h6 class="subtitle font-weight-normal text-danger">{{ session('errMsg') }}</h6>
                            @endif
                            @if (session('msg') !== null)
                                <div class="alert alert-success">
                                    {{ session('msg') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus
                                            placeholder="email@doamain.ext">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password"
                                            placeholder="ABCd@1234">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label " for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-success btn-sm">
                                            {{ __('Đăng nhập') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link text-muted" href="{{ route('password.request') }}">
                                                {{ __('Quên mật khẩu') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                {{-- <div class="col-lg-12 text-center mt-4">
                                        <h6 class="font-weight-normal">Signup with Social Accounts</h6>
                                        <div class="row">
                                             <div class="col-lg-6 col-md-6">
                                                  <a href="#" class="btn btn-block bg-facebook text-white mt-3">Facebook</a>
                                             </div>
                                             <div class="col-lg-6 col-md-6">
                                                  <a href="#" class="btn btn-block bg-twitter text-white mt-3">Twitter</a>
                                             </div>
                                        </div>
                                   </div> --}}
                                <div class="col-lg-12 text-center mt-5">
                                    Bạn chưa có tài khoản?
                                    <a href="{{ route('register') }}" class="text-danger">
                                        Đăng ký ngay
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 right-image pl-3" style="background-image:url({{ asset('dist/img/login-bg.jpg') }});">
                </div>
            </div>
        </div>
    </div>
@endsection
