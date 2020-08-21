<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCityController extends Controller
{
     public function index()
     {
          return view('admin.admin', ['page' => 'city']);
     }

     public function getAdd()
     {
          return view('admin.admin', ['page' => 'city.detail']);
     }

     public function postAdd()
     {
          return "Post Add City";
     }

     public function getEdit()
     {
          return view('admin.admin', ['page' => 'city.detail']);
     }

     public function putEdit()
     {
          return "Put Edit City";
     }

     public function delete()
     {
          return "Delete City";
     }
}