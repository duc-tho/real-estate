<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDistrictController extends Controller
{
     public function index()
     {
          return view('admin.admin', [
               'page' => 'district.index',
               'page_title' => 'Quản Lý Quận / Huyện'
          ]);
     }

     public function getAdd()
     {
          return view('admin.admin', [
               'page' => 'district.detail',
               'page_title' => 'Chi Tiết Quận / Huyện'
          ]);
     }

     public function postAdd()
     {
          return 'postAdddistrict';
     }

     public function getEdit()
     {
          return view('admin.admin', [
               'page' => 'district.detail',
               'page_title' => 'Chi Tiết Quận / Huyện'
          ]);
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