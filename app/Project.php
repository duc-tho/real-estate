<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
     protected $table = 'Project';
     protected $primaryKey = 'ProjectId';
     protected $guarded = [];
     protected $fillable = [
          'Title',
          'Slug',
          'Location',
          'Investor',
          'NumberOfBlock',
          'NumberOfFloor',
          'NumberOfApartment',
          'AreaApartment',
          'TotalArea',
          'YearBuilt',
          'BuildingDensity',
          'Price',
          'Description',
          'Image',
          'Status',
          'Slug'
     ];

     public function posts()
     {
          return $this->hasMany('App\Models\Post', 'ProjectId', 'ProjectId');
     }
}