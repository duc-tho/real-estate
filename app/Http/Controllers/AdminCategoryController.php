<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
     public function index()
     {
          return view('admin.admin', [
               'page' => 'category.index',
               'page_title' => 'Quản Lý Danh Mục'
               ]);
     }

     public function getAdd()
     {
          return view('admin.admin', [
               'page' => 'category.detail',
               'page_title' => 'Chi Tiết Danh Mục'
          ]);
     }

     public function postAdd()
     {
          return "Post Add Category";
     }

     public function getEdit()
     {
          return view('admin.admin', [
               'page' => 'category.detail',
               'page_title' => 'Chi Tiết Danh Mục'
          ]);
     }

     public function putEdit()
     {
          return 'put edit';
     }

     public function delete()
     {
          return "Delete Category";
     }
}