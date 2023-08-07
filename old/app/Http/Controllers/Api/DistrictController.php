<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\District;
use App\Models\District as ModelsDistrict;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
     public function index()
     {
          return District::collection(ModelsDistrict::all());
     }

     public function getDistrictByCity($cityId)
     {
          return District::collection(ModelsDistrict::where('CityId', $cityId)->get());
     }
}