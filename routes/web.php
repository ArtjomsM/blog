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

Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('/about', 'App\Http\Controllers\HomeController@about');

Route::get('/contact', 'App\Http\Controllers\HomeController@contact');

Route::get('/post/{id}', 'App\Http\Controllers\PostController@view');

Route::post('/send', 'App\Http\Controllers\EmailController@send_email');

Route::post('/email', 'App\Http\Controllers\EmailController@get_email');

Auth::routes();

Route::get('/new', 'App\Http\Controllers\HomeController@login');

Route::post('/create', 'App\Http\Controllers\PostController@create');