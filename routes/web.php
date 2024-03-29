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
//PHP/Laravel09 課題3
//Route::group(['prefix' => 'XXX']),function(){
//    Route::get('AAA Controller\bbb');
//});

//PHP/Latavel09 課題4
Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('profile/create', 'Admin\ProfileController@add Action');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('profile/edit', 'Admin\ProfileController@edit Action');
});

