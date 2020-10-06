<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
     protected $table = 'district';
     protected $primaryKey = 'DistrictId';
     protected $guarded = [];
     protected $fillable =
     [
          'CityId',
          'Name',
          'Status',
          'Slug'
     ];

     public function Area()
     {
          return $this->hasMany('App\Models\Area', 'DistrictId', 'DistrictId');
     }

     public function City()
     {
          return $this->belongsTo('App\Models\City', 'CityId', 'CityId');
     }
}