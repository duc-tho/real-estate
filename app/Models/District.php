<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
     protected $table = 'district';
     protected $primaryKey = 'id';
     protected $guarded = [];
     protected $fillable =
     [
          'city_id',
          'name',
          'status',
          'slug'
     ];

     public function Area()
     {
          return $this->hasMany(Ward::class, 'district_id', 'id');
     }

     public function City()
     {
          return $this->belongsTo(City::class, 'city_id', 'id');
     }
}