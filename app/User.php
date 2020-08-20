<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
     protected $table = 'User';
     protected $primaryKey = 'UserId';
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
          'Bathroom',
          'Width',
          'Length',
          'Floor',
          'Image',
          'Description',
          'Price',
          'Status',
          'Type'
     ];

     public function posts()
     {
          return $this->hasMany('App\Post', 'UserId', 'UserId');
     }
}