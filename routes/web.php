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
Auth::routes();

Route::get('/', 'PageController@index');
Route::get('/blog/{post:slug}', 'PageController@show')->name('blog');

Route::resource('post', 'Backend\PostController')->middleware('auth')->except('show');
