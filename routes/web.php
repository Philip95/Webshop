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

Route::get('/', 'ProductController@home')->name('home');

Route::get('/produkte', 'ProductController@overview')->name('verwalten');
Route::get('/produkte/delete/{p_id?}', 'ProductController@delete')->name('delete_product');
