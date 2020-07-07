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

Route::delete('/card/{id}', 'HomeController@destroy');

Route::put('/card/{id}', 'HomeController@update');

Route::get('/', 'HomeController@index');

Route::get('/card/{id}/edit', 'HomeController@edit');

Route::get('/card/{id}', 'HomeController@show')->name('showRoute');

Route::get('/create', function(){

    return view('create');
});

Route::post('/create', 'HomeController@store');




