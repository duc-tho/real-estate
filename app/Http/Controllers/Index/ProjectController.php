<?php

namespace App\Http\Controllers\Index;

use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
     public function index()
     {
          $project_list = Project::all();
          return view('index.index', [
               'title' => 'Danh sách dự án',
               'page' => 'project',
               'data' => [
                    'project_list' => $project_list
               ]
          ]);
     }

     public function projectDetail($id)
     {
          $projectDetail = Project::where('ProjectId', $id)->get();
          return view('index.index', [
               'title' => 'Chi tiết dự án',
               'page' => 'project.detail',
               'data' => [
                    'project_detail' => $projectDetail
               ]
          ]);
     }
}