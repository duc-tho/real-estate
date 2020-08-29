<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index()
     {
          $project_list = Project::all();
          return view('index.index', [
               'title' => 'Trang chủ',
               'page' => 'home',
               'data' => [
                    'project_list' => $project_list
               ]
          ]);
     }
}