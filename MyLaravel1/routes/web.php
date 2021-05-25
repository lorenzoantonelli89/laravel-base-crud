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

Route::get('/', 'OspitiController@home') -> name('home');
Route::get('/ospite/{id}', 'OspitiController@ospite') -> name('ospite');
Route::get('/newOspite', 'OspitiController@newOspite') -> name('newOspite');
Route::post('/store', 'OspitiController@store') -> name('store');