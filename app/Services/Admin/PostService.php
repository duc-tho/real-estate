<?php

namespace App\Services\Admin;

use App\Models\Category;
use App\Models\Post;
use App\Models\Project;

class PostService {
     public function getAll()
     {
          $returns = [
               'title' => 'Quản Lý Bất Động Sản',
               'page' => 'post',
               'page_title' => 'Quản Lý Bất Động Sản',
               'data' => [
                    'posts' => Post::all(),
                    'categories' => Category::all(),
                    'propjects' => Project::all()
               ]
          ];

          return $returns;
     }

}
