<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Street as ResourcesStreet;
use App\Models\Street;
use Illuminate\Http\Request;

class StreetController extends Controller
{
     public function index()
     {
          return ResourcesStreet::collection(Street::all());
     }

     public function getStreetByArea($areaId)
     {
          return ResourcesStreet::collection(Street::where('AreaId', $areaId)->get());
     }
}