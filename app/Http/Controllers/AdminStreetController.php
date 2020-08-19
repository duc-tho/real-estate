<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminStreetController extends Controller
{
     public function index()
     {
          return view('admin.admin', ['page' => 'street']);
     }

     public function getAdd()
     {
          return 'getAddstreet';
     }

     public function postAdd()
     {
          return 'postAddstreet';
     }

     public function getEdit()
     {

          return 'getEditstreet';
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