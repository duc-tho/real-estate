<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadCKEController extends Controller
{
     public function index(Request $request)
     {
          $url = $request->upload->store('/dist/img/upload/ckeditor', ['disk' => 'public_file']);

          return view('uploadCKEditor', [
               'FuncNum' => $request->CKEditorFuncNum,
               'data' => [
                    'url' => asset($url),
               ],
          ]);
     }
}