<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
     public function index()
     {
          return view('index.index', [
               'title' => 'Danh sách dự án',
               'page' => 'project'
          ]);
     }

     public function projectDetail()
     {
          return view('index.index', [
               'title' => 'Chi tiết dự án',
               'page' => 'project.detail'
          ]);
     }
}