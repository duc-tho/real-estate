<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\City;
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
          $projectList = Project::all();
          $cityList = City::all();
          //$categoryList = Category::all();
          return view('admin.admin', [
               'page' => 'project.detail',
               'page_title' => 'Chi Tiết Dự Án',
               'data' => [
                    'project_list' => $projectList,
                    'city_list' => $cityList,
               ]
          ]);
     }

     public function postAdd(Request $req)
     {

          $project = new Project();
          $project->Title = $req->Title;
          $project->Location = $req->Location;
          $project->Investor = $req->Investor;
          $project->NumberOfBlock = $req->NumberOfBlock;
          $project->NumberOfFloor = $req->NumberOfFloor;
          $project->NumberOfApartment = $req->NumberOfApartment;
          $project->AreaApartment = $req->AreaApartment;
          $project->TotalArea = $req->Totalarea;
          $project->BuildingDensity = $req->BuildingDensity;
          $project->YearBuilt = $req->YearBuilt;
          $project->Price = $req->Price;
          $project->Status = $req->Status;
          $project->Slug = str::slug($req->Slug);
          $project->Description = $req->Desciption;

          $image = [];
          if ($req->hasFile('Image')) {
               foreach ($req->Image as $file) {
                    $filename = $file->store('/dist/img/upload/project', ['disk' => 'public_file']);
                    array_push($image, $filename);
               }
          }
          $project = new Project($req->input());
          $project->Image = implode('|', preg_replace('/^\|+|\|+$/i', '', $image));
          $project->save();
          return redirect()->route("adminProject");
     }

     public function getEdit($id)
     {
          $projectData = Project::find($id);
          $projectList = Project::all();
          $cityList = City::all();

          return view('admin.admin', [
               'page' => 'project.detail',
               'page_title' => 'Sửa Danh Mục',
               'data' => [
                    'project_list' => $projectList,
                    'project_info' => $projectData,
                    'city_list' => $cityList,
               ]
          ]);
     }

     public function putEdit(Request $req, $id)
     {
          if (!$req->filled(['Title', 'Slug', 'Location', 'Investor', 'NumberOfBlock', 'NumberOfFloor', 'NumberOfApartment', 'AreaApartment', 'TotalArea', 'YearBuilt', 'BuildingDensity', 'Price', 'Status'])) {
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
          $project->Description = $req->Description;

          $image = [];

          if ($req->hasFile('Image')) {
               foreach ($req->Image as $file) {
                    $filename = $file->store('/dist/img/upload/project', ['disk' => 'public_file']);
                    array_push($image, $filename);
               }
          }

          $project->Image = preg_replace('/^\|+|\|+$/i', '', implode('|', $image) . '|' . $project->Image);

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