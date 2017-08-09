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

Route::name('login')->post('/login', 'Auth\LoginController@doLogin');
Route::name('logout')->get('/logout', 'Auth\LoginController@doLogout');

Route::name('getBills')->get('/bill', 'BillController@index');
Route::name('createBill')->post('/bill', 'BillController@store');

Route::name('getPayments')->get('/payment', 'PaymentController@getAll');

Route::name('getUsers')->get('/user', 'UserController@getAll');

