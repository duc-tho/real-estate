<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $table = 'Category';
     protected $primaryKey = 'CategoryId';
     protected $guarded = [];
     protected $fillable = [
          'Name',
          'ParentId',
          'Status',
          'Slug'
     ];

     public function Post()
     {
          return $this->hasMany('App\Post', 'CategoryId', 'CategoryId');
     }
}
