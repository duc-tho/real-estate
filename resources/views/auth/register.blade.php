@extends('layouts.auth')
@section('title', 'Đăng ký')
@section('form-action', route('register'))

@section('fields')
    <div class="form-group row">
        <label for="last_name" class="col-md-3 col-form-label text-md-right">{{ __('Họ') }}</label>

        <div class="col-md-6">
            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

            @error('last_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="first_name" class="col-md-3 col-form-label text-md-right">{{ __('Tên') }}</label>

        <div class="col-md-6">
            <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror"
                name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

            @error('first_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="phone_number" class="col-md-3 col-form-label text-md-right">{{ __('Số điện thoại') }}</label>

        <div class="col-md-6">
            <input id="phone_number" type="tel" class="form-control @error('phone_number') is-invalid @enderror"
                name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>

            @error('phone_number')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="gender" class="col-md-3 col-form-label text-md-right">
            {{ __('Giới tính') }}
        </label>

        <div class="col-md-6">
            <div class="form-group m-0">
                <select id="gender" name="gender" class="custom-select" value="{{ old('gender') }}">
                    <option {{ old('gender') === 'null' ? 'selected' : '' }} value="null">
                        Chọn</option>
                    <option {{ old('gender') === 'M' ? 'selected' : '' }} value="M">Nam
                    </option>
                    <option {{ old('gender') === 'F' ? 'selected' : '' }} value="F">Nữ
                    </option>
                </select>
            </div>

            @error('gender')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="birthday" class="col-md-3 col-form-label text-md-right">{{ __('Sinh nhật') }}</label>

        <div class="col-md-6">
            <input id="birthday" type="date" class="form-control @error('birthday') is-invalid @enderror"
                name="birthday" value="{{ old('birthday') }}" required autocomplete="birthday" autofocus>

            @error('birthday')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('E-Mail') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email">

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
                name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password-confirm" class="col-md-3 col-form-label text-md-right">{{ __('Nhập lại mật khẩu') }}</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                autocomplete="new-password">
        </div>
    </div>
@endsection

@section('actions')
    <div class="col-md-6 offset-md-3">
        <button type="submit" class="btn-danger-gradiant text-light btn col-12">
            {{ __('Đăng ký') }}
        </button>
    </div>
@endsection

@section('messages')
    <div class="col-lg-12 text-center mt-5">
        Bạn đã có tài khoản?
        <a href="{{ route('login') }}" class="text-danger">Đăng nhập ngay</a>
    </div>
@endsection
