<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddPostController extends Controller
{
     public function index(Request $req)
     {
          return view('index.index', [
               'page' => 'addPost.index',
               'title' => 'Đăng tin bất động sản',
          ]);
     }

     public function send(Request $req)
     {
     }
}
