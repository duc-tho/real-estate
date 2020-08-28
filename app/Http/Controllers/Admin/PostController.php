<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Category;
use App\Models\City;
use App\Models\District;
use App\Models\Post;
use App\Models\Project;
use App\Models\Street;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
     public function index()
     {
          $postList = Post::all();

          return view('admin.admin', [
               'title' => 'Quản Lý Bất Động Sản',
               'page' => 'post',
               'page_title' => 'Quản Lý Bất Động Sản',
               'data' => [
                    'post_list' => $postList,
               ]
          ]);
     }

     public function getAdd()
     {
          $projectList = Project::all();
          $cityList = City::all();
          $categoryList = Category::all();

          return view('admin.admin', [
               'title' => 'Thêm Bất Động Sản',
               'page' => 'post.detail',
               'page_title' => 'Thêm Bất Động Sản',
               'data' => [
                    'project_list' => $projectList,
                    'city_list' => $cityList,
                    'category_list' => $categoryList
               ]
          ]);
     }

     public function postAdd(Request $req)
     {
          if (!$req->filled(
               [
                    'Title', 'Slug', 'StreetId',
                    'CategoryId', 'Floor', 'ApartmentNumber',
                    'Price', 'Status', 'Type', 'Slug'
               ]
          )) {
               return redirect()->route('adminPostGetAdd')->withInput();
          }

          $post = new Post($req->input());
          $post->UserId = Auth::user()->UserId;
          if ($req->ProjectId === 0) $post->ProjectId = '?';

          $post->save();

          return redirect()->route("adminPost");
     }

     public function getEdit($id)
     {
          $postData = Post::find($id);

          if ($postData === null) return abort(404);

          $postData->AreaId = Street::find($postData['StreetId'])->Area['AreaId'];
          $postData->DistrictId = Area::find($postData['AreaId'])->District['DistrictId'];
          $postData->CityId = District::find($postData['DistrictId'])->City['CityId'];
          $projectList = Project::all();
          $cityList = City::all();
          $categoryList = Category::all();

          return view('admin.admin', [
               'title' => 'Sửa Bất Động Sản',
               'page' => 'post.detail',
               'page_title' => 'Sửa Bất Động Sản',
               'data' => [
                    'post_info' => $postData,
                    'project_list' => $projectList,
                    'city_list' => $cityList,
                    'category_list' => $categoryList
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