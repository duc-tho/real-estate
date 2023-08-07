<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
     protected $table = 'ward';
     protected $primaryKey = 'id';
     protected $guarded = [];

     protected $fillable = [
          'street_id',
          'district_id',
          'name',
          'status',
          'slug',
     ];

     public function Street()
     {
          return $this->hasMany(Street::class, 'street_id', 'id');
     }

     public function District()
     {
          return $this->belongsTo(District::class, 'district_id', 'id');
     }
}