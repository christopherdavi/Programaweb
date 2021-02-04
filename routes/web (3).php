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
Route::get('user', 'App\Http\Controllers\UserController@user')->name('product.user');
Route::get('create', 'App\Http\Controllers\UserController@create')->name('create.product');
Route::get('group', 'App\Http\Controllers\GroupController@group')->name('grup.group');

Route::post('post', 'App\Http\Controllers\UserController@Store')->name('product.store');
