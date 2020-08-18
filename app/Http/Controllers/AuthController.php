<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
     public function login()
     {
          return 'login';
     }

     public function authenticate()
     {
          return 'authenticate';
     }

     public function logout()
     {
          return 'logout';
     }
}