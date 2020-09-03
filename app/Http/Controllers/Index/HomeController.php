<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Post;
use App\Models\Project;

class HomeController extends Controller
{
     public function index()
     {
          $project_list = Project::all();
          $district_list = [];
          $post_sale_list = [];
          $post_rent_list = [];

          foreach ($project_list as $project) {
               $project->post_sale_count = Post::where([
                    'ProjectId' => $project->ProjectId,
                    'Type' => 'bán',
               ])->count();
               $project->post_rent_count = Post::where([
                    'ProjectId' => $project->ProjectId,
                    'Type' => 'thuê',
               ])->count();
          }

          if (!empty(City::where(['Name' => 'Thành Phố Hồ Chí Minh'])->first())) {
               $default_city = City::where(['Name' => 'Thành Phố Hồ Chí Minh'])->first();

               $district_list = $default_city->District;

               foreach ($district_list as $district) {
                    $district->CitySlug = $default_city->Slug;
               }

               $post_sale_list = City::join('District', 'City.CityId', '=', 'District.CityId')
                    ->join('Area', 'District.DistrictId', '=', 'Area.DistrictId')
                    ->join('Street', 'Street.AreaId', '=', 'Area.AreaId')
                    ->join('Post', 'Post.StreetId', '=', 'Street.StreetId')
                    ->where('City.CityId', $default_city->CityId)
                    ->where(['Type' => 'bán'])
                    ->select('City.Name as CityName', 'Post.*', 'District.Name as DistrictName', 'Area.Name as AreaName', 'Street.Name as StreetName')
                    ->paginate(8);

               $post_rent_list = City::join('District', 'City.CityId', '=', 'District.CityId')
                    ->join('Area', 'District.DistrictId', '=', 'Area.DistrictId')
                    ->join('Street', 'Street.AreaId', '=', 'Area.AreaId')
                    ->join('Post', 'Post.StreetId', '=', 'Street.StreetId')
                    ->where('City.CityId', $default_city->CityId)
                    ->where(['Type' => 'thuê'])
                    ->select('City.Name as CityName', 'Post.*', 'District.Name as DistrictName', 'Area.Name as AreaName', 'Street.Name as StreetName')
                    ->paginate(8);
          }

          return view('index.index', [
               'title' => 'Trang chủ',
               'page' => 'home',
               'data' => [
                    'project_list' => $project_list,
                    'district_list' => $district_list,
                    'post_sale_list' => $post_sale_list,
                    'post_rent_list' => $post_rent_list,
               ]
          ]);
     }
}