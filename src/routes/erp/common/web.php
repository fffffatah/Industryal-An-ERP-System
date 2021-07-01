<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes (Common Features)
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/common/signin', ['as'=>'signin.index', 'uses'=>'SigninController@index']);
Route::post('/common/signin', ['as'=>'signin.verify', 'uses'=>'SigninController@verify']);
Route::get('/common/signup', ['as'=>'signup.index', 'uses'=>'SignupController@index']);
Route::post('/common/signup', ['as'=>'signup.verify', 'uses'=>'SignupController@verify']);