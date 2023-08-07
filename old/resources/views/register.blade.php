@extends('index-master')

@section('title', 'Đăng Ký')

@section('head-import')
<link rel="stylesheet" href="{{ asset('dist/css/admin/login.css') }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
@endsection

@section('main')
<div class="wrapper">
     <div class="banner6 py-5 d-flex" style="min-height: 100vh">
          <!-- Row  -->
          <div class="row w-100 justify-content-center align-items-center">
               <div class="container">
                    <div class="col-lg-6 align-justify-center pr-4 pl-0 contact-form">
                         <div class="">
                              <h2 class="mb-3 font-weight-light text-center">Đăng Ký</h2>
                              {{-- <h6 class="subtitle font-weight-normal">Đăng ký thành viên</h6> --}}
                              @if (session('msg') !== null)
                              <div class="alert alert-danger">
                                   {{ session('msg') }}
                              </div>
                              @endif
                              @if ($errors->any())
                              @foreach ($errors->all() as $error)
                              <div class="alert alert-danger">
                                   {{ $error }}
                              </div>
                              @endforeach
                              @endif
                              <form class="mt-3" action="{{ route('register') }}" method="POST">
                                   @csrf
                                   <div class="row">
                                        <div class="col-lg-12">
                                             <div class="form-group">
                                                  <input class="form-control" name="Email" type="email" placeholder="Địa chỉ Email" value="{{ old('Email') }}">
                                             </div>
                                        </div>
                                        <div class=" col-lg-6">
                                             <div class="form-group">
                                                  <input class="form-control" name="LastName" type="text" placeholder="Họ" value="{{ old('LastName') }}">
                                             </div>
                                        </div>
                                        <div class=" col-lg-6">
                                             <div class="form-group">
                                                  <input class="form-control" name="FirstName" type="text" placeholder="Tên" value="{{ old('FirstName') }}">
                                             </div>
                                        </div>
                                        <div class=" col-lg-12">
                                             <div class="form-group">
                                                  <input class="form-control" name="PhoneNumber" type="text" placeholder="Số Điện Thoại" value="{{ old('PhoneNumber') }}">
                                             </div>
                                        </div>
                                        <div class=" col-lg-12">
                                             <div class="form-group">
                                                  <input class="form-control" name="Birthday" type="date" placeholder="Sinh Nhật" value="{{ old('Birthday') }}">
                                             </div>
                                        </div>
                                        <div class=" col-lg-12">
                                             <div class="form-group">
                                                  <select id="Gender" name="Gender" class="custom-select" value="{{ old('Gender') }}">
                                                       <option selected value="null">Giới Tính</option>
                                                       <option value="M">Nam</option>
                                                       <option value="F">Nữ</option>
                                                  </select>
                                             </div>
                                        </div>
                                        <div class="col-lg-12">
                                             <div class="form-group">
                                                  <input class="form-control" name="Username" type="text" placeholder="Tên Đăng Nhập" value="{{ old('Username') }}">
                                             </div>
                                        </div>
                                        <div class=" col-lg-12">
                                             <div class="form-group">
                                                  <input class="form-control" name="Password" type="password" placeholder="Mật Khẩu">
                                             </div>
                                        </div>

                                        <div class="col-lg-12">
                                             <button type="submit" class="btn btn-md btn-block btn-danger-gradiant text-white border-0"><span> Đăng Ký</span></button>
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
                                        Bạn đã có tài khoản? <a href="{{ route('login') }}" class="text-danger">Đăng nhập ngay</a>
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
