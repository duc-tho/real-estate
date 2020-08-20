<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDistrictController extends Controller
{
     public function index()
     {
          return view('admin.admin', ['page' => 'indexdistrict']);
     }

     public function getAdd()
     {
          return view('admin.admin', ['page' => 'detaildistrict']);
     }

     public function postAdd()
     {
          return 'postAdddistrict';
     }

     public function getEdit()
     {
          return view('admin.admin', ['page' => 'detaileditdistrict']);
     }

     public function putEdit()
     {
          return 'putEditdistrict';
     }

     public function delete()
     {
          return 'deletedistrict';
     }
}