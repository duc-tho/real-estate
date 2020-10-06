<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
     use Notifiable;

     protected $table = 'user';
     protected $primaryKey = 'UserId';
     protected $guarded = [];
     protected $fillable = [
          'RoleId',
          'Email',
          'PhoneNumber',
          'FirstName',
          'LastName',
          'Gender',
          'Birthday',
          'Username',
          'Password',
          'ProfileImage',
          'Status'
     ];

     public function posts()
     {
          return $this->hasMany('App\Models\Post', 'UserId', 'UserId');
     }


     public function getAuthPassword()
     {
          return $this->Password;
     }
}