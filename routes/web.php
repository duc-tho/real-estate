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


Route::get('/', 'Index\HomeController@index')->name('home');

Route::group(['prefix' => 'du-an'], function () {
     Route::get('/', 'Index\ProjectController@index')->name('project');

     Route::get('/{slug}', 'Index\ProjectController@projectDetail')
          ->name('projectDetail');
});

Route::group(['prefix' => 'user'], function () {
     Route::get('/', 'Index\UserController@index')->name('user');
});

Route::group(['prefix' => 'bat-dong-san'], function () {
     /**
      * /bat-dong-san//mua/nha/hcm/quan-binh-thanh/ban-nha-123
      * /du-an/hcm/quan-binh-thanh/du-an-123/thue
      */

     Route::get('/', 'Index\PostController@index')->name('post');

     Route::get('/khu-vuc/{city_slug}', 'Index\PostController@postCity')
          ->name('postCity');

     Route::get('/khu-vuc/{city_slug}/{district_slug}', 'Index\PostController@postDistrict')
          ->name('postDistrict');

     Route::get('/khu-vuc/{city_slug}/{district_slug}/{area_slug}', 'Index\PostController@postArea')
          ->name('postArea');

     Route::get('/khu-vuc/{city_slug}/{district_slug}/{area_slug}/{street_slug}', 'Index\PostController@postStreet')
          ->name('postStreet');

     Route::get('/danh-muc/{category_slug}', 'Index\PostController@postCategory')
          ->name('postCategory');

     Route::get('{type}/du-an/{project_slug}', 'Index\PostController@postProject')
          ->name('postProject');

     Route::get('/{post_slug}', 'Index\PostController@postDetail')
          ->name('postDetail');
});

Route::group(['prefix' => 'auth'], function () {
     Route::get('/login', 'AuthController@login')->name('login');

     Route::post('/authenticate', 'AuthController@authenticate')->name('auth');

     Route::get('/logout', 'AuthController@logout')->name('logout');
});

