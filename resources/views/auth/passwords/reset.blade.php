@extends('layouts.auth')
@section('title', 'Đặt lại mật khẩu')
@section('form-action', route('password.update'))

@section('fields', json_encode(
    [
        ['name' => 'token', 'type' => 'hidden', 'value' => $token],
        ['label' => 'E-Mail', 'name' => 'email', 'required' => true, 'type' => 'email', 'autoFocus' => true, 'value' => $email],
        ['label' => 'Mật khẩu mới', 'name' => 'password', 'required' => true, 'type' => 'password'],
        ['label' => 'Nhập lại mật khẩu', 'name' => 'password_confirmation', 'required' => true, 'type' => 'password'],
    ]
))

@section('actions')
    <div class="col-6 mx-auto">
        <button type="submit" class="btn btn-danger-gradiant text-light text-nowrap w-100">
            {{ __('Đặt lại') }}
        </button>
    </div>
@endsection
