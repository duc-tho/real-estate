<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
     public function index()
     {
          return view('index.project');
     }

     public function postCity()
     {
          return 'User City';
     }

     public function postDistrict()
     {
          return 'User District';
     }

     public function postArea()
     {
          return 'User Area';
     }

     public function postStreet()
     {
          return 'User Street';
     }

     public function postCategory()
     {
          return 'User Category';
     }

     public function postProject()
     {
          return 'User Project';
     }

     public function postDetail()
     {
          return 'User Detail';
     }
}