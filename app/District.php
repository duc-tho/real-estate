<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
     protected $table = 'District';
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
          return $this->hasMany('App\Area', 'AreaId', 'AreaId');
     }
}