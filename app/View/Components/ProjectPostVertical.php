<?php

namespace App\View\Components;

use App\Models\Area;
use App\Models\City;
use App\Models\District;
use App\Models\Post;
use App\Models\Street;
use Illuminate\View\Component;

class ProjectPostVertical extends Component
{
     public $data;

     /**
      * Create a new component instance.
      *
      * @return void
      */
     public function __construct($projectData)
     {
          // STRAT: get Location
          $projectData->Street = Street::find($projectData->StreetId);
          $projectData->Area = Street::find($projectData->StreetId)->Area;
          $projectData->District = Area::find($projectData->Area->AreaId)->District;
          $projectData->City = District::find($projectData->District->DistrictId)->City;

          $projectData->Location = (!empty($projectData->Location) ? $projectData->Location . ', ' : '') . (!empty($projectData->Street->Name) ? $projectData->Street->Name . ', ' : '') . (!empty($projectData->Area->Name) ? $projectData->Area->Name . ', ' : '') . (!empty($projectData->District->Name) ? $projectData->District->Name . ', ' : '') . (!empty($projectData->City->Name) ? $projectData->City->Name : '');
          // END: get Location

          $projectData->post_sale_count = Post::where([
               'ProjectId' => $projectData->ProjectId,
               'Type' => 'bán',
          ])->count();

          $projectData->post_rent_count = Post::where([
               'ProjectId' => $projectData->ProjectId,
               'Type' => 'thuê',
          ])->count();

          $projectData->post_sale_list = City::join('district', 'city.CityId', '=', 'district.CityId')
               ->join('area', 'district.DistrictId', '=', 'area.DistrictId')
               ->join('street', 'street.AreaId', '=', 'area.AreaId')
               ->join('post', 'post.StreetId', '=', 'street.StreetId')
               ->where('post.ProjectId', $projectData->ProjectId)
               ->where(['Type' => 'bán'])
               ->select('city.Name as CityName', 'post.*', 'district.Name as DistrictName', 'area.Name as AreaName', 'street.Name as StreetName')
               ->paginate(2);

          $projectData->post_rent_list = City::join('district', 'city.CityId', '=', 'district.CityId')
               ->join('area', 'district.districtId', '=', 'area.DistrictId')
               ->join('street', 'street.AreaId', '=', 'area.AreaId')
               ->join('post', 'post.StreetId', '=', 'street.StreetId')
               ->where('post.ProjectId', $projectData->ProjectId)
               ->where(['Type' => 'thuê'])
               ->select('city.Name as CityName', 'post.*', 'district.Name as DistrictName', 'area.Name as AreaName', 'street.Name as StreetName')
               ->paginate(2);

          // STRAT: get URL
          $projectData->url = route(
               'project',
               [
                    $projectData->City->Slug,
                    $projectData->District->Slug,
                    $projectData->Slug
               ]
          );
          // END: get URL

          $this->data = $projectData;
     }

     /**
      * Get the view / contents that represent the component.
      *
      * @return \Illuminate\View\View|string
      */
     public function render()
     {
          return view('components.project-post-vertical', [
               'data' => $this->data
          ]);
     }
}