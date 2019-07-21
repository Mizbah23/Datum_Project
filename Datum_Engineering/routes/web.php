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


Route::get('/', 'homeController@index')->name('home');
Route::get('/about', 'aboutController@index')->name('about');
Route::get('/Construction', 'construcionController@index')->name('construction');
Route::get('/design', 'serviceController@index')->name('services');
Route::get('/single', 'singleController@index')->name('single');
Route::get('/contact', 'contactController@index')->name('contact');
Route::get('/developing', 'developingController@index')->name('developing');
Route::get('/surey|gis', 'surveyController@index')->name('survey');
Route::get('/soiltest', 'soiltestController@index')->name('soiltest');
Route::get('/mep', 'mepController@index')->name('mep');
Route::get('/team', 'teamController@index')->name('team');
Route::get('/moredesign', 'designController@index')->name('design');