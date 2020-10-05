<?php

namespace App\View\Components\index;

use App\Models\Category;
use App\Models\City;
use Illuminate\View\Component;

class BoxRight extends Component
{

     public $parent_category;
     public $category_slug;
     public $district_list;

     /**
      * Create a new component instance.
      *
      * @return void
      */
     public function __construct($categoryId)
     {
          if (!empty(City::where(['Name' => 'Thành Phố Hồ Chí Minh'])->first())) {
               $default_city = City::where(['Name' => 'Thành Phố Hồ Chí Minh'])->first();

               $this->district_list = $default_city->District;

               foreach ($this->district_list as $district) {
                    $district->CitySlug = $default_city->Slug;
               }
          }
     }

     /**
      * Get the view / contents that represent the component.
      *
      * @return \Illuminate\View\View|string
      */
     public function render()
     {
          return view('components.index.box-right');
     }
}