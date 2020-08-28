<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Project;
use App\User;
use Illuminate\Http\Request;

class MainController extends Controller
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