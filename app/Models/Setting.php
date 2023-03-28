<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
     protected $table = 'setting';
     protected $primaryKey = 'id';
     protected $guarded = [];
     protected $fillable = ['key', 'value'];

     static function get($key)
     {
          $setting = Setting::where('key', $key)->first();
          return $setting;
     }

     static function getValue($key)
     {
          $settingValue = Setting::where('key', $key)->first()['value'] ?? null;
          return $settingValue;
     }
}
