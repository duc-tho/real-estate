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
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
     public function index(Request $req)
     {
          $condition = [];

          if ($req->filled('type')) array_push($condition, ['Type', $req->query('type')]);

          if ($req->filled('city_id')) array_push($condition, ['CityId', $req->query('city_id')]);
          if ($req->filled('district_id')) array_push($condition, ['DistrictId', $req->query('district_id')]);
          if ($req->filled('area_id')) array_push($condition, ['AreaId', $req->query('area_id')]);

          if ($req->filled('min_price')) array_push($condition, ['Price', '>=', $req->query('min_price')]);
          if ($req->filled('max_price')) array_push($condition, ['Price', '<=', $req->query('max_price')]);

          if ($req->filled('min_acreage')) array_push($condition, [DB::raw('(Width * Length)'), '>=', $req->query('min_acreage')]);
          if ($req->filled('max_acreage')) array_push($condition, [DB::raw('(Width * Length)'), '<=', $req->query('max_acreage')]);

          $postList = Post::where($condition)->get();

          // dd($condition, $postList);

          return view('index.index', [
               'title' => 'Danh sách dự án',
               'page' => 'post.index',
               'data' => [
                    'post_list' => $postList
               ]
          ]);
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

          $postDetail->post_list = Post::where([
               'Type' => $postDetail->Type,
               'ProjectId' => $postDetail->ProjectId,
               ['PostId', '!=', $postDetail->PostId]
          ])->paginate(3);

          if (!empty(City::where(['Name' => 'Thành Phố Hồ Chí Minh'])->first())) {
               $default_city = City::where(['Name' => 'Thành Phố Hồ Chí Minh'])->first();

               $district_list = $default_city->District;

               foreach ($district_list as $district) {
                    $district->CitySlug = $default_city->Slug;
               }
          }

          return view('index.index', [
               'title' => 'Chi tiết dự án',
               'page' => 'post.detail',
               'data' => [
                    'post_detail' => $postDetail,
                    'district_list' => $district_list
               ]
          ]);
     }
}