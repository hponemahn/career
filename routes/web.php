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
Route::post('/career/result', 'App\Http\Controllers\CareerController@result');
Route::post('/career/payment', 'App\Http\Controllers\CareerController@payment');
Route::post('/career/done', 'App\Http\Controllers\CareerController@done');
