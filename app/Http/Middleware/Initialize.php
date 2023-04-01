<?php

namespace App\Http\Middleware;

use App\Models\Setting;
use Closure;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Schema;

class Initialize
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
          if (!Schema::hasTable('setting')) {
               return Redirect::route('init');
          }

          if (Setting::getValue('installed') === 'false') {
               return Redirect::route('welcome');
          }

          return $next($request);
     }
}
