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

Route::get('/', 'HomeController@home');
Route::get('/about', 'AboutController@about');
Route::get('/gallery', 'GalleryController@gallery');
Route::get('/contact', 'ContactController@contact');
Route::get('/submit', 'ContactController@submitForm')->name('submit_form');
Route::post('/submit', 'ContactController@submitForm')->name('submit_form');
Route::get('/login', 'LoginController@load');
Route::post('/login', 'LoginController@login')->name('log_in');