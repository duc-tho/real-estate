<?php

use App\Http\Controllers\System\InitialController;
use Illuminate\Support\Facades\Route;

Route::get('/', [InitialController::class, 'index'])->name('init');
Route::post('/', [InitialController::class, 'handle'])->name('init.handle');

Route::get('/setting', [InitialController::class, 'setting'])->name('welcome');
Route::post('/setting', [InitialController::class, 'settingHandle'])->name('welcome.handle');
