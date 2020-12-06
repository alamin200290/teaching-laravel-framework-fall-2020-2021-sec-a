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

Route::get('/',  function () {
    return view('welcome');
});


Route::get('/login', 'loginController@index');
Route::post('/login', 'loginController@verify');
Route::get('/logout', 'logoutController@index');


Route::get('/home', 'homeController@index');
Route::get('/create', 'homeController@create');
Route::post('/create', 'homeController@store');

Route::get('/userlist', 'homeController@userlist');
Route::get('/details/{id}', 'homeController@show');

Route::get('/edit/{id}', 'homeController@edit');
Route::post('/edit/{id}', 'homeController@update');

Route::get('/delete/{id}', 'homeController@delete');
Route::post('/delete/{id}', 'homeController@destroy');

