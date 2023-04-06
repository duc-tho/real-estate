@extends('layouts.auth')
@section('title', 'Đăng ký')
@section('form-action', route('register'))

@section('fields', json_encode(
    [
        ['label' => 'Họ', 'name' => 'last_name', 'required' => true, 'autoFocus' => true],
        ['label' => 'Tên', 'name' => 'first_name', 'required' => true],
        ['label' => 'Số điện thoại', 'name' => 'phone_number', 'required' => true, 'type' => 'tel'],
        [
            'label' => 'Giới tính',
            'name' => 'gender',
            'required' => true,
            'type' => 'select',
            'selectOptions' => [
                ['label' => 'Nam', 'value' => 'M'],
                ['label' => 'Nữ', 'value' => 'F'],
            ],
        ],
        ['label' => 'Sinh nhật', 'name' => 'birthday', 'required' => true, 'type' => 'date'],
        ['label' => 'E-Mail', 'name' => 'email', 'required' => true, 'type' => 'email'],
        ['label' => 'Mật khẩu', 'name' => 'password', 'required' => true, 'type' => 'password'],
        ['label' => 'Nhập lại mật khẩu', 'name' => 'password-confirm', 'required' => true, 'type' => 'password'],
    ]
))

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
