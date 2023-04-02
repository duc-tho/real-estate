@extends('layouts.master')

{{--
    Section:
    - title
    - route
    - fields
    - actions
    - messages
--}}
@section('content')
    <div class="wrapper">
        <div class="auth-page d-flex justify-content-center align-items-center">
            <div class="row w-100">
                <div class="container-fluid">
                    <div class="col-lg-7 align-justify-center contact-form overflow-auto pr-0">
                        <div class="w-100 py-5 auth-content" >
                            <h2 class="mb-5 font-weight-light text-center">
                                @yield('title')
                            </h2>
                            @if (session('status'))
                                <div class="alert alert-success col-md-6 mx-auto" role="alert">
                                    {{ session('status') }}ádasd
                                </div>
                            @endif
                            <form method="POST" action="@yield('form-action')">
                                @csrf

                                @yield('fields')

                                <div class="form-group row mb-0">
                                    @yield('actions')
                                </div>
                            </form>
                            <div class="col-lg-12 text-center mt-5">
                                @yield('messages')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 right-image pl-3" style="background-image: url({{ asset('dist/img/login-bg.jpg') }});">
                </div>
            </div>
        </div>
    </div>
@endsection
