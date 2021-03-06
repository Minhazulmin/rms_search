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

Route::get('/', function () {
    return view('welcome');
});

Route::any('/search','UserController@search');
Route::any('/search_By_number','UserController@search_By_number');
Route::get('/add','UserController@add')->name('add');
Route::post('/user/store','UserController@storeuser')->name('storeuser');
