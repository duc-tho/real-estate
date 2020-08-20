@extends('master')

@section('title', 'Admin')

@section('head-import')
<link rel="stylesheet" href="{{ asset('dist/css/login.css') }}">
@endsection

@section('main')
<div class="wrapper">
     <div class="banner6 py-5 d-flex" style="height: 100vh">
          <!-- Row  -->
          <div class="row w-100 justify-content-center align-items-center">
               <div class="container">
                    <div class="col-lg-6 align-justify-center pr-4 pl-0 contact-form">
                         <div>
                              <h2 class="mb-3 font-weight-light text-center">Đăng Nhập</h2>
                              @if(session('errMsg') !== null)
                              <h6 class="subtitle font-weight-normal text-danger">{{ session('errMsg') }}</h6>
                              @endif
                              @if(session('msg') !== null)
                              <div class="alert alert-success">
                                   {{ session('msg') }}
                              </div>
                              @endif
                              <form class="mt-3" action="{{ route('auth') }}" method="POST">
                                   @csrf
                                   <div class="row">
                                        <div class="col-lg-12">
                                             <div class="form-group">
                                                  <input class="form-control" name="Email" type="text" placeholder="Địa chỉ Email" value="{{ old('Email') }}">
                                             </div>
                                        </div>
                                        <div class="col-lg-12">
                                             <div class="form-group">
                                                  <input class="form-control" name="Password" type="password" placeholder="Mật Khẩu">
                                             </div>
                                        </div>
                                        <div class="col-lg-12">
                                             <button type="submit" class="btn btn-md btn-block btn-danger-gradiant text-white border-0"><span> Đăng Nhập</span></button>
                                        </div>
                                   </div>
                              </form>
                              <div class="row">
                                   {{-- <div class="col-lg-12 text-center mt-4">
                                        <h6 class="font-weight-normal">Signup with Social Accounts</h6>
                                        <div class="row">
                                             <div class="col-lg-6 col-md-6">
                                                  <a href="#" class="btn btn-block bg-facebook text-white mt-3">Facebook</a>
                                             </div>
                                             <div class="col-lg-6 col-md-6">
                                                  <a href="#" class="btn btn-block bg-twitter text-white mt-3">Twitter</a>
                                             </div>
                                        </div>
                                   </div> --}}
                                   <div class="col-lg-12 text-center mt-4">
                                        Bạn chưa có tài khoản? <a href="{{ route('register') }}" class="text-danger">Đăng ký ngay</a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="col-lg-6 right-image pl-3" style="background-image:url({{ asset('dist/img/login-bg.jpg') }});">
               </div>
          </div>
     </div>
</div>
@endsection
