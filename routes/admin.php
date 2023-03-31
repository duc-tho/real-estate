<?php

use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;



Route::get('/', 'Admin\MainController@index')
     ->name('admin');

Route::group(['prefix' => 'post'], function () {
     Route::get('/', [PostController::class, 'index'])
          ->name('admin.post');

     Route::get('/create', [PostController::class, 'create'])
          ->name('admin.post.create');

     Route::post('/', [PostController::class, 'store'])
          ->middleware('validateUploadFile')
          ->name('admin.post.store');

     Route::get('/{id}', [PostController::class, 'edit'])
          ->name('admin.post.edit')
          ->where(['id' => '[0-9]+']);

     Route::put('/{id}', [PostController::class, 'update'])
          ->name('admin.post.update')
          ->where(['id' => '[0-9]+']);

     // Route::put('/edit/deleteimg/{id}', [PostController::class, 'putEdit'])
     //      ->name('admin.PostPutEdit')
     //      ->where(['id' => '[0-9]+']);

     Route::delete('/{id}', [PostController::class, 'destroy'])
          ->name('admin.post.destroy')
          ->where(['id' => '[0-9]+']);
});

Route::group(['prefix' => 'project'], function () {
     Route::get('/', 'Admin\ProjectController@index')
          ->name('admin.project');

     Route::get('/add', 'Admin\ProjectController@getAdd')
          ->name('admin.project.create.view');

     Route::post('/add', 'Admin\ProjectController@postAdd')
          ->name('admin.project.create');

     Route::get('/edit/{id}', 'Admin\ProjectController@getEdit')
          ->name('admin.ProjectGetEdit')
          ->where(['id' => '[0-9]+']);

     Route::put('/edit/{id}', 'Admin\ProjectController@putEdit')
          ->name('admin.ProjectPutEdit')
          ->where(['id' => '[0-9]+']);

     Route::delete('/delete/{id}', 'Admin\ProjectController@delete')
          ->name('admin.ProjectDelete')
          ->where(['id' => '[0-9]+']);
});

Route::group(['prefix' => 'category'], function () {

     Route::get('/', 'Admin\CategoryController@index')
          ->name('admin.Category');

     Route::get('/add', 'Admin\CategoryController@getAdd')
          ->name('admin.CategoryGetAdd');

     Route::post('/add', 'Admin\CategoryController@postAdd')
          ->name('admin.CategoryPostAdd');

     Route::get('/edit/{id}', 'Admin\CategoryController@getEdit')
          ->name('admin.CategoryGetEdit')
          ->where(['id' => '[0-9]+']);

     Route::put('/edit/{id}', 'Admin\CategoryController@putEdit')
          ->name('admin.CategoryPutEdit')
          ->where(['id' => '[0-9]+']);

     Route::delete('/delete/{id}', 'Admin\CategoryController@delete')
          ->name('admin.CategoryDelete')
          ->where(['id' => '[0-9]+']);
});

Route::group(['prefix' => 'city'], function () {

     Route::get('/', 'Admin\CityController@index')
          ->name('admin.City');

     Route::get('/add', 'Admin\CityController@getAdd')
          ->name('admin.CityGetAdd');

     Route::post('/add', 'Admin\CityController@postAdd')
          ->name('admin.CityPostAdd');

     Route::get('/edit/{id}', 'Admin\CityController@getEdit')
          ->name('admin.CityGetEdit')
          ->where(['id' => '[0-9]+']);

     Route::post('/edit/{id}', 'Admin\CityController@putEdit')
          ->name('admin.CityPutEdit')
          ->where(['id' => '[0-9]+']);

     Route::get('/delete/{id}', 'Admin\CityController@delete')
          ->name('admin.CityDelete')
          ->where(['id' => '[0-9]+']);
});

Route::group(['prefix' => 'district'], function () {
     Route::get('/', 'Admin\DistrictController@index')
          ->name('admin.District');

     Route::get('/add', 'Admin\DistrictController@getAdd')
          ->name('admin.DistrictGetAdd');

     Route::post('/add', 'Admin\DistrictController@postAdd')
          ->name('admin.DistrictPostAdd');

     Route::get('/edit/{id}', 'Admin\DistrictController@getEdit')
          ->name('admin.DistrictGetEdit')
          ->where(['id' => '[0-9]+']);

     Route::post('/edit/{id}', 'Admin\DistrictController@putEdit')
          ->name('admin.DistrictPutEdit')
          ->where(['id' => '[0-9]+']);

     Route::get('/delete/{id}', 'Admin\DistrictController@delete')
          ->name('admin.DistrictDelete')
          ->where(['id' => '[0-9]+']);
});

Route::group(['prefix' => 'ward'], function () {
     Route::get('/', 'Admin\AreaController@index')
          ->name('admin.Area');

     Route::get('/add', 'Admin\AreaController@getAdd')
          ->name('admin.AreaGetAdd');

     Route::post('/add', 'Admin\AreaController@postAdd')
          ->name('admin.AreaPostAdd');

     Route::get('/edit/{id}', 'Admin\AreaController@getEdit')
          ->name('admin.AreaGetEdit')
          ->where(['id' => '[0-9]+']);

     Route::post('/edit/{id}', 'Admin\AreaController@putEdit')
          ->name('admin.AreaPutEdit')
          ->where(['id' => '[0-9]+']);

     Route::get('/delete/{id}', 'Admin\AreaController@delete')
          ->name('admin.AreaDelete')
          ->where(['id' => '[0-9]+']);
});

Route::group(['prefix' => 'street'], function () {
     Route::get('/', 'Admin\StreetController@index')
          ->name('admin.Street');

     Route::get('/add', 'Admin\StreetController@getAdd')
          ->name('admin.StreetGetAdd');

     Route::post('/add', 'Admin\StreetController@postAdd')
          ->name('admin.StreetPostAdd');

     Route::get('/edit/{id}', 'Admin\StreetController@getEdit')
          ->name('admin.StreetGetEdit')
          ->where(['id' => '[0-9]+']);

     Route::put('/edit/{id}', 'Admin\StreetController@putEdit')
          ->name('admin.StreetPutEdit')
          ->where(['id' => '[0-9]+']);

     Route::delete('/delete/{id}', 'Admin\StreetController@delete')
          ->name('admin.StreetDelete')
          ->where(['id' => '[0-9]+']);
});

Route::group(['prefix' => 'user'], function () {
     Route::get('/', 'Admin\UserController@index')
          ->name('admin.User');

     Route::get('/add', 'Admin\UserController@getAdd')
          ->name('admin.UserGetAdd');

     Route::post('/add', 'Admin\UserController@postAdd')
          ->name('admin.UserPostAdd');

     Route::get('/edit/{id}', 'Admin\UserController@getEdit')
          ->name('admin.UserGetEdit')
          ->where(['id' => '[0-9]+']);

     Route::put('/edit/{id}', 'Admin\UserController@putEdit')
          ->name('admin.UserPutEdit')
          ->where(['id' => '[0-9]+']);

     Route::delete('/delete/{id}', 'Admin\UserController@delete')
          ->name('admin.UserDelete')
          ->where(['id' => '[0-9]+']);
});
