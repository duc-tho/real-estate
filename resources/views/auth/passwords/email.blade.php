@extends('layouts.auth')
@section('title', 'Quên mật khẩu')
@section('form-action', route('password.email'))

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
@endsection

@section('actions')
    <div class="col-md-6 offset-md-3">
        <button type="submit" class="btn btn-danger-gradiant text-light">
            {{ __('Gửi liên kết đặt lại mật khẩu') }}
        </button>
    </div>
@endsection
