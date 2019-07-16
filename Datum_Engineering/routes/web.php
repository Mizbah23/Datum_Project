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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});
Route::get('/', 'homeController@index')->name('home');
Route::get('/about', 'aboutController@index')->name('about');
Route::get('/timeline', 'designDivisionController@index')->name('timeline');
Route::get('/design', 'serviceController@index')->name('services');
Route::get('/single', 'singleController@index')->name('single');