<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminStreetController extends Controller
{
     public function index()
     {
          return view('admin.admin', ['page' => 'indexstreet']);
     }

     public function getAdd()
     {
          return view('admin.admin',['page'=>'detailstreet']);
     }

     public function postAdd()
     {
          return 'postAddstreet';
     }

     public function getEdit()
     {
          return view('admin.admin',['page'=>'detaileditstreet']);
     }

     public function putEdit()
     {
          return 'putEditstreet';
     }

     public function delete()
     {
          return 'deletestreet';
     }
}