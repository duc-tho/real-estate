@extends('layouts.auth')
@section('title', 'Quên mật khẩu')
@section('form-action', route('password.email'))

@section('fields', json_encode(
    [
        [
            'label' => 'E-Mail',
            'name' => 'email',
            'required' => true,
            'type' => 'email',
            'autoFocus' => true,
        ],
    ]
))

@section('actions')
    <div class="col-6 mx-auto">
        <button type="submit" class="btn btn-danger-gradiant text-light text-nowrap w-100">
            {{ __('Gửi liên kết đặt lại mật khẩu') }}
        </button>
    </div>
@endsection
