<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProjectController extends Controller
{
     public function index()
     {
          return view('admin.admin', ['page' => 'project']);
     }

     public function postAdd()
     {
          return "Post Add Project";
     }

     public function getEdit()
     {
          return "Get Edit Project";
     }

     public function putEdit()
     {
          return "Put Edit Project";
     }

     public function delete()
     {
          return "Delete Project";
     }
}