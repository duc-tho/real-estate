<?php

namespace App\Http\Middleware;

use Closure;

class ValidateUploadFile
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

          if ($request->hasFile('Image')) {

               $allowedfileExtension = ['jpg', 'png'];
               $files = $request->file('Image');


               foreach ($files as $file) {
                    $extension = $file->getClientOriginalExtension();
                    // Kiểm tra loại file
                    $check = in_array($extension, $allowedfileExtension);

                    if (!$check) {
                         return redirect()->back()->withInput()->with([
                              'errMsg' => 'Chỉ chấp nhận các loại ảnh jpg, png'
                         ]);
                    }

                    // Kiểm tra dung lượng
                    if ($file->getSize() >=  10000000) return redirect()->back()->withInput()->with([
                         'errMsg' => 'Chỉ chấp nhận các ảnh dưới 5MB'
                    ]);
               }
          }

          return $next($request);
     }
}