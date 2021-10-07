<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
     protected $table = 'setting';
     protected $primaryKey = 'SettingId';
     protected $guarded = [];
     protected $fillable = ['Name', 'Value'];

     static function get($key)
     {
          $setting = Setting::where('Name', $key)->first();
          return $setting;
     }

     static function getValue($key)
     {
          $settingValue = Setting::where('Name', $key)->first()['Value'] ?? null;
          return $settingValue;
     }
}
