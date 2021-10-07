<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Throwable;

class City extends Model
{
     protected $table = 'city';
     protected $primaryKey = 'CityId';
     protected $guarded = [];
     protected $fillable = [
          'Name',
          'Status',
          'Slug'
     ];

     public function District()
     {
          return $this->hasMany('App\Models\District', 'CityId', 'CityId');
     }

     /**
      * add new city
      * return id of new record if create success
      * return false if record is exists
      */
     static public function add($cityName, $code, $slug = '')
     {
          if ($slug == '') {
               $slug = Str::of($cityName)->slug('-') . '-' . uniqid();
          }

          if (
               City::where('Name', $cityName)
               ->orWhere('code', $code)
               ->orWhere('Slug', $slug)
               ->exists()
          ) {
               return false;
          }

          try {
               $newCity = new City();
               $newCity->Name = $cityName;
               $newCity->code = $code;
               $newCity->Slug = $slug;
               $newCity->save();
          } catch (Throwable $error) {
               throw $error;
          }

          return $newCity;
     }
}
