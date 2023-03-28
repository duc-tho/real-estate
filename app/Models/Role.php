<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
     protected $table = 'role';
     protected $primaryKey = 'id';
     protected $guarded = [];
     protected $fillable = ['name', 'status'];

     public function users()
     {
          return $this->hasMany(Post::class, 'role_id', 'id');
     }
}