<?php

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

Route::prefix('v1')->group(function () {
    Route::post('register', 'App\Http\Controllers\Auth\LoginController@register');
    Route::post('login', 'App\Http\Controllers\Auth\LoginController@login');

    // if sudah login, bisa akses route ini
    Route::middleware('auth:sanctum')->group(function () {
        Route::post('logout', 'App\Http\Controllers\Auth\LoginController@logout');

        Route::get('jenis-layanan', 'App\Http\Controllers\JenisLayananController@index');
        Route::post('jenis-layanan', 'App\Http\Controllers\JenisLayananController@store');
        Route::put('jenis-layanan/{id}', 'App\Http\Controllers\JenisLayananController@update');
        Route::delete('jenis-layanan/{id}', 'App\Http\Controllers\JenisLayananController@destroy');
    });
});
