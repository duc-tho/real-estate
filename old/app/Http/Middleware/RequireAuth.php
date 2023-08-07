<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RequireAuth
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
          if (!Auth::check()) {
               return redirect()->route('login');
          } else {
               $access = Auth::user()['role_id'];
               if ($access != 1) {
                    abort(403, 'Bạn không có quyền truy cập vào trang này!');
               }
          }

          return $next($request);
     }
}
