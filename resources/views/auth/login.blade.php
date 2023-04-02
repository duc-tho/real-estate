@extends('layouts.auth')
@section('title', 'Đăng Nhập')
@section('form-action', route('login'))

@section('fields')
    <div class="form-group row">
        <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('E-Mail') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('Mật khẩu') }}</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-6 offset-md-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label " for="remember">
                    {{ __('Duy trì đăng nhập') }}
                </label>
            </div>
        </div>
    </div>
@endsection

@section('actions')
    <div class="col-md-6 offset-md-3 d-flex justify-content-between">
        <button type="submit" class="col-md-8 btn-danger-gradiant text-light btn">
            {{ __('Đăng nhập') }}
        </button>

        @if (Route::has('password.request'))
            <a class="btn text-decoration-none btn-light" href="{{ route('password.request') }}">
                {{ __('Quên mật khẩu') }}
            </a>
        @endif
    </div>
@endsection

@section('messages')
    <div class="col-lg-12 text-center mt-5">
        Bạn chưa có tài khoản?
        <a href="{{ route('register') }}" class="text-danger">Đăng ký ngay</a>
    </div>
@endsection
