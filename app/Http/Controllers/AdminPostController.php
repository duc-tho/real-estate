<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPostController extends Controller
{
     public function index()
     {
          return view('admin.admin', [
               'page' => 'post',
               'page_title' => 'Quản Lý Bài Đăng'
          ]);
     }

     public function getAdd()
     {
          return view('admin.admin', ['page' => 'post.detail']);
     }

     public function postAdd()
     {
          return "Post Add Post";
     }

     public function getEdit()
     {
          return view('admin.admin', ['page' => 'post.detail']);
     }

     public function putEdit()
     {
          return "Put Edit Post";
     }

     public function delete()
     {
          return "Delete Post";
     }
}