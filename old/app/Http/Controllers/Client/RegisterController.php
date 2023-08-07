<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
     public function index()
     {
          if (Auth::check()) {
               return redirect()->route('home');
          }

          return view('register');
     }

     public function register(Request $req)
     {
          if (!$req->filled([
               'Email', 'Password',
               'FirstName', 'LastName', 'PhoneNumber',
               'Gender', 'Username', 'Birthday'
          ])) {

               $req->validate([
                    'Email' => 'required',
                    'Password' => 'required',
                    'FirstName' => 'required',
                    'Birthday' => 'required',
                    'LastName' => 'required',
                    'PhoneNumber' => 'required',
                    'Gender' => 'required',
                    'Username' => 'required',
               ]);
               return redirect()->route('registerView')->withInput();
          }

          $user = new User($req->input());
          $user->Password = Hash::make($req->input('password'));
          $user->RoleId = 1;
          $user->Status = 1;
          $user->ProfileImage = 'dist/img/default_profile.png';

          try {
               $user->save();
          } catch (\Throwable $th) {
               dd($th);
               return redirect()->route('registerView')->withInput()->with(['msg' => 'Đã có lỗi xảy ra khi đăng ký!']);
          }

          return redirect()->route('login')->with(['msg' => 'Đăng Ký Thành Công!']);
     }
}
