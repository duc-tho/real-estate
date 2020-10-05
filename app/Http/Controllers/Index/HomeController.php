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
          $project_list = Project::paginate(4);
          $post_highlight = [];
          $district_list = [];
          $post_sale_list = [];
          $post_rent_list = [];

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
                    ->where('Post.Status', '1')
                    ->select('City.Name as CityName', 'Post.*', 'District.Name as DistrictName', 'Area.Name as AreaName', 'Street.Name as StreetName')
                    ->paginate(8);

               $post_rent_list = City::join('District', 'City.CityId', '=', 'District.CityId')
                    ->join('Area', 'District.DistrictId', '=', 'Area.DistrictId')
                    ->join('Street', 'Street.AreaId', '=', 'Area.AreaId')
                    ->join('Post', 'Post.StreetId', '=', 'Street.StreetId')
                    ->where('City.CityId', $default_city->CityId)
                    ->where(['Type' => 'thuê'])
                    ->where('Post.Status', '1')
                    ->select('City.Name as CityName', 'Post.*', 'District.Name as DistrictName', 'Area.Name as AreaName', 'Street.Name as StreetName')
                    ->paginate(8);
          }

          $post_highlight = Post::orderBy('ViewCount', 'desc')->where('Status', '1')->paginate(15);

          return view('index.index', [
               'title' => 'Trang chủ',
               'page' => 'home',
               'data' => [
                    'project_list' => $project_list,
                    'district_list' => $district_list,
                    'post_sale_list' => $post_sale_list,
                    'post_rent_list' => $post_rent_list,
                    'post_highlight' => $post_highlight
               ]
          ]);
     }
}