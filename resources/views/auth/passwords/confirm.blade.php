@extends('layouts.auth')
@section('title', 'Xác nhận mật khẩu')
@section('form-action', route('password.confirm'))

@section('fields', json_encode(
    [
        [
            'label' => 'Mật khẩu',
            'name' => 'password',
            'required' => true,
            'type' => 'password',
            'autoFocus' => true
        ]
    ]
))

@section('actions')
    <div class="col-md-8 mx-auto">
        <button type="submit" class="btn btn-danger-gradiant w-100 text-light">
            {{ __('Xác nhận mật khẩu') }}
        </button>
    </div>
@endsection

@section('messages')
    @if (Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Quên mật khẩu') }}
        </a>
    @endif
@endsection
