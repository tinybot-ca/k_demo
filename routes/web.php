<?php

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

Auth::routes();

Route::get('/', function () {
    return redirect('/presentation-for-jeff');
});

Route::get('/home', function () {
    return redirect('/presentation-for-jeff');
});

Route::get('/presentation-for-jeff', 'HomeController@index');
