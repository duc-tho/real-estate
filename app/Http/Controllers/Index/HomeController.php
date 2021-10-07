<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Post;
use App\Models\Project;
use App\Models\Setting;

class HomeController extends Controller
{
     public function index()
     {
          $defaultCityId = Setting::getValue('default-city');
          $default_city = City::find($defaultCityId)->first();
          $project_list = Project::paginate(4);
          $post_highlight = [];
          $district_list = [];
          $post_sale_list = [];
          $post_rent_list = [];

          if (!empty($default_city)) {
               $district_list = $default_city->District;

               foreach ($district_list as $district) {
                    $district->CitySlug = $default_city->Slug;
                    $district->post_sale_list = City::join('district', 'city.CityId', '=', 'district.CityId')
                         ->join('area', 'district.DistrictId', '=', 'area.DistrictId')
                         ->join('street', 'street.AreaId', '=', 'area.AreaId')
                         ->join('post', 'post.StreetId', '=', 'street.StreetId')
                         ->where('city.CityId', $default_city->CityId)
                         ->where(['Type' => 'bán'])
                         ->where('district.DistrictId', $district->DistrictId)
                         ->where('post.Status', '1')
                         ->select('city.Name as CityName', 'post.*', 'district.Name as DistrictName', 'area.Name as AreaName', 'street.Name as StreetName')
                         ->paginate(24);


                    $district->post_rent_list = City::join('district', 'city.CityId', '=', 'district.CityId')
                         ->join('area', 'district.DistrictId', '=', 'area.DistrictId')
                         ->join('street', 'street.AreaId', '=', 'area.AreaId')
                         ->join('post', 'post.StreetId', '=', 'street.StreetId')
                         ->where('city.CityId', $default_city->CityId)
                         ->where(['Type' => 'thuê'])
                         ->where('district.DistrictId', $district->DistrictId)
                         ->where('post.Status', '1')
                         ->select('city.Name as CityName', 'post.*', 'district.Name as DistrictName', 'area.Name as AreaName', 'street.Name as StreetName')
                         ->paginate(24);
               }

               $post_sale_list = City::join('district', 'city.CityId', '=', 'district.CityId')
                    ->join('area', 'district.DistrictId', '=', 'area.DistrictId')
                    ->join('street', 'street.AreaId', '=', 'area.AreaId')
                    ->join('post', 'post.StreetId', '=', 'street.StreetId')
                    ->where('city.CityId', $default_city->CityId)
                    ->where(['Type' => 'bán'])
                    ->where('post.Status', '1')
                    ->select('city.Name as CityName', 'post.*', 'district.Name as DistrictName', 'area.Name as AreaName', 'street.Name as StreetName')
                    ->paginate(8);

               $post_rent_list = City::join('district', 'city.CityId', '=', 'district.CityId')
                    ->join('area', 'district.DistrictId', '=', 'area.DistrictId')
                    ->join('street', 'street.AreaId', '=', 'area.AreaId')
                    ->join('post', 'post.StreetId', '=', 'street.StreetId')
                    ->where('city.CityId', $default_city->CityId)
                    ->where(['Type' => 'thuê'])
                    ->where('post.Status', '1')
                    ->select('city.Name as CityName', 'post.*', 'district.Name as DistrictName', 'area.Name as AreaName', 'street.Name as StreetName')
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
