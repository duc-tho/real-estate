<?php

namespace App\Http\Controllers\Index;

use App\Models\Project;
use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\City;
use App\Models\District;
use App\Models\Post;
use App\Models\Street;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
     public function index(Request $req, $city_slug = null, $district_slug = null, $project_slug = null)
     {
          if ($city_slug === null) {
               return redirect()->route('project', ['thanh-pho-ho-chi-minh']);
          } else {
               $city = City::where('Slug', $city_slug)->first();
               if ($city === null) abort(404);

               if ($district_slug === null) return $this->projectList();
               else {

                    $district = District::where('Slug', $district_slug)->first();
                    if ($district === null) abort(404);

                    if ($project_slug === null) return $this->postList();
                    else return $this->postDetail($project_slug);
               }
          };
     }

     public function ProjectList()
     {
          $project_list = Project::all();
          $district_list = [];

          foreach ($project_list as $project) {


               $project->post_sale_count = Post::where([
                    'ProjectId' => $project->ProjectId,
                    'Type' => 'bán',
               ])->count();

               $project->post_rent_count = Post::where([
                    'ProjectId' => $project->ProjectId,
                    'Type' => 'thuê',
               ])->count();

               $project->post_sale_list = City::join('District', 'City.CityId', '=', 'District.CityId')
                    ->join('Area', 'District.DistrictId', '=', 'Area.DistrictId')
                    ->join('Street', 'Street.AreaId', '=', 'Area.AreaId')
                    ->join('Post', 'Post.StreetId', '=', 'Street.StreetId')
                    ->where('Post.ProjectId', $project->ProjectId)
                    ->where(['Type' => 'bán'])
                    ->select('City.Name as CityName', 'Post.*', 'District.Name as DistrictName', 'Area.Name as AreaName', 'Street.Name as StreetName')
                    ->paginate(2);

               foreach ($project->post_sale_list as $item) {
                    if ($item->ProjectId !== null) {
                         $projectDetail = Project::find($item->ProjectId);

                         $item->StreetId = $projectDetail->StreetId;
                    }

                    $item->Street = Street::find($item->StreetId);
                    $item->Area = Street::find($item->StreetId)->Area;
                    $item->District = Area::find($item->Area->AreaId)->District;
                    $item->City = District::find($item->District->DistrictId)->City;
               }

               $project->post_rent_list = City::join('District', 'City.CityId', '=', 'District.CityId')
                    ->join('Area', 'District.DistrictId', '=', 'Area.DistrictId')
                    ->join('Street', 'Street.AreaId', '=', 'Area.AreaId')
                    ->join('Post', 'Post.StreetId', '=', 'Street.StreetId')
                    ->where('Post.ProjectId', $project->ProjectId)
                    ->where(['Type' => 'thuê'])
                    ->select('City.Name as CityName', 'Post.*', 'District.Name as DistrictName', 'Area.Name as AreaName', 'Street.Name as StreetName')
                    ->paginate(2);

               foreach ($project->post_rent_list as $item) {
                    if ($item->ProjectId !== null) {
                         $projectDetail = Project::find($item->ProjectId);

                         $item->StreetId = $projectDetail->StreetId;
                    }

                    $item->Street = Street::find($item->StreetId);
                    $item->Area = Street::find($item->StreetId)->Area;
                    $item->District = Area::find($item->Area->AreaId)->District;
                    $item->City = District::find($item->District->DistrictId)->City;
               }
          }

          if (!empty(City::where(['Name' => 'Thành Phố Hồ Chí Minh'])->first())) {
               $default_city = City::where(['Name' => 'Thành Phố Hồ Chí Minh'])->first();

               $district_list = $default_city->District;

               foreach ($district_list as $district) {
                    $district->CitySlug = $default_city->Slug;
               }
          }

          return view('index.index', [
               'title' => 'Danh sách dự án',
               'page' => 'project.index',
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

          $district_list = [];

          $projectDetail->post_sale_list = Post::where(['Type' => 'bán', 'ProjectId' => $projectDetail->ProjectId])->paginate(2);
          $projectDetail->post_rent_list = Post::where(['Type' => 'thuê', 'ProjectId' => $projectDetail->ProjectId])->paginate(2);

          if (!empty(City::where(['Name' => 'Thành Phố Hồ Chí Minh'])->first())) {
               $default_city = City::where(['Name' => 'Thành Phố Hồ Chí Minh'])->first();

               $district_list = $default_city->District;

               foreach ($district_list as $district) {
                    $district->CitySlug = $default_city->Slug;
               }
          }

          return view('index.index', [
               'title' => 'Chi tiết dự án',
               'page' => 'project.detail',
               'data' => [
                    'project_detail' => $projectDetail,
                    'district_list' => $district_list
               ]
          ]);
     }
}