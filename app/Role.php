<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table ='Role';
    protected $primaryKey = 'RoleId';
    protected $guarded = [];
}
