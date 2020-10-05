<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\ProjectAddRequest;
use App\Http\Requests\ProjectEditRequest;
use App\Models\Street;
use App\Models\City;
use App\Models\District;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
     public function index()
     {
          $data['projectList'] = Project::all();
          $data['area_list'] = City::all();

          return view('admin.admin', [
               'page' => 'project.index',
               'page_title' => 'Quản Lý Dự Án',
          ], $data);
     }

     public function getAdd()
     {
          $street = Street::all();
          $district = District::all();
          $area = Area::all();
          $projectList = Project::all();
          $cityList = City::all();

          return view('admin.admin', [
               'page' => 'project.detail',
               'page_title' => 'Thêm Dự Án',
               'data' => [
                    'project_list' => $projectList,
                    'city_list' => $cityList,
                    'street_list' => $street,
                    'district_list' => $district,
                    'area_list' => $area,
               ]
          ]);
     }

     public function postAdd(ProjectAddRequest $req)
     {
          $project = new Project();
          $project->Title = $req->Title;
          $project->Location = $req->Location;
          $project->Investor = $req->Investor;
          $project->NumberOfBlock = $req->NumberOfBlock;
          $project->NumberOfFloor = $req->NumberOfFloor;
          $project->NumberOfApartment = $req->NumberOfApartment;
          $project->AreaApartment = $req->AreaApartment;
          $project->TotalArea = $req->TotalArea;
          $project->BuildingDensity = $req->BuildingDensity;
          $project->YearBuilt = $req->YearBuilt;
          $project->Price = $req->Price;
          $project->Status = $req->Status;
          $project->Slug = str::slug($req->Slug);
          $project->Promotion = $req->Promotion;
          $project->Utility = $req->Utility;
          $project->GroundDesign = $req->GroundDesign;
          $project->InfrastructureLocation = $req->InfrastructureLocation;
          $project->StreetId = $req->StreetId;
          $project->Progress = $req->Progress;

          $image = [];
          $imgObjStr = '';
          $imgObj = [
               [
                    "id" => "all",
                    "name" => "Tất cả ảnh",
                    "imgList" => []
               ]
          ];


          if ($req->hasFile('Image')) {
               foreach ($req->Image as $file) {
                    $file_url = $file->store('/dist/img/upload/project', ['disk' => 'public_file']);
                    array_push($image, $file_url);
               }

               $imgObj[0]['imgList'] = $image;
          }

          if ($req->filled('ImageGroup')) {
               foreach (json_decode($req->ImageGroup) as $group) {
                    array_push($imgObj, $group);
               }
          }

          $imgObjStr = json_encode($imgObj);

          $project->Image = $imgObjStr;
          $project->save();

          return redirect()->route("adminProject");
     }

     public function getEdit($id)
     {
          $projectData = Project::find($id);

          if ($projectData === null) return abort(404);

          $projectData->AreaId = Street::find($projectData['StreetId'])->Area['AreaId'];
          $projectData->DistrictId = Area::find($projectData['AreaId'])->District['DistrictId'];
          $projectData->CityId = District::find($projectData['DistrictId'])->City['CityId'];
          $projectList = Project::all();
          $cityList = City::all();
          $districtList = City::find($projectData->CityId)->District;
          $areaList = District::find($projectData->DistrictId)->Area;
          $streetList = Area::find($projectData->AreaId)->Street;

          return view('admin.admin', [
               'page' => 'project.detail',
               'page_title' => 'Sửa Dự Án',
               'data' => [
                    'project_list' => $projectList,
                    'project_info' => $projectData,
                    'city_list' => $cityList,
                    'district_list' => $districtList,
                    'area_list' => $areaList,
                    'street_list' => $streetList
               ]
          ]);
     }

     public function putEdit(ProjectEditRequest $req, $id)
     {
          if (!$req->filled(['Title', 'Slug', 'Investor', 'NumberOfBlock', 'NumberOfFloor', 'NumberOfApartment', 'AreaApartment', 'TotalArea', 'YearBuilt', 'BuildingDensity', 'Price', 'Status'])) {
               return redirect()->route('adminProjectGetEdit', ['id' => $id])->withInput()->with([
                    'err' => 'Sửa thông tin thất bại! Vui lòng điền đầy đủ thông tin'
               ]);
          }

          $project = Project::find($id);
          $project->Title = $req->Title;
          $project->Location = $req->Location;
          $project->Investor = $req->Investor;
          $project->NumberOfBlock = $req->NumberOfBlock;
          $project->NumberOfFloor = $req->NumberOfFloor;
          $project->NumberOfApartment = $req->NumberOfApartment;
          $project->AreaApartment = $req->AreaApartment;
          $project->TotalArea = $req->TotalArea;
          $project->BuildingDensity = $req->BuildingDensity;
          $project->YearBuilt = $req->YearBuilt;
          $project->Price = $req->Price;
          $project->Status = $req->Status;
          $project->Slug = str::slug($req->Slug);
          $project->Promotion = $req->Promotion;
          $project->Utility = $req->Utility;
          $project->GroundDesign = $req->GroundDesign;
          $project->InfrastructureLocation = $req->InfrastructureLocation;
          $project->Progress = $req->Progress;
          $project->StreetId = $req->StreetId;

          $imgObjStr = '';
          $imgObj = json_decode($project->Image, true);
          $new_img_obj = [];

          if ($req->hasFile('Image')) {
               foreach ($req->Image as $file) {
                    $file_url = $file->store('/dist/img/upload/project', ['disk' => 'public_file']);
                    array_push($imgObj[0]['imgList'], $file_url);
               }
          }

          if ($req->has('ImageGroup') && !empty($req->input('ImageGroup'))) {
               array_push($new_img_obj, $imgObj[0]);

               foreach (json_decode($req->ImageGroup) as $group) {
                    array_push($new_img_obj, $group);
               }

               $imgObjStr = json_encode($new_img_obj);
          } else {
               $imgObjStr = json_encode($imgObj);
          }

          $project->Image = $imgObjStr;

          $project->Status = $req->Status;
          $project->save();

          return redirect()->route("adminProject");
     }

     public function delete($id)
     {
          Project::destroy($id);
          return redirect()->route("adminProject");
     }
}