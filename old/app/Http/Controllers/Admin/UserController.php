<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
     public function index()
     {
          return view('admin.admin', [
               'page' => 'user',
               'page_title' => 'Quản Lý Người Dùng'
          ]);
     }

     public function getAdd()
     {
          return view('admin.admin', ['page' => 'user.detail']);
     }

     public function postAdd()
     {
          return 'PostAdduser';
     }

     public function getEdit()
     {
          return view('admin.admin', ['page' => 'user.detail']);
     }

     public function putEdit()
     {
          return 'putEdituser';
     }

     public function delete()
     {
          return 'deleteuser';
     }
}