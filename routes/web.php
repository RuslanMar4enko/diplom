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

Route::get('/', 'AppController@home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/sencs', 'ProfilesController@sencs')->name('sencs');
Route::get('/profile/{id}', 'ProfilesController@show')->middleware('auth');
//Route::resource('data_users', 'DataUsersController')->middleware('auth');
Route::resource('data_users', 'DataUsersController', ['except' => [
    'show'
]])->middleware('auth');

Route::resource('housing_communals', 'HousingCommunalsController', ['except' => [
    'show'
]])->middleware('auth');

Route::resource('revenues', 'RevenuesController', ['except' => [
    'show'
]])->middleware('auth');

Route::resource('costs', 'CostsController', ['except' => [
    'show'
]])->middleware('auth');

