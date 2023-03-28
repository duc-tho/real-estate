<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
     use Notifiable;

     protected $table = 'user';
     protected $primaryKey = 'id';
     protected $guarded = [];
     protected $fillable = [
          'role_id',
          'email',
          'phone_number',
          'first_name',
          'last_name',
          'gender',
          'birthday',
          'username',
          'password',
          'profile_image',
          'status'
     ];

     public function posts()
     {
          return $this->hasMany(Post::class, 'user_id', 'id');
     }


     public function getAuthPassword()
     {
          return $this->password;
     }
}
