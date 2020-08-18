<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     protected $table = 'Post';
     protected $primaryKey = 'PostId';
     protected $guarded = [];
     protected $fillable = [
          'StreetId',
          'UserId',
          'CategoryId',
          'ProjectId',
          'Title',
          'ApartmentNumber',
          'Street',
          'Direction',
          'Bedroom',
          'Street',
          'Bathroom',
          'Width',
          'Length',
          'Floor',
          'Image',
          'Description',
          'Price',
          'Status',
          'Slug'
     ];
     public function Category()
     {
          return $this->hasMany('App\Category', 'CategoryId', 'CategoryId');
     }

     public function Project()
     {
          return $this->hasMany('App\Project', 'ProjectId', 'ProjectId');
     }
     public function User()
     {
          return $this->hasOne('App\User', 'UserId', 'UserId');
     }
}
