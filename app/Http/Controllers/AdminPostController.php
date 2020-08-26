<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\City;
use App\Models\District;
use App\Models\Post;
use App\Models\Project;
use App\Models\Street;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
     public function index()
     {
          $postList = Post::all();

          return view('admin.admin', [
               'title' => 'Quản Lý Bất Động Sản',
               'page' => 'post',
               'page_title' => 'Quản Lý Bất Động Sản',
               'data' => [
                    'post_list' => $postList
               ]
          ]);
     }

     public function getAdd()
     {
          $projectList = Project::all();
          $cityList = City::all();

          return view('admin.admin', [
               'title' => 'Thêm Bất Động Sản',
               'page' => 'post.detail',
               'page_title' => 'Thêm Bất Động Sản',
               'data' => [
                    'project_list' => $projectList,
                    'city_list' => $cityList
               ]
          ]);
     }

     public function postAdd()
     {
          return "Post Add Post";
     }

     public function getEdit($id)
     {
          $postData = Post::find($id);
          $postData->AreaId = Street::find($postData['StreetId'])->Area['AreaId'];
          $postData->DistrictId = Area::find($postData['AreaId'])->District['DistrictId'];
          $postData->CityId = District::find($postData['DistrictId'])->City['CityId'];
          $projectList = Project::all();
          $cityList = City::all();

          return view('admin.admin', [
               'title' => 'Sửa Bất Động Sản',
               'page' => 'post.detail',
               'page_title' => 'Sửa Bất Động Sản',
               'data' => [
                    'post_info' => $postData,
                    'project_list' => $projectList,
                    'city_list' => $cityList
               ]
          ]);
     }

     public function putEdit()
     {
          return "Put Edit Post";
     }

     public function delete()
     {
          return "Delete Post";
     }
}