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

// Route::get('/', function () {
//     return view('welcome');
// });

// MyMar
Route::view('/', 'mymar/app');
Route::post('/inquiry', 'App\Http\Controllers\MymarController@inquiry');

// career
Route::view('/career', 'career/home');
Route::post('/career/result', 'App\Http\Controllers\CareerController@result');
Route::post('/career/payment', 'App\Http\Controllers\CareerController@payment');
Route::post('/career/done', 'App\Http\Controllers\CareerController@done');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::any('{query}', 
  function() { return redirect('/career'); })
  ->where('query', '.*');
