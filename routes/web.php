<?php

use App\Http\Controllers\Client\PostController;
use App\Http\Controllers\Client\ProjectController;
use App\Http\Controllers\Client\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dang-tin-bat-dong-san', 'Client\AddPostController@index')->name('addPost');

Route::group(['prefix' => 'user'], function () {
     Route::get('/', [UserController::class, 'index'])->name('user');
});

Route::post('/uploadcke', 'UploadCKEController@index')->name('uploadCKEditor');

// Route::group(['prefix' => 'du-an'], function () {
//      Route::get('/', 'Index\ProjectController@index')->name('project');

//      Route::get('/{Slug}', 'Index\ProjectController@projectDetail')
//           ->name('projectDetail');
// });

Auth::routes();

Route::get('/du-an/{city_slug?}/{district_slug?}/{project_slug?}/{type?}', [ProjectController::class, 'index'])
     ->name('project');

Route::get('/{type}/{category_slug?}/{city_slug?}/{district_slug?}/{area_slug?}/{post_slug?}', [PostController::class, 'index'])
     ->name('post');
