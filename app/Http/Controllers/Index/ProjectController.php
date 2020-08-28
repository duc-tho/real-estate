<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
     public function index()
     {
          return 'Project';
     }

     public function projectDetail()
     {
          return 'Project Detail';
     }
}