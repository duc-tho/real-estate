<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Category;
use App\Models\City;
use App\Models\District;
use App\Models\Post;
use App\Models\Project;
use App\Models\Street;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
     public function index(Request $req, $type, $category_slug = null, $city_slug = null, $district_slug = null, $area_slug = null, $post_slug = null)
     {
          $category_type = Category::where(['Slug' => $type, 'ParentId' => 0])->first();
          $category = ['Slug' => 'bat-dong-san'];
          $condition = [];

          if ($category_type === null) abort(404);

          if ($category_slug !== 'bat-dong-san') {
               $category = Category::where([
                    'ParentId' => $category_type->CategoryId,
                    'Slug' => $category_slug
               ])->first();
          }

          if ($category === null) return redirect()->route('post', [$type, 'bat-dong-san', 'thanh-pho-ho-chi-minh']);

          if ($req->filled('min_price')) array_push($condition, ['Price', '>=', $req->query('min_price')]);
          if ($req->filled('max_price')) array_push($condition, ['Price', '<=', $req->query('max_price')]);

          if ($req->filled('min_acreage')) array_push($condition, [DB::raw('(Width * Length)'), '>=', $req->query('min_acreage')]);
          if ($req->filled('max_acreage')) array_push($condition, [DB::raw('(Width * Length)'), '<=', $req->query('max_acreage')]);

          if ($city_slug === null) {
               return redirect()->route('post', [$type, $category_slug, 'thanh-pho-ho-chi-minh']);
          } else {
               $city = City::where('Slug', $city_slug)->first();
               if ($city === null) abort(404);

               if ($district_slug === null) return $this->postList($req, $category_type->Slug, $category['Slug'], $city->Slug, null, null, $condition);
               else {

                    $district = District::where('Slug', $district_slug)->first();
                    if ($district === null) abort(404);

                    if ($area_slug === null) return $this->postList($req, $category_type->Slug, $category['Slug'], $city->Slug, $district_slug, null, $condition);
                    else {

                         $area = Area::where('Slug', $area_slug)->first();
                         if ($area === null) abort(404);

                         if ($post_slug === null) return $this->postList($req, $category_type->Slug, $category['Slug'], $city->Slug, $district_slug, $area_slug, $condition);
                         else return $this->postDetail($post_slug);
                    }
               }
          };

          $category = Category::find($req->category_id);
          $city = City::find($req->city_id);
     }

     public function postList(Request $req, $type, $category_slug, $city_slug, $district_slug, $area_slug, $condition = null)
     {
          $category_type = Category::where(['Slug' => $type, 'ParentId' => 0])->first();
          $category = ['Slug' => 'bat-dong-san'];

          if ($category_slug !== 'bat-dong-san') {
               $category = Category::where([
                    'ParentId' => $category_type->CategoryId,
                    'Slug' => $category_slug
               ])->first();
          }

          $post_list = City::join('District', 'City.CityId', '=', 'District.CityId')
               ->join('Area', 'District.DistrictId', '=', 'Area.DistrictId')
               ->join('Street', 'Street.AreaId', '=', 'Area.AreaId')
               ->join('Post', 'Post.StreetId', '=', 'Street.StreetId')
               ->join('Category', 'Category.CategoryId', '=', 'Post.CategoryId')
               ->where([
                    ['Category.ParentId', $category_type->CategoryId],
                    $category_slug !== 'bat-dong-san' ? ['Category.Slug', $category['Slug']] : [DB::raw('null')]
               ])
               ->where('City.Slug', $city_slug)
               ->where([$district_slug !== null ? ['District.Slug', $district_slug] : [DB::raw('null')]])
               ->where($category_slug !== null ? $condition : [DB::raw('null')])
               ->select('City.Name as CityName', 'Post.*', 'District.Name as DistrictName', 'Area.Name as AreaName', 'Street.Name as StreetName')
               ->get();

          $city = City::where('City.Slug', $city_slug)->first();
          $district = $district_slug !== null ? District::where('District.Slug', $district_slug)->first() : null;
          $area = $area_slug !== null ? Area::where('Area.Slug', $area_slug)->first() : null;

          foreach ($post_list as $item) {
               if ($item->ProjectId !== null) {
                    $projectDetail = Project::find($item->ProjectId);

                    $item->StreetId = $projectDetail->StreetId;
               }

               $item->category_type = $category_type->Name;
               $item->Street = Street::find($item->StreetId);
               $item->Area = Street::find($item->StreetId)->Area;
               $item->District = Area::find($item->Area->AreaId)->District;
               $item->City = District::find($item->District->DistrictId)->City;
          }

          return view('index.index', [
               'title' => 'Danh sách bất động sản tại ' . $city->Name,
               'page' => 'post.index',
               'content_title' => $category_type->Name . ' bất động sản',
               'location' => $city->Name . ($district !== null ? ', ' . $district->Name : '') . ($area !== null ? ', ' . $area->Name : ''),
               'data' => [
                    'post_list' => $post_list
               ]
          ]);
     }

     public function postDetail($slug)
     {
          $postDetail = Post::where('Slug', $slug)->first();

          if ($postDetail === null) abort(404);

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


          foreach ($postDetail->post_list as $item) {
               if ($item->ProjectId !== null) {
                    $projectDetail = Project::find($item->ProjectId);

                    $item->StreetId = $projectDetail->StreetId;
               }

               // $item->category_type = $category_type->Name;
               $item->Street = Street::find($item->StreetId);
               $item->Area = Street::find($item->StreetId)->Area;
               $item->District = Area::find($item->Area->AreaId)->District;
               $item->City = District::find($item->District->DistrictId)->City;
          }


          if (!empty(City::where(['Name' => 'Thành Phố Hồ Chí Minh'])->first())) {
               $default_city = City::where(['Name' => 'Thành Phố Hồ Chí Minh'])->first();

               $district_list = $default_city->District;

               foreach ($district_list as $district) {
                    $district->CitySlug = $default_city->Slug;
               }
          }

          return view('index.index', [
               'title' => 'Chi tiết bất dộng sản',
               'page' => 'post.detail',
               'data' => [
                    'post_detail' => $postDetail,
                    'district_list' => $district_list
               ]
          ]);
     }
}