<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth','roleMiddleware'])->group(function(){
    Route::get('/route-1', 'TestController@test')->name('Route Pertama');
    Route::get('/route-2', 'TestController@test')->name('Route Kedua');
    Route::get('/route-3', 'TestController@test')->name('Route Ketiga');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
