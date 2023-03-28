<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Setting;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class WelcomeController extends Controller
{
     public function index()
     {
          $init = Setting::getValue('welcome');

          if ($init != 0) {
               return Redirect::route('admin');
          }

          return view('admin.welcome');
     }

     public function progress(Request $request)
     {
          $init = Setting::getValue('welcome');

          if ($init != 0) {
               return Redirect::route('admin');
          }

          if($request->filled(['title', 'default-city'])) {
               // set first using init to 1
               $init = Setting::get('welcome');
               $init->value = 1;
               $init->save();

               $defaultCityValue = explode('.', $request->input('default-city'));
               $defaultCityValueCode = $defaultCityValue[0];
               $defaultCityValueName = $defaultCityValue[1];

               $defaultCity = City::add($defaultCityValueName, $defaultCityValueCode);

               // init default city
               $defaultCitySetting = Setting::get('default-city');
               $defaultCitySetting->value = $defaultCity->id;
               $defaultCitySetting->save();

               $title = Setting::get('title');
               $title->value = $request->input('title');
               $title->save();
          } else {
               return view('admin.welcome');
          };

          return redirect()->route('admin');
     }
}
