<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Session;

class AdminProjectController extends Controller
{
     public function index()
     {
          $projectList = Project::all();

          return view('admin.admin', [
               'page' => 'project',
               'page_title' => 'Quản Lý Dự Án',
               'data' => [
                    'project_list' => $projectList
               ]
          ]);
     }

     public function getAdd()
     {
          $data['project_list'] = Project::all();
          return view('admin.admin', [
               'page' => 'project.detail',
               'page_title' => 'Chi Tiết Dự Án'
          ], $data);
     }

     public function postAdd(Request $req)
     {
          $project = new Project();
          $project->Title = $req->title;
          $project->Slug = str::slug($req->slug);
          $project->Location = $req->location;
          $project->Investor = $req->investor;
          $project->NumberOfBlock = $req->block;
          $project->NumberOfFloor = $req->floor;
          $project->NumberOfApartment = $req->apartment;
          $project->AreaApartment = $req->area;
          $project->TotalArea = $req->totalarea;
          $project->YearBuilt = $req->year;
          $project->BuildingDensity = $req->density;
          $project->Price = $req->price;
          $project->Description = $req->desc;
          $project->Image = $req->image;
          $project->Status = $req->status;

          $project->save();
          return back();
     }

     public function getEdit()
     {
          return view('admin.admin', ['page' => 'project.detail']);
     }

     public function putEdit()
     {
          return "Put Edit Project";
     }

     public function delete($id)
     {
          Project::destroy($id);
          return redirect()->route("adminProject");
     }
}