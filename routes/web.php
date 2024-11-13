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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'PageController@home');
Route::get('/paymentaccount', 'PageController@pa');
Route::get('/workerdata', 'PageController@worker');
Route::get('/transaction', 'PageController@transaction');
Route::get('/logbook', 'PageController@logbook');
Route::get('/admin', 'PageController@admin');

