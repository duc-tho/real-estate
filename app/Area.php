<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table ='Area';
    protected $primaryKey = 'AreaId';
    protected $guarded = [];
    protected $fillable = 
        [
            'AreaId',
            'DistrictId',
            'Name',
            'Status'
        ];
    public function Street(){
        return $this->hasMany('App\Street','AreaId','AreaId');
    }
}
