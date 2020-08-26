<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
     protected $table = 'Street';
     protected $primaryKey = 'StreetId';
     protected $guarded = [];

     protected $fillable = ['AreaId', 'Name', 'Status', 'Slug'];

     public function posts()
     {
          return $this->hasMany('App\Post', 'StreetId', 'StreetId');
     }

     public function Area()
     {
          return $this->belongsTo('App\Models\Area', 'AreaId', 'AreaId');
     }
}