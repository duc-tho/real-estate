<?php

namespace App\View\Components\index;

use App\Models\Area;
use App\Models\City;
use App\Models\District;
use App\Models\Post;
use App\Models\Street;
use Illuminate\View\Component;

class ProjectPostList extends Component
{
     public $data, $type;

     /**
      * Create a new component instance.
      *
      * @return void
      */
     public function __construct($projectData, $type)
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

          $type = $type == "ban" ? "Bán" : "Thuê";

          $projectData->post_list = City::join('District', 'City.CityId', '=', 'District.CityId')
               ->join('Area', 'District.DistrictId', '=', 'Area.DistrictId')
               ->join('Street', 'Street.AreaId', '=', 'Area.AreaId')
               ->join('Post', 'Post.StreetId', '=', 'Street.StreetId')
               ->where('Post.ProjectId', $projectData->ProjectId)
               ->where(['Type' => $type])
               ->select('City.Name as CityName', 'Post.*', 'District.Name as DistrictName', 'Area.Name as AreaName', 'Street.Name as StreetName')
               ->paginate(20);

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
          return view('components.index.project-post-list', [
               'data' => $this->data
          ]);
     }
}