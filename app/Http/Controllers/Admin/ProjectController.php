<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\AddProjectRequest;
use Illuminate\Support\Str;
use Illuminate\Session;

class ProjectController extends Controller
{
     public function index()
     {
          $data['projectList'] = Project::all();

          return view('admin.admin', [
               'page' => 'project.index',
               'page_title' => 'Quản Lý Dự Án',
          ],$data);
     }

     public function getAdd()
     {
          $data['project_list'] = Project::all();
          return view('admin.admin', [
               'page' => 'project.detail',
               'page_title' => 'Chi Tiết Dự Án'
          ], $data);
     }

     public function postAdd(AddProjectRequest $req)
     {
          $filename = $req->img->getClientOriginalName();

          $project = new Project();
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
          
          $project->Image = $filename;
          $project->save();
          $req->img->storeAs('/dist/img/upload_project',$filename);
          return back();
          

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