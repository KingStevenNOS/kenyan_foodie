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

//This is the router for the frontend
Route::get('/', 'MainController@home')->name('home');
Route::get('/about', 'MainController@about')->name('about');
Route::get('/lifestyle', 'MainController@lifestyle')->name('lifestyle');
Route::get('/contact', 'MainController@contact')->name('contact');
Route::get('/foods', 'MainController@foods')->name('foods');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
