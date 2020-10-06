<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\City;
use Illuminate\View\Component;

class SearchBox extends Component
{
     public $categoryList;
     public $cityList;

     /**
      * Create a new component instance.
      *
      * @return void
      */
     public function __construct()
     {
          $this->cityList = City::all();

          $this->categoryList = Category::where('ParentId', '0')->get();

          foreach ($this->categoryList as $item) {
               if (!isset($item->child) || empty($item->child)) $item->child = [];

               $childOfItem = Category::where('ParentId', $item->CategoryId)->get();
               $tmp = [];

               foreach ($childOfItem as $childItem) {
                    array_push($tmp, $childItem);
               }

               $item->child = $tmp;
          }
     }

     /**
      * Get the view / contents that represent the component.
      *
      * @return \Illuminate\View\View|string
      */
     public function render()
     {
          return view('components.search-box', [
               'categoryList' => $this->categoryList,
               'cityList' => $this->cityList
          ]);
     }
}