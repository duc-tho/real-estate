@extends('layouts.auth')
@section('title', 'Xác minh email')

@section('messages')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Một liên kết xác minh mới đã đuợc gửi đến E-Mail của bạn!') }}
                        </div>
                    @endif

                    {{ __('Trước khi tiếp tục bạn cần phải xác minhn email của mình.') }}
                    {{ __('Nếu bạn chưa nhận được email xác minh') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline text-danger">{{ __('hãy nhấn vào đây để gửi lại') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
