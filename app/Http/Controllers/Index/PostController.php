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
          return 'Post City';
     }

     public function postDistrict()
     {
          return 'Post District';
     }

     public function postArea()
     {
          return 'Post Area';
     }

     public function postStreet()
     {
          return 'Post Street';
     }

     public function postCategory()
     {
          return 'Post Category';
     }

     public function postProject()
     {
          return 'Post Project';
     }

     public function postDetail()
     {
          return 'Post Detail';
     }
}