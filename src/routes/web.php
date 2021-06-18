<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HRuserController;
use App\Http\Controllers\HRhomeController;

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
//Hr home
Route::get('/home',[HRhomeController::class,'index'])->name('HRhome.index');

//HR user create
Route::get('/user/create',[HRuserController::class,'create'])->name('HRuser.create');
Route::get('/user/list',[HRuserController::class,'index'])->name('HRuser.index');
