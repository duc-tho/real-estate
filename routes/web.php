<?php

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


Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'project'], function () {
     Route::get('/', 'ProjectController@index')->name('index');

     Route::get('/{id}', 'ProjectController@projectDetail')
          ->name('projectDetail')
          ->where(['id' => '[0-9]+']);
});

Route::group(['prefix' => 'user'], function () {
     Route::get('/', 'UserController@index')->name('index');
});

Route::group(['prefix' => 'post'], function () {
     Route::get('/post', 'PostController@index')->name('index');

     Route::get('/post/city/{id}', 'PostController@postCity')
          ->name('postCity')
          ->where(['id' => '[0-9]+']);

     Route::get('/post/city/district/{id} ', 'PostController@postDistrict')
          ->name('postDistrict')
          ->where(['id' => '[0-9]+']);

     Route::get('/post/city/district/area/{id} ', 'PostController@postArea')
          ->name('postArea')
          ->where(['id' => '[0-9]+']);

     Route::get('/post/city/district/area/street/{id}', 'PostController@postStreet')
          ->name('postStreet')
          ->where(['id' => '[0-9]+']);

     Route::get('/post/category', 'PostController@postCategory')
          ->name('postCategory')
          ->where(['id' => '[0-9]+']);

     Route::get('/post/project', 'PostController@postProject')
          ->name('postProject')
          ->where(['id' => '[0-9]+']);

     Route::get('/post/{id}', 'PostController@postDetail')
          ->name('postDetail')
          ->where(['id' => '[0-9]+']);
});

Route::group(['prefix' => 'auth'], function () {
     Route::get('/login', 'AuthController@login')->name('login');

     Route::post('/authenticate', 'AuthController@authenticate')->name('auth');

     Route::get('/logout', 'AuthController@logout')->name('logout');
});

