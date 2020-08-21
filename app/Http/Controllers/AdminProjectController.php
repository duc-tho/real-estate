<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;
use Illuminate\Session;

class AdminProjectController extends Controller
{
     public function index()
     {
          return view('admin.admin', [
               'page' => 'project',
               'page_title' => 'Quản Lý Dự Án'
          ]);
     }

     public function getAdd()
     {
          return view('admin.admin', ['page' => 'project.detail']);
     }

     public function postAdd(Request $req)
     {
          // $data = array();
          // $data['Title'] = $req->name;
          // $data['Location'] = $req->address;
          // $data['Investor'] = $req->investor;
          // $data['NumberOfBlock'] = $req->block;
          // $data['NumberOfFloor'] = $req->floor;
          // $data['NumberOfApartment'] = $req->apartment;
          // $data['YearBuilt'] = $req->year;
          // $data['Price'] = $req->price;
          // $data['Description'] = $req->desc;
          // $data['Image'] = $req->img;
          // $data['Status'] = $req->status;

          // DB::table('project')->insert($data);
          // //Session::put('messege', 'Thêm danh mục sản phẩm thành công');
          return Redirect::to('admin.admin', ['page' => 'project']);
     }

     public function getEdit()
     {
          return view('admin.admin', ['page' => 'project.detail']);
     }

     public function putEdit()
     {
          return "Put Edit Project";
     }

     public function delete()
     {
          return "Delete Project";
     }
}