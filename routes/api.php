<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
     return $request->user();
});

Route::group(['prefix' => 'district'], function () {
     Route::get('/', 'Api\DistrictController@index')->name('apiDistrict');

     Route::get('/city/{cityId}', 'Api\DistrictController@getDistrictByCity')->name('apiDistrictByCity');
});

Route::group(['prefix' => 'area'], function () {
     Route::get('/', 'Api\AreaController@index')->name('apiArea');

     Route::get('/district/{districtId}', 'Api\AreaController@getAreaByDistrict')->name('apiAreaByCity');
});

Route::group(['prefix' => 'street'], function () {
     Route::get('/', 'Api\StreetController@index')->name('apiStreet');

     Route::get('/area/{areaId}', 'Api\StreetController@getStreetByArea')->name('apiStreetByCity');
});