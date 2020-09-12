<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\City;
use App\Models\District;
use App\Models\Post;
use App\Models\Project;
use App\Models\Street;
use Illuminate\Http\Request;

class PostController extends Controller
{
     public function index()
     {
          return 'Post Index';
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

     public function postDetail($slug)
     {
          $postDetail = Post::where('Slug', $slug)->first();

          if (empty($postDetail)) abort(404);

          if ($postDetail->ProjectId !== null) {
               $projectDetail = Project::find($postDetail->ProjectId);

               $postDetail->Street = Street::find($projectDetail->StreetId);
          } else {
               $postDetail->Street = Street::find($postDetail->StreetId);
          }

          $postDetail->Area = Street::find($postDetail->StreetId)->Area;
          $postDetail->District = Area::find($postDetail->Area->AreaId)->District;
          $postDetail->City = District::find($postDetail->District->DistrictId)->City;

          $district_list = [];

          // $postDetail->post_sale_list = Post::where(['Type' => 'bán', 'ProjectId' => $postDetail->ProjectId])->paginate(2);
          // $postDetail->post_rent_list = Post::where(['Type' => 'thuê', 'ProjectId' => $postDetail->ProjectId])->paginate(2);

          if (!empty(City::where(['Name' => 'Thành Phố Hồ Chí Minh'])->first())) {
               $default_city = City::where(['Name' => 'Thành Phố Hồ Chí Minh'])->first();

               $district_list = $default_city->District;

               foreach ($district_list as $district) {
                    $district->CitySlug = $default_city->Slug;
               }
          }

          return view('index.index', [
               'title' => 'Danh sách dự án',
               'page' => 'post.detail',
               'data' => [
                    'post_detail' => $postDetail,
                    'district_list' => $district_list
               ]
          ]);
     }
}