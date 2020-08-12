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

Route::get('/','HomeController@index')->name('home');
Route::get('/projects','HomeController@projects')->name('projects');
Route::get('/news','HomeController@news')->name('news');
Route::get('/about/Ikhwan-e-Islam','HomeController@about')->name('about');
Route::get('/contact-us','HomeController@contact')->name('contact');

