<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     protected $table = 'post';
     protected $primaryKey = 'PostId';
     protected $guarded = [];
     protected $fillable = [
          'StreetId',
          'Paper',
          'ViewCount',
          'Utility',
          'PriceUnit',
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
          'Slug',
          'Type'
     ];

     public function Category()
     {
          return $this->belongsTo('App\Models\Category', 'CategoryId', 'CategoryId');
     }

     public function Project()
     {
          return $this->belongsTo('App\Models\Project', 'ProjectId', 'ProjectId');
     }

     public function User()
     {
          return $this->belongsTo('App\User', 'UserId', 'UserId');
     }
}