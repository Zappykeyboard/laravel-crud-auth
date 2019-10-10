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

Route::get('/', 'CatController@index')->name('cat.index');

Auth::routes();

Route::get('/cat/{id}', 'CatAuthController@show')
          ->middleware('auth')
          ->name('cat.auth.show');

Route::get('/new', 'CatAuthController@create')
          ->middleware('auth')
          ->name('cat.auth.create');

Route::post('/', 'CatAuthController@store')
        ->middleware('auth')
        ->name('cat.auth.store');




Route::get('/home', 'HomeController@index')->name('home');
