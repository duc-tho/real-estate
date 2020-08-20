<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
     public function index()
     {
          return view('admin.admin', ['page' => 'indexcategory']);
     }

     public function getAdd()
     {
          return view('admin.admin', ['page' => 'detailcategory']);
     }

     public function postAdd()
     {
          return "Post Add Category";
     }

     public function getEdit()
     {
          return view('admin.admin', ['page' => 'detaileditcategory']);
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