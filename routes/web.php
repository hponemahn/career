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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/career', 'layouts/home');
Route::view('/career/result', 'layouts/result');
Route::view('/career/payment', 'layouts/payment');
Route::view('/career/done', 'layouts/done');
