<?php

namespace App\View\Components;

use App\Models\District as ModelsDistrict;
use Illuminate\View\Component;

class district extends Component
{
     public $data;

     /**
      * Create a new component instance.
      *
      * @return void
      */
     public function __construct($districtData, $pageInfo = null)
     {
          $defaultInfo = ['page_type' => 'ban', 'category' => 'bat-dong-san', 'city' => 'thanh-pho-ho-chi-minh'];

          if ($pageInfo != null) $pageInfo = array_merge($defaultInfo, $pageInfo);
          else $pageInfo = $defaultInfo;

          $districtData->City = ModelsDistrict::find($districtData->DistrictId)->City;

          if ($pageInfo['page_type'] === 'du-an') {
               $districtData->url = route('project', [$districtData->City->Slug, $districtData->Slug]);
          } else {
               $districtData->url = route('post', [$pageInfo['page_type'], $pageInfo['category'], $districtData->City->Slug, $districtData->Slug]);
          }

          $this->data = $districtData;
     }

     /**
      * Get the view / contents that represent the component.
      *
      * @return \Illuminate\View\View|string
      */
     public function render()
     {
          return view('components.district', [
               'data' => $this->data
          ]);
     }
}