Route::prefix('admin')->middleware('requireAuth')->group(function () {

     Route::get('/', 'Admin\MainController@index')->name('admin');

     Route::group(['prefix' => 'post'], function () {

          Route::get('/', 'Admin\PostController@index')->name('adminPost');

          Route::get('/add', 'Admin\PostController@getAdd')->name('adminPostGetAdd');

          Route::post('/add', 'Admin\PostController@postAdd')->middleware('validateUploadFile')->name('adminPostPostAdd');

          Route::get('/edit/{id}', 'Admin\PostController@getEdit')
               ->name('adminPostGetEdit')
               ->where(['id' => '[0-9]+']);

          Route::put('/edit/{id}', 'Admin\PostController@putEdit')
               ->name('adminPostPutEdit')
               ->where(['id' => '[0-9]+']);

          Route::delete('/delete/{id}', 'Admin\PostController@delete')
               ->name('adminPostDelete')
               ->where(['id' => '[0-9]+']);
     });


     Route::group(['prefix' => 'project'], function () {

          Route::get('/', 'Admin\ProjectController@index')->name('adminProject');

          Route::get('/add', 'Admin\ProjectController@getAdd')->name('adminProjectGetAdd');

          Route::post('/add', 'Admin\ProjectController@postAdd')->name('adminProjectPostAdd');

          Route::get('/edit/{id}', 'Admin\ProjectController@getEdit')
               ->name('adminProjectGetEdit')
               ->where(['id' => '[0-9]+']);

          Route::put('/edit/{id}', 'Admin\ProjectController@putEdit')
               ->name('adminProjectPutEdit')
               ->where(['id' => '[0-9]+']);

          Route::delete('/delete/{id}', 'Admin\ProjectController@delete')
               ->name('adminProjectDelete')
               ->where(['id' => '[0-9]+']);
     });


     Route::group(['prefix' => 'category'], function () {

          Route::get('/', 'Admin\CategoryController@index')->name('adminCategory');

          Route::get('/add', 'Admin\CategoryController@getAdd')->name('adminCategoryGetAdd');

          Route::post('/add', 'Admin\CategoryController@postAdd')->name('adminCategoryPostAdd');

          Route::get('/edit/{id}', 'Admin\CategoryController@getEdit')
               ->name('adminCategoryGetEdit')
               ->where(['id' => '[0-9]+']);

          Route::put('/edit/{id}', 'Admin\CategoryController@putEdit')
               ->name('adminCategoryPutEdit')
               ->where(['id' => '[0-9]+']);

          Route::delete('/delete/{id}', 'Admin\CategoryController@delete')
               ->name('adminCategoryDelete')
               ->where(['id' => '[0-9]+']);
     });


     Route::group(['prefix' => 'city'], function () {

          Route::get('/', 'Admin\CityController@index')->name('adminCity');

          Route::get('/add', 'Admin\CityController@getAdd')->name('adminCityGetAdd');

          Route::post('/add', 'Admin\CityController@postAdd')->name('adminCityPostAdd');

          Route::get('/edit/{id}', 'Admin\CityController@getEdit')
               ->name('adminCityGetEdit')
               ->where(['id' => '[0-9]+']);

          Route::post('/edit/{id}', 'Admin\CityController@putEdit')
               ->name('adminCityPutEdit')
               ->where(['id' => '[0-9]+']);

          Route::get('/delete/{id}', 'Admin\CityController@delete')
               ->name('adminCityDelete')
               ->where(['id' => '[0-9]+']);
     });

     Route::group(['prefix' => 'district'], function () {

          Route::get('/', 'Admin\DistrictController@index')->name('adminDistrict');

          Route::get('/add', 'Admin\DistrictController@getAdd')->name('adminDistrictGetAdd');

          Route::post('/add', 'Admin\DistrictController@postAdd')->name('adminDistrictPostAdd');

          Route::get('/edit/{id}', 'Admin\DistrictController@getEdit')
               ->name('adminDistrictGetEdit')
               ->where(['id' => '[0-9]+']);

          Route::post('/edit/{id}', 'Admin\DistrictController@putEdit')
               ->name('adminDistrictPutEdit')
               ->where(['id' => '[0-9]+']);

          Route::get('/delete/{id}', 'Admin\DistrictController@delete')
               ->name('adminDistrictDelete')
               ->where(['id' => '[0-9]+']);
     });

     Route::group(['prefix' => 'area'], function () {

          Route::get('/', 'Admin\AreaController@index')->name('adminArea');

          Route::get('/add', 'Admin\AreaController@getAdd')->name('adminAreaGetAdd');

          Route::post('/add', 'Admin\AreaController@postAdd')->name('adminAreaPostAdd');

          Route::get('/edit/{id}', 'Admin\AreaController@getEdit')
               ->name('adminAreaGetEdit')
               ->where(['id' => '[0-9]+']);

          Route::post('/edit/{id}', 'Admin\AreaController@putEdit')
               ->name('adminAreaPutEdit')
               ->where(['id' => '[0-9]+']);

          Route::get('/delete/{id}', 'Admin\AreaController@delete')
               ->name('adminAreaDelete')
               ->where(['id' => '[0-9]+']);
     });

     Route::group(['prefix' => 'street'], function () {

          Route::get('/', 'Admin\StreetController@index')->name('adminStreet');

          Route::get('/add', 'Admin\StreetController@getAdd')->name('adminStreetGetAdd');

          Route::post('/add', 'Admin\StreetController@postAdd')->name('adminStreetPostAdd');

          Route::get('/edit/{id}', 'Admin\StreetController@getEdit')
               ->name('adminStreetGetEdit')
               ->where(['id' => '[0-9]+']);

          Route::put('/edit/{id}', 'Admin\StreetController@putEdit')
               ->name('adminStreetPutEdit')
               ->where(['id' => '[0-9]+']);

          Route::delete('/delete/{id}', 'Admin\StreetController@delete')
               ->name('adminStreetDelete')
               ->where(['id' => '[0-9]+']);
     });

     Route::group(['prefix' => 'user'], function () {

          Route::get('/', 'Admin\UserController@index')->name('adminUser');

          Route::get('/add', 'Admin\UserController@getAdd')->name('adminUserGetAdd');

          Route::post('/add', 'Admin\UserController@postAdd')->name('adminUserPostAdd');

          Route::get('/edit/{id}', 'Admin\UserController@getEdit')
               ->name('adminUserGetEdit')
               ->where(['id' => '[0-9]+']);

          Route::put('/edit/{id}', 'Admin\UserController@putEdit')
               ->name('adminUserPutEdit')
               ->where(['id' => '[0-9]+']);

          Route::delete('/delete/{id}', 'Admin\UserController@delete')
               ->name('adminUserDelete')
               ->where(['id' => '[0-9]+']);
     });
});


Route::group(['prefix' => 'register'], function () {
     Route::get('/', 'Index\RegisterController@index')->name('registerView');

     Route::post('/', 'Index\RegisterController@register')->name('register');
});

Route::post('/uploadcke', 'UploadCKEController@index')->name('uploadCKEditor');