<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
     protected $table = 'Setting';
     protected $primaryKey = 'SettingId';
     protected $guarded = [];
     protected $fillable = ['Name', 'Value'];
}