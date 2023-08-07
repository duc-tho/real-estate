@extends('layouts.auth')
@section('title', 'Đăng Nhập')
@section('form-action', route('login'))

@section('fields', json_encode(
    [
        ['label' => 'E-Mail', 'name' => 'email', 'required' => true, 'type' => 'email'],
        ['label' => 'Mật khẩu', 'name' => 'password', 'required' => true, 'type' => 'password'],
        ['label' => 'Duy trì đăng nhập', 'name' => 'remember', 'type' => 'checkbox'],
    ]
))

@section('actions')
    <div class="col-12 d-md-flex justify-content-between flex-md-row-reverse">
        <button type="submit" class="col-md-6 mx-md-4 btn-danger-gradiant text-light btn">
            <i class="fa-solid fa-arrow-right-to-bracket mr-2"></i>
            {{ __('Đăng nhập') }}
        </button>

        @if (Route::has('password.request'))
            <a class="btn text-decoration-none btn-light col-12 col-md-3 mt-2 mt-md-0 text-nowrap" href="{{ route('password.request') }}">
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
