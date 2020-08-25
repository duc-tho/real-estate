<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\District;
use Illuminate\Support\Str;
use App\Http\Requests\AddAreaRequest;
use App\Http\Requests\EditAreaRequest;
use Illuminate\Http\Request;

class AdminAreaController extends Controller
{
     public function index()
     {
          $data['arealist'] = Area::all();
          return view('admin.admin', [
               'page' => 'area.index',
               'page_title' => 'Quản Lý Phường / Xã'
          ],$data);
     }

     public function getAdd()
     {
          $data['dislist'] = District::all();
          return view('admin.admin', [
               'page' => 'area.detail',
               'page_title' => 'Chi Tiết Phường / Xã'
          ], $data);
     }

     public function postAdd(AddAreaRequest $request)
     {
          $area = new Area();
          $area->Name = $request->name;
          $area->Status = $request->status;
          $area->Slug = str::slug($request->slug);
          $area->DistrictId = $request->district;
          $area->save();
          return back();;
     }

     public function getEdit($id)
     {
          $data['area'] = Area::find($id);
          $data['listdis'] = District::all();
          return view('admin.admin', [
               'page' => 'area.edit',
               'page_title' => 'Chi Tiết Phường / Xã'
          ],$data);
     }

     public function putEdit(EditAreaRequest $request , $id)
     {
          $area = new Area();
          $arr['Name'] = $request->name;
          $arr['Status'] = $request->status;
          $arr['DistrictId'] = $request->dis;
          $arr['Slug'] = str::slug($request->slug);
          $area::where('AreaId',$id)->update($arr);
          return redirect('admin/area');
     }

     public function delete($id)
     {
          Area::destroy($id);
          return back();
     }
}