<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class AuthController extends Controller
{
     public function authenticate(Request $req)
     {
          if (Auth::attempt(['email' => $req->input('Email'), 'password' => $req->input('Password')])) {
               $previousLoginUrl = $req->session()->get('previousLoginUrl', '');
               $req->session()->flash('previousLoginUrl', '');

               if ($previousLoginUrl != '') {
                    return redirect()->to($previousLoginUrl);
               }

               return redirect()->route('home');
          } else {
               return redirect()->route('login')->withInput()->with(['errMsg' => 'Sai tên tài khoản hoặc mật khẩu!']);
          }
     }

     public function login(Request $request)
     {
          $request->session()->flash('previousLoginUrl', URL::previous());

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
