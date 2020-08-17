<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    protected $table ='Street';
    protected $primaryKey = 'StreetId';
    protected $guarded = [];
<<<<<<< HEAD

    
}
=======
    protected $fillable = ['AreaId', 'Name', 'Status'];

    public function posts()
     {
         return $this->hasMany('App\Post', 'StreetId', 'StreetId');
     }
}
>>>>>>> 950439005aeb7d1a88eb41a7147f0937bccf670d
