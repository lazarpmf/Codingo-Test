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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'PagesController@prijava');
//Route::resource('/subscribes', 'SubscriberController');
Route::get('/prijava', 'SubscriberController@create');
Route::get('/subscribes', 'SubscriberController@index');
Route::post('/subscribes', 'SubscriberController@store');
Route::get('/subscribes/{subscribes}', 'SubscriberController@show');
