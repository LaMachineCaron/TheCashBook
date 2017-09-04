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

Route::name('getBillBooks')->get('/billBook', 'BillBookController@getAll');
Route::name('createBillBook')->post('/billBook', 'BillBookController@store');

Route::name('getBills')->get('/bill', 'BillController@index');
Route::name('createBill')->post('/bill', 'BillController@store');
Route::name('deleteBill')->delete('/bill/{id}', 'BillController@destroy');

Route::name('getPayments')->get('/payment', 'PaymentController@getAll');
Route::name('createPayment')->post('/payment', 'PaymentController@store');
Route::name('deletePayment')->delete('/payment/{id}', 'PaymentController@destroy');

Route::name('getUsers')->get('/user', 'UserController@getAll');

