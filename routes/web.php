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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/invest', 'HomeController@invest')->name('invest');
Route::get('/registration', 'HomeController@registration')->name('registration');
Route::post('/registration', 'HomeController@postRegistration')->name('postRegistration');
Route::post('/order', 'OrderController@store')->name('order.store');
Route::get('/lang/{lang}', 'HomeController@lang')->name('lang');
