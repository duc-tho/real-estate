<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminStreetController extends Controller
{
     public function index()
     {
          return view('admin.admin', [
               'page' => 'street.index',
               'page_title' => 'Quản Lý Đường'
          ]);
     }

     public function getAdd()
     {
          return view('admin.admin',[
               'page'=>'street.detail',
               'page_title' => 'Chi Tiết Đường'
          ]);
     }

     public function postAdd()
     {
          return 'postAddstreet';
     }

     public function getEdit()
     {
          return view('admin.admin',[
               'page'=>'street.detail',
               'page_title' => 'Chi Tiết Đường'
          ]);
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