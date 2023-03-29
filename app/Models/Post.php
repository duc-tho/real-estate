<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     protected $table = 'post';
     protected $primaryKey = 'id';
     protected $guarded = [];
     protected $fillable = [
          'street_id',
          'paper',
          'view_count',
          'utility',
          'price_unit',
          'user_id',
          'category_id',
          'project_id',
          'title',
          'apartment_number',
          'street',
          'direction',
          'bedroom',
          'street',
          'bathroom',
          'width',
          'length',
          'floor',
          'image',
          'description',
          'price',
          'status',
          'slug',
          'type'
     ];

     public function Category()
     {
          return $this->belongsTo(Category::class, 'category_id', 'id');
     }

     public function Project()
     {
          return $this->belongsTo(Project::class, 'project_id', 'id');
     }

     public function Author()
     {
          return $this->belongsTo(User::class, 'user_id', 'id');
     }
}
