<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
     protected $table = 'Area';
     protected $primaryKey = 'AreaId';
     protected $guarded = [];

     protected $fillable = [
          'AreaId',
          'DistrictId',
          'Name',
          'Status',
          'Slug',

     ];

     public function Street()
     {
          return $this->hasMany('App\Street', 'AreaId', 'AreaId');
     }

     public function District()
     {
          return $this->belongsTo('App\Models\District', 'DistrictId', 'DistrictId');
     }
}