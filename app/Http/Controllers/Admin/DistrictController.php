<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\District;
use Illuminate\Support\Str;
use App\Http\Requests\AddDistrictRequest;
use App\Http\Requests\EditDistrictRequest;
use App\Models\City;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
     public function index()
     {
          $data['districtlist'] = District::all();
          $data['city_list'] = City::all();
          return view('admin.admin', [
               'page' => 'district.index',
               'page_title' => 'Quản Lý Quận / Huyện'
          ], $data);
     }

     public function getAdd()
     {
          $data['citylist'] = City::all();
          return view('admin.admin', [
               'page' => 'district.detail',
               'page_title' => 'Chi Tiết Quận / Huyện'
          ], $data);
     }

     public function postAdd(AddDistrictRequest $request)
     {
          $district = new District();
          $district->Name = $request->name;
          $district->Slug = str::slug($request->slug);
          $district->CityId = $request->city;
          $image = [];
          $imgObjStr = '';
          $imgObj = [
               [
                    "id" => "all",
                    "name" => "Tất cả ảnh",
                    "imgList" => []
               ]
          ];
          if ($request->hasFile('Image')) {
               foreach ($request->Image as $file) {
                    $file_url = $file->store('/dist/img/upload/district', ['disk' => 'public_file']);
                    array_push($image, $file_url);
               }

               $imgObj[0]['imgList'] = $image;
          }
          $imgObjStr = json_encode($imgObj);
          $district->Image = $imgObjStr;

          $district->save();
          return back();
     }

     public function getEdit($id)
     {
          $data['district'] = District::find($id);
          $data['listcity'] = City::all();
          return view('admin.admin', [
               'page' => 'district.edit',
               'page_title' => 'Chi Tiết Quận / Huyện'
          ], $data);
     }

     public function putEdit(EditDistrictRequest $request, $id)
     {
          $district = new District();
          $arr['Name'] = $request->name;
          $arr['CityId'] = $request->city;
          $arr['Slug'] = str::slug($request->slug);

          $imgObjStr = '';
          $imgObj = json_decode($district->Image, true);

          if ($request->hasFile('Image')) {
               foreach ($request->Image as $file) {
                    $file_url = $file->store('/dist/img/upload/district', ['disk' => 'public_file']);
                    array_push($imgObj[0]['imgList'], $file_url);
               }
          }
          
          $imgObjStr = json_encode($imgObj);

          $request->merge(['Image' => $imgObjStr]);   
          $district::where('DistrictId', $id)->update($arr);
          return redirect('admin/district');
     }

     public function delete($id)
     {
          District::destroy($id);
          return back();
     }
}