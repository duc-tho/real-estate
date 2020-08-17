<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table ='User';
    protected $primaryKey = 'UserId';
    protected $guarded = [];
}
