<?php

namespace App\View\Components\index;

use Illuminate\View\Component;

class PostHorizontal extends Component
{
     public $data;

     /**
      * Create a new component instance.
      *
      * @return void
      */
     public function __construct($postData, $postLocation)
     {
          $this->data = $postData;
          $this->data->Location = $postLocation;
     }

     /**
      * Get the view / contents that represent the component.
      *
      * @return \Illuminate\View\View|string
      */
     public function render()
     {
          return view('components.index.post-horizontal', ['data' => $this->data]);
     }
}