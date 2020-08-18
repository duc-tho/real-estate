<?php

namespace App\Http\Controllers;

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