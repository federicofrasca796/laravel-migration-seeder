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

Route::get('/', 'HomepageController@homepage')->name('home');
Route::get('/trips', 'TripController@index')->name('trips');
Route::get('/trip/{trip_id}', 'TripController@show')->name('trip');
Route::get('/blog', 'PostController@index')->name('blog');
Route::get('/blog/{post_id}', 'PostController@show')->name('post');
