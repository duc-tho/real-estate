@extends('client.index')
@section('title', 'Đăng Nhập')

@section('content')
    <div class="wrapper">
        <div class="auth-page py-5 d-flex">
            <div class="row w-100 justify-content-center align-items-center">
                <div class="container-fluid">
                    <div class="col-lg-7 align-justify-center pr-4 pl-0 contact-form">
                        <div>
                            <h2 class="mb-5 font-weight-light text-center">Đăng Nhập</h2>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

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

                                <div class="form-group row">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Mật khẩu') }}</label>

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

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label " for="remember">
                                                {{ __('Ghi nhớ đăng nhập') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn-danger-gradiant text-light btn btn-sm">
                                            {{ __('Đăng nhập') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="ml-3 btn btn-sm text-decoration-none"
                                                href="{{ route('password.request') }}">
                                                {{ __('Quên mật khẩu') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                            <div class="col-lg-12 text-center mt-5">
                                Bạn chưa có tài khoản?
                                <a href="{{ route('register') }}" class="text-danger">Đăng ký ngay</a>
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
