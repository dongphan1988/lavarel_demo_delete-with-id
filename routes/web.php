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

Route::get('/index', 'CustomerController@showCustomers');

Route::get('/index/{id}/delete', 'CustomerController@deleteCustomer')->name('delete');

Route::post('/index/delete','CustomerController@destroy')->name('destroy');