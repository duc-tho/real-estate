<?php

namespace App\Http\Middleware;

use App\Models\Setting;
use Closure;
use Illuminate\Support\Facades\Redirect;

class Welcome
{
     /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next)
     {
          $initDefaultSetting = Setting::getValue('welcome');

          if ($initDefaultSetting == 0 || $initDefaultSetting == null) {
               return Redirect::route('welcome');
          }

          return $next($request);
     }
}
