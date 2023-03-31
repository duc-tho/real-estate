<?php

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

Route::get('/init', 'InitController@index')->name('init');
Route::post('/init', 'InitController@process')->name('initProcess');

Route::get('/welcome', 'WelcomeController@index')->name('welcome');
Route::post('/welcome', 'WelcomeController@progress')->name('welcome-progress');


Route::get('/', 'Index\HomeController@index')->name('home');

Route::get('/dang-tin', 'Index\AddPostController@index')->name('addPost');

Route::group(['prefix' => 'user'], function () {
     Route::get('/', 'Index\UserController@index')->name('user');
});

Route::group(['prefix' => 'auth'], function () {
     Route::get('/login', 'AuthController@login')->name('login');

     Route::post('/authenticate', 'AuthController@authenticate')->name('auth');

     Route::get('/logout', 'AuthController@logout')->name('logout');
});

Route::group(['prefix' => 'register'], function () {
     Route::get('/', 'Index\RegisterController@index')->name('registerView');

     Route::post('/', 'Index\RegisterController@register')->name('register');
});

Route::post('/uploadcke', 'UploadCKEController@index')->name('uploadCKEditor');

// Route::group(['prefix' => 'du-an'], function () {
//      Route::get('/', 'Index\ProjectController@index')->name('project');

//      Route::get('/{Slug}', 'Index\ProjectController@projectDetail')
//           ->name('projectDetail');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/du-an/{city_slug?}/{district_slug?}/{project_slug?}/{type?}', 'Index\ProjectController@index')
     ->name('project');

Route::get('/{type}/{category_slug?}/{city_slug?}/{district_slug?}/{area_slug?}/{post_slug?}', 'Index\PostController@index')
     ->name('post');
