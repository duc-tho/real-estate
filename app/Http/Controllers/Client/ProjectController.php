<?php

namespace App\Http\Controllers\Client;

use App\Models\Project;
use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Category;
use App\Models\City;
use App\Models\District;
use App\Models\Post;
use App\Models\Setting;
use App\Models\Street;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
     public function index(Request $req, $city_slug = null, $district_slug = null, $project_slug = null, $type = null)
     {
          $defaultCityId = Setting::getValue('default-city');
          $default_city = City::find($defaultCityId)->first();
          $category_type = null;

          if ($type != null) {
               $category_type = Category::where(['Slug' => $type, 'ParentId' => 0])->first();
               if ($category_type === null) abort(404);
          }

          if ($city_slug === null) {
               return redirect()->route('project', [$default_city->Slug]);
          } else {
               $city = City::where('Slug', $city_slug)->first();
               if ($city === null) abort(404);

               if ($district_slug === null) return $this->projectList($city_slug, null);
               else {

                    $district = District::where('Slug', $district_slug)->first();
                    if ($district === null) abort(404);

                    if ($project_slug === null) return $this->projectList($city_slug, $district_slug);
                    else if ($type == null) return $this->projectDetail($project_slug);
                    else return $this->projectDetailList($city_slug, $project_slug, $category_type->Slug);
               }
          };
     }

     public function ProjectList($city_slug, $district_slug)
     {
          $project_list = City::join('district', 'city.CityId', '=', 'district.CityId')
               ->join('area', 'district.DistrictId', '=', 'area.DistrictId')
               ->join('street', 'street.AreaId', '=', 'area.AreaId')
               ->join('project', 'project.StreetId', '=', 'street.StreetId')
               ->where('city.Slug', $city_slug)
               ->where(['project.Status' => '1'])
               ->where([$district_slug !== null ? ['district.Slug', $district_slug] : [DB::raw('null')]])
               ->select('city.Name as CityName', 'project.*', 'district.Name as DistrictName', 'area.Name as AreaName', 'street.Name as StreetName')
               ->get();

          $district_list = [];

          $default_city = City::where(['Slug' => $city_slug])->first();

          if (empty($default_city)) abort('404');

          $district_list = $default_city->District;

          foreach ($district_list as $district) {
               $district->CitySlug = $default_city->Slug;
          }

          return view('index.index', [
               'title' => 'Danh sách dự án',
               'page' => 'project.index',
               'pageInfo' => [
                    'page_type' => 'du-an'
               ],
               'data' => [
                    'project_list' => $project_list,
                    'district_list' => $district_list
               ]
          ]);
     }

     public function projectDetail($slug)
     {
          $projectDetail = Project::where('Slug', $slug)->first();

          if (empty($projectDetail)) abort(404);

          $projectDetail->Street = Street::find($projectDetail->StreetId);
          $projectDetail->Area = Street::find($projectDetail->StreetId)->Area;
          $projectDetail->District = Area::find($projectDetail->Area->AreaId)->District;
          $projectDetail->City = District::find($projectDetail->District->DistrictId)->City;
          $projectDetail->post_sale_list = Post::where(['Type' => 'bán', 'ProjectId' => $projectDetail->ProjectId, 'Status' => '1'])->paginate(2);
          $projectDetail->post_rent_list = Post::where(['Type' => 'thuê', 'ProjectId' => $projectDetail->ProjectId, 'Status' => '1'])->paginate(2);


          if (!empty($projectDetail->post_rent_list)) {
               foreach ($projectDetail->post_rent_list as $item) {
                    $item->StreetId = $projectDetail->StreetId;
                    $item->Street = Street::find($item->StreetId);
                    $item->Area = Street::find($item->StreetId)->Area;
                    $item->District = Area::find($item->Area->AreaId)->District;
                    $item->City = District::find($item->District->DistrictId)->City;
               }
          }

          if (!empty($projectDetail->post_sale_list)) {
               foreach ($projectDetail->post_sale_list as $item) {
                    $item->StreetId = $projectDetail->StreetId;
                    $item->Street = Street::find($item->StreetId);
                    $item->Area = Street::find($item->StreetId)->Area;
                    $item->District = Area::find($item->Area->AreaId)->District;
                    $item->City = District::find($item->District->DistrictId)->City;
               }
          }

          return view('index.index', [
               'title' => 'Chi tiết dự án',
               'page' => 'project.detail',
               'pageInfo' => [
                    'page_type' => 'du-an'
               ],
               'data' => [
                    'project_detail' => $projectDetail,
               ]
          ]);
     }

     public function projectDetailList($city_slug, $slug, $type)
     {
          $projectDetail = Project::where('Slug', $slug)->first();

          $district_list = [];

          $default_city = City::where(['Slug' => $city_slug])->first();

          if (empty($default_city)) abort('404');

          $district_list = $default_city->District;

          foreach ($district_list as $district) {
               $district->CitySlug = $default_city->Slug;
          }

          return view('index.index', [
               'title' => 'Danh sách bất động sản thuộc dự án',
               'page' => 'project.list',
               'pageInfo' => [
                    'type' => $type,
                    'page_type' => 'du-an'
               ],
               'data' => [
                    'project_detail' => $projectDetail,
                    'district_list' => $district_list
               ]
          ]);
     }
}
