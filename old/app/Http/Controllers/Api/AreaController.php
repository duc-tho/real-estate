<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Area as ResourcesArea;
use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
     public function index()
     {
          return ResourcesArea::collection(Area::all());
     }

     public function getAreaByDistrict($districtId)
     {
          return ResourcesArea::collection(Area::where('DistrictId', $districtId)->get());
     }
}