<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
     protected $table = 'city';
     protected $primaryKey = 'CityId';
     protected $guarded = [];
     protected $fillable = [
          'Name',
          'Status',
          'Slug'
     ];

     public function District()
     {
          return $this->hasMany('App\Models\District', 'CityId', 'CityId');
     }
}