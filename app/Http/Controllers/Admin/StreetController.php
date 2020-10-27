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

          return view('admin.admin', [
               'page' => 'street.detail',
               'page_title' => 'Thêm Đường',
               'data' => [
                    'city_list' => $city,
               ]
          ]);
     }

     public function postAdd(StreetAddRequest $req)
     {
          $street = new Street();
          $street->Name = $req->Name;
          $street->Slug = str::slug($req->Slug);
          $street->AreaId = $req->AreaId;
          $street->save();
          return back();
     }

     public function getEdit($id)
     {
          $streetData = Street::find($id);
          $streetData->Area = $streetData->Area;
          $streetData->District = $streetData->Area->District;
          $streetData->City = $streetData->District->City;

          $city = City::all();
          $district = City::find($streetData->City->CityId)->District;
          $area = District::find($streetData->District->DistrictId)->Area;

          return view('admin.admin', [
               'page' => 'street.detail',
               'page_title' => 'Sửa Đường',
               'data' => [
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