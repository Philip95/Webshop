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

Route::get('/produkte/newProduct', 'ProductController@showInsertForm')->name('insert_form');

Route::post('/produkte/newProduct/insert', 'ProductController@insert')->name('insert');

Route::get('/produkte/editForm/{p_id?}', 'ProductController@showeditForm')->name('editform');
Route::post('/produkte/editForm/save', 'ProductController@update')->name('update');

Route::get('/warenkorb', 'ProductController@Warenkorb')->name('warenkorb');
Route::get('/warenkorb/produkt', 'ProductController@product')->name('getProduct');

Route::get('/warenkorb/checkout/', 'BezahlungController@checkout')->name('rechnungsadresse');
Route::get('/warenkorb/checkout/shipping', 'BezahlungController@rechnungsadresse')->name('shipping');

Route::get('/warenkorb/checkout/shipping/payment', 'BezahlungController@choosePayment')->name('payment');

Route::get('/warenkorb/checkout/shipping/payment/overview', 'BezahlungController@overview')->name('summary');

Route::post('/warenkorb/checkout/shipping/payment/overview/purchase', 'BezahlungController@purchase')->name('purchase');
