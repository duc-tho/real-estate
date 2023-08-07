<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
     protected $table = 'project';
     protected $primaryKey = 'id';
     protected $guarded = [];
     protected $fillable = [
          'street_id',
          'title',
          'slug',
          'location',
          'investor',
          'number_of_block',
          'number_of_floor',
          'number_of_apartment',
          'area_apartment',
          'total_area',
          'year_built',
          'building_density',
          'price',
          'description',
          'image',
          'status',
          'slug'
     ];

     public function posts()
     {
          return $this->hasMany(Post::class, 'project_id', 'id');
     }
}