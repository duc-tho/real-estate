<?php

namespace App\View\Components\index;

use App\Models\Category;
use Illuminate\View\Component;

class PostVertical extends Component
{
     public $data;
     public $style;

     /**
      * Create a new component instance.
      *
      * @return void
      */
     public function __construct($postData, $postLocation, $postStyle = '')
     {
          $this->data = $postData;

          $category = Category::where('CategoryId', $postData->CategoryId)->first();
          $type = Category::where(
               ['CategoryId' => $category->ParentId],
               ['ParentId' => 0]
          )->first();

          $this->data->category_type = $type->Name;

          $this->data->url = route(
               'post',
               [
                    $type->Slug,
                    $category->Slug,
                    $postData->City->Slug,
                    $postData->District->Slug,
                    $postData->Area->Slug,
                    $postData->Slug
               ]
          );

          $this->data->Location = $postLocation;
          $this->style = $postStyle;
     }

     /**
      * Get the view / contents that represent the component.
      *
      * @return \Illuminate\View\View|string
      */
     public function render()
     {
          return view('components.index.post-vertical', ['data' => $this->data]);
     }
}