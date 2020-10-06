<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
     protected $table = 'role';
     protected $primaryKey = 'RoleId';
     protected $guarded = [];
     protected $fillable = ['Name', 'Status'];

     public function users()
     {
          return $this->hasMany('App\Models\Post', 'RoleId', 'RoleId');
     }
}