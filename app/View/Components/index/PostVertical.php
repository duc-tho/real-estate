<?php

namespace App\View\Components\index;

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