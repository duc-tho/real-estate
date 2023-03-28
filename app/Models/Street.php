<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
     protected $table = 'street';
     protected $primaryKey = 'id';
     protected $guarded = [];

     protected $fillable = ['ward_id', 'name', 'status', 'slug'];

     public function posts()
     {
          return $this->hasMany(Post::class, 'post_id', 'id');
     }

     public function Area()
     {
          return $this->belongsTo(Ward::class, 'ward_id', 'id');
     }
}