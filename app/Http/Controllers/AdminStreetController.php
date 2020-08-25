<?php

namespace App\Http\Controllers;

use App\Models\Street;
use App\Models\Area;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AdminStreetController extends Controller
{
     public function index()
     {
          $streetList = Street::all();

          return view('admin.admin', [
               'page' => 'street.index',
               'page_title' => 'Quản Lý Đường',
               'data' => [
                    'street_list' => $streetList
               ]
          ]);
     }

     public function getAdd()
     {
          $data['area_list'] = Area::all();
          return view('admin.admin', [
               'page' => 'street.detail',
               'page_title' => 'Chi Tiết Phường / Xã'
          ], $data);
     }

     public function postAdd(Request $req)
     {
          $street = new Street();
          $street->Name = $req->name;
          $street->Status = $req->status;
          $street->Slug = str::slug($req->slug);
          $street->AreaId = $req->areaId;
          $street->save();
          return back();
     }

     public function getEdit()
     {
          // $streetData = Street::find($id);
          $streetList = Street::all();

          return view('admin.admin', [
               'page' => 'street.detail',
               'page_title' => 'Sửa Danh Mục',
               'data' => [
                    'street_list' => $streetList,
                    'street_info' => $streetData
               ]
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