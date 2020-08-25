<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Project;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
     public function index()
     {
          return view('admin.admin', [
               'page' => 'dashboard',
               'page_title' => '',
               'data' => [
                    'count' => [
                         'project' => Project::count(),
                         'category' => Category::count(),
                         'post' => Post::count(),
                         'user' => User::count()
                    ]
               ],
          ]);
     }
}