<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
     public function authenticate(Request $req)
     {
          if (Auth::attempt(['email' => $req->input('Email'), 'password' => $req->input('Password')])) {
               return redirect()->route('home');
          } else {
               return redirect()->route('login')->withInput()->with(['errMsg' => 'Sai tên tài khoản hoặc mật khẩu!']);
          }
     }

     public function login()
     {
          if (Auth::check()) {
               return redirect()->route('home');
          }

          return view('login');
     }

     public function logout()
     {
          Auth::logout();
          return redirect()->route('home');
     }
}