Route::prefix('admin')->group(function () {

     Route::get('/', 'AdminController@index')->name('admin');

     Route::group(['prefix' => 'post'], function () {

          Route::get('/', 'AdminPostController@index')->name('adminPost');

          Route::get('/add', 'AdminPostController@getAdd')->name('adminPostGetAdd');

          Route::post('/add', 'AdminPostController@postAdd')->name('adminPostPostAdd');

          Route::get('/edit/{id}/', 'AdminPostController@getEdit')
               ->name('adminPostGetEdit')
               ->where(['id' => '[0-9]+']);

          Route::put('/edit/{id}', 'AdminPostController@putEdit')
               ->name('adminPostPutEdit')
               ->where(['id' => '[0-9]+']);

          Route::delete('/delete/{id}', 'AdminPostController@delete')
               ->name('adminPostDelete')
               ->where(['id' => '[0-9]+']);
     });


     Route::group(['prefix' => 'project'], function () {

          Route::get('/', 'AdminProjectController@index')->name('adminProject');

          Route::get('/add', 'AdminProjectController@getAdd')->name('adminProjectGetAdd');

          Route::post('/add', 'AdminProjectController@postAdd')->name('adminProjectPostAdd');

          Route::get('/edit/{id}/', 'AdminProjectController@getEdit')
               ->name('adminProjectGetEdit')
               ->where(['id' => '[0-9]+']);

          Route::put('/edit/{id}', 'AdminProjectController@putEdit')
               ->name('adminProjectPutEdit')
               ->where(['id' => '[0-9]+']);

          Route::delete('/delete/{id}', 'AdminProjectController@delete')
               ->name('adminProjectDelete')
               ->where(['id' => '[0-9]+']);
     });


     Route::group(['prefix' => 'category'], function () {

          Route::get('/', 'AdminCategoryController@index')->name('adminCategory');

          Route::get('/add', 'AdminCategoryController@getAdd')->name('adminCategoryGetAdd');

          Route::post('/add', 'AdminCategoryController@postAdd')->name('adminCategoryPostAdd');

          Route::get('/edit', 'AdminCategoryController@getEdit')
               ->name('adminCategoryGetEdit')
               ->where(['id' => '[0-9]+']);

          Route::put('/edit', 'AdminCategoryController@putEdit')
               ->name('adminCategoryPutEdit')
               ->where(['id' => '[0-9]+']);

          Route::delete('/delete/{id}', 'AdminCategoryController@delete')
               ->name('adminCategoryDelete')
               ->where(['id' => '[0-9]+']);
     });


     Route::group(['prefix' => 'city'], function () {

          Route::get('/', 'AdminCityController@index')->name('adminCity');

          Route::get('/add', 'AdminCityController@getAdd')->name('adminCityGetAdd');

          Route::post('/add', 'AdminCityController@postAdd')->name('adminCityPostAdd');

          Route::get('/edit/{id}', 'AdminCityController@getEdit')
               ->name('adminCityGetEdit')
               ->where(['id' => '[0-9]+']);

          Route::put('/edit/{id}', 'AdminCityController@putEdit')
               ->name('adminCityPutEdit')
               ->where(['id' => '[0-9]+']);

          Route::delete('/delete/{id}', 'AdminCityController@delete')
               ->name('adminCityDelete')
               ->where(['id' => '[0-9]+']);
     });

     Route::group(['prefix' => 'district'], function () {

          Route::get('/', 'AdminDistrictController@index')->name('adminDistrict');

          Route::get('/add', 'AdminDistrictController@getAdd')->name('adminDistrictGetAdd');

          Route::post('/add', 'AdminDistrictController@postAdd')->name('adminDistrictPostAdd');

          Route::get('/edit', 'AdminDistrictController@getEdit')
               ->name('adminDistrictGetEdit')
               ->where(['id' => '[0-9]+']);

          Route::put('/edit/{id}', 'AdminDistrictController@putEdit')
               ->name('adminDistrictPutEdit')
               ->where(['id' => '[0-9]+']);

          Route::delete('/delete/{id}', 'AdminDistrictController@delete')
               ->name('adminDistrictDelete')
               ->where(['id' => '[0-9]+']);
     });

     Route::group(['prefix' => 'area'], function () {

          Route::get('/', 'AdminAreaController@index')->name('adminArea');

          Route::get('/add', 'AdminAreaController@getAdd')->name('adminAreaGetAdd');

          Route::post('/add', 'AdminAreaController@postAdd')->name('adminAreaPostAdd');

          Route::get('/edit', 'AdminAreaController@getEdit')
               ->name('adminAreaGetEdit')
               ->where(['id' => '[0-9]+']);

          Route::put('/edit/{id}', 'AdminAreaController@putEdit')
               ->name('adminAreaPutEdit')
               ->where(['id' => '[0-9]+']);

          Route::delete('/delete/{id}', 'AdminAreaController@delete')
               ->name('adminAreaDelete')
               ->where(['id' => '[0-9]+']);
     });

     Route::group(['prefix' => 'street'], function () {

          Route::get('/', 'AdminStreetController@index')->name('adminStreet');

          Route::get('/add', 'AdminStreetController@getAdd')->name('adminStreetGetAdd');

          Route::post('/add', 'AdminStreetController@postAdd')->name('adminStreetPostAdd');

          Route::get('/edit', 'AdminStreetController@getEdit')
               ->name('adminStreetGetEdit')
               ->where(['id' => '[0-9]+']);

          Route::put('/edit/{id}', 'AdminStreetController@putEdit')
               ->name('adminStreetPutEdit')
               ->where(['id' => '[0-9]+']);

          Route::delete('/delete/{id}', 'AdminStreetController@delete')
               ->name('adminStreetDelete')
               ->where(['id' => '[0-9]+']);
     });

     Route::group(['prefix' => 'user'], function () {

          Route::get('/', 'AdminUserController@index')->name('adminUser');

          Route::get('/add', 'AdminUserController@getAdd')->name('adminUserGetAdd');

          Route::post('/add', 'AdminUserController@postAdd')->name('adminUserPostAdd');

          Route::get('/edit/{id}', 'AdminUserController@getEdit')
               ->name('adminUserGetEdit')
               ->where(['id' => '[0-9]+']);

          Route::put('/edit/{id}', 'AdminUserController@putEdit')
               ->name('adminUserPutEdit')
               ->where(['id' => '[0-9]+']);

          Route::delete('/delete/{id}', 'AdminUserController@delete')
               ->name('adminUserDelete')
               ->where(['id' => '[0-9]+']);
     });
});


Route::group(['prefix' => 'register'], function () {
     Route::get('/', 'RegisterController@index')->name('registerView');

     Route::post('/', 'RegisterController@register')->name('register');
});