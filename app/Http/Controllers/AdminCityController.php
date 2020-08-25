<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddCityRequest;
use App\Http\Requests\EditCityRequest;
use App\Models\City;
use Illuminate\Support\Str;

class AdminCityController extends Controller
{
     public function index()
     {
          $data['citylist'] = City::all();
          return view('admin.admin', [
               'page' => 'city',
               'page_title' => 'Quản Lý Thành Phố'
          ],$data);
     }

     public function getAdd()
     {
          return view('admin.admin', [
               'page' => 'city.detail',
               'page_title' => 'Thêm Thành Phố'
          ]);
     }

     public function postAdd(AddCityRequest $request)
     {
        $city = new City();
        $city->Name = $request->name;
        $city->Status = $request->status;
        $city->Slug = str::slug($request->slug);
        $city->save();
        return back();
      
     }

     public function getEdit($id)
     {
          $data['city'] = City::find($id);
          return view('admin.admin', [
               'page' => 'city.edit',
               'page_title' => 'Sửa Chi Tiết Thành Phố'
          ],$data);
     }

     public function putEdit(EditCityRequest $request, $id)
     {
          $city = new City();
          $arr['Name'] = $request->name;
          $arr['Status'] = $request->status;
          $arr['Slug'] = str::slug($request->slug);
          $city::where('CityId',$id)->update($arr);
          return redirect('admin/city');
     }

     public function delete($id)
     {
          City::destroy($id);
          return back();
     }
}