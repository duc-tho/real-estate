<?php

namespace App\View\Components\index;

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
     public function __construct($districtData, $pageInfo = ['type' => 'ban', 'category' => 'bat-dong-san', 'city' => 'thanh-pho-ho-chi-minh'])
     {


          $districtData->City = ModelsDistrict::find($districtData->DistrictId)->City;

          if ($pageInfo === 'du-an') {
               $districtData->url = route('project', [$districtData->City->Slug, $districtData->Slug]);
          } else {
               $districtData->url = route('post', [$pageInfo['type'], $pageInfo['category'], $districtData->City->Slug, $districtData->Slug]);
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
          return view('components.index.district', [
               'data' => $this->data
          ]);
     }
}