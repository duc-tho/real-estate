<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table ='City';
    protected $primaryKey = 'CityId';
    protected $guarded = [];
    protected $fillable = 
        [
            'Name',
            'Status'
        ];
    public function District(){
        return $this->hasMany('App\District','DistrictId','DistrictId');
    }
}
