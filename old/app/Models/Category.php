<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $table = 'category';
     protected $primaryKey = 'id';
     protected $guarded = [];
     protected $fillable = [
          'name',
          'parent',
          'status',
          'slug'
     ];

     public function Post()
     {
          return $this->hasMany(Post::class, 'category_id', 'id');
     }
}