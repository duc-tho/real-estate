<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAreaController extends Controller
{
     public function index()
     {
          return view('admin.admin', [
               'page' => 'area.index',
               'page_title' => 'Quản Lý Phường / Xã'
          ]);
     }

     public function getAdd()
     {
          return view('admin.admin', [
               'page' => 'area.detail',
               'page_title' => 'Chi Tiết Phường / Xã'
          ]);
     }

     public function postAdd()
     {
          return 'postAddarea';
     }

     public function getEdit()
     {
          return view('admin.admin', [
               'page' => 'area.detail',
               'page_title' => 'Chi Tiết Phường / Xã'
          ]);
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