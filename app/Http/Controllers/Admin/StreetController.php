<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Street;
use App\Models\Area;
use App\Models\District;
use App\Models\City;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StreetEditRequest;
use App\Http\Requests\StreetAddRequest;

class StreetController extends Controller
{
     public function index()
     {
          $streetList = Street::all();
          $areaList = Area::all();
          return view('admin.admin', [
               'page' => 'street.index',
               'page_title' => 'Quản Lý Đường',
               'data' => [
                    'street_list' => $streetList,
                    'area_list' => $areaList
               ]
          ]);
     }

     public function getAdd()
     {
          $city = City::all();
          $district = District::all();
          $streetData = Street::all();
          $area = Area::all();
          return view('admin.admin', [
               'page' => 'street.detail',
               'page_title' => 'Chi Tiết Đường',
               'data' => [
                    'street_list' => $streetData,
                    'district_list' => $district,
                    'city_list' => $city,
                    'area_list' => $area,
               ]
          ]);
     }

     public function postAdd(StreetAddRequest $req)
     {
          $street = new Street();
          $street->Name = $req->Name;
          $street->Status = $req->Status;
          $street->Slug = str::slug($req->Slug);
          $street->AreaId = $req->AreaId;
          $street->save();
          return back();
     }

     public function getEdit($id)
     {
          $streetData = Street::find($id);
          $streetList = Street::all();
          $city = City::all();
          $district = District::all();
          $area = Area::all();

          return view('admin.admin', [
               'page' => 'street.detail',
               'page_title' => 'Sửa Đường',
               'data' => [
                    'street_list' => $streetList,
                    'street_info' => $streetData,
                    'city_list' => $city,
                    'district_list' => $district,
                    'area_list' => $area,
               ]
          ]);
     }

     public function putEdit(StreetEditRequest $req, $id)
     {
          // if (!$req->filled(['AreaId', 'Name', 'Status', 'Slug'])) {
          //      return redirect()->route('adminStreetGetEdit', ['id' => $id])->withInput()->with([
          //           'err' => 'Sửa thông tin thất bại! Vui lòng điền đầy đủ thông tin'
          //      ]);
          // }

          $street = Street::find($id);
          $street->AreaId = $req->AreaId;
          $street->Name = $req->Name;
          $street->Status = $req->Status;
          $street->Slug = $req->Slug;
          $street->save();
          return redirect()->route("adminStreet");
     }

     public function delete($id)
     {
          Street::destroy($id);
          return redirect()->route("adminStreet");
     }
}