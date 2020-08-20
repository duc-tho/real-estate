<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAreaController extends Controller
{
     public function index()
     {
          return view('admin.admin', ['page' => 'indexarea']);
     }

     public function getAdd()
     {
          return view('admin.admin', ['page' => 'detailarea']);
     }

     public function postAdd()
     {
          return 'postAddarea';
     }

     public function getEdit()
     {
          return view('admin.admin', ['page' => 'detaileditarea']);
     }

     public function putEdit()
     {
          return 'putEditarea';
     }

     public function delete()
     {
          return 'deletearea';
     }
}