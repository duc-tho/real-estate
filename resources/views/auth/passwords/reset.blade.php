@extends('layouts.auth')
@section('title', 'Đặt lại mật khẩu')
@section('form-action', route('password.update'))

@section('fields')
    <input type="hidden" name="token" value="{{ $token }}">

    <div class="form-group row">
        <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('E-Mail') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('Mật khẩu mới') }}</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password-confirm" class="col-md-3 col-form-label text-md-right">{{ __('Xác nhận mật khẩu') }}</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                autocomplete="new-password">
        </div>
    </div>
@endsection


@section('actions')
    <div class="col-md-6 offset-md-3">
        <button type="submit" class="btn btn-primary">
            {{ __('Reset Password') }}
        </button>
    </div>
@endsection
