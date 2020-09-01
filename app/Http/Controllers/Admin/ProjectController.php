<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\AddProjectRequest;
use App\Models\City;
use Illuminate\Support\Str;
use Illuminate\Session;

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
                    //'category_list' => $categoryList
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
          $project->Image = implode('|', $image);
          $project->save();
          //$req->img->move('dist/img/upload/project', $filename);
          return redirect()->route("adminProject");
     }

     public function getEdit($id)
     {
          $projectData = Project::find($id);
          $projectList = Project::all();

          return view('admin.admin', [
               'page' => 'project.detail',
               'page_title' => 'Sửa Danh Mục',
               'data' => [
                    'project_list' => $projectList,
                    'project_info' => $projectData
               ]
          ]);
     }

     public function putEdit(Request $req, $id)
     {


          // if (!$req->filled(['Title', 'Slug', 'Location', 'Investor', 'NumberOfBlock', 'NumberOfFloor', 'NumberOfApartment', 'AreaApartment', 'TotakArea', 'YearBuilt', 'BuildingDensity', 'Price', 'Description', 'Image', 'Status'])) {
          //      return redirect()->route('adminProjectGetEdit', ['id' => $id])->withInput()->with([
          //           'err' => 'Sửa thông tin thất bại! Vui lòng điền đầy đủ thông tin'
          //      ]);
          // }

          $project = Project::find($id);
          $project->Title = $req->Title;
          $project->Slug = str::slug($req->Slug);
          $project->Location = $req->Location;
          $project->Investor = $req->Investor;
          $project->NumberOfBlock = $req->Block;
          $project->NumberOfFloor = $req->Floor;
          $project->NumberOfApartment = $req->Apartment;
          $project->AreaApartment = $req->Area;
          $project->TotalArea = $req->Totalarea;
          $project->YearBuilt = $req->Year;
          $project->BuildingDensity = $req->Density;
          $project->Price = $req->Price;
          $project->Description = $req->Desc;

          // $img = $req->Image;
          // $destinationPath = public_path('public\dist\img\uploads\project');
          // $img->move($destinationPath, $img);
          // $project->Image = $img;

          $image = [];

          if ($req->hasFile('Image')) {
               foreach ($req->Image as $file) {
                    $filename = $file->store('/dist/img/upload/project', ['disk' => 'public_file']);
                    array_push($image, $filename);
               }
          }
          //$project->UserId = Auth::user()->UserId;
          $project->Image = implode('|', $image);

          //$project->Image   = $req->Image;
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