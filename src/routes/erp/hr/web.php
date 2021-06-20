<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HRuserController;
use App\Http\Controllers\HRhomeController;
use App\Http\Controllers\HRemployeeController;
use App\Http\Controllers\HRgroupController;
use App\Http\Controllers\HRexpenseController;
use App\Http\Controllers\HRexpenseListController;
use App\Http\Controllers\HRExStatisticController;
use App\Http\Controllers\HRLeaveController;
use App\Http\Controllers\HRpayrollController;

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

//Hr home
Route::get('/home',[HRhomeController::class,'index'])->name('HRhome.index');

//HR user create
Route::get('/user/create',[HRuserController::class,'create'])->name('HRuser.create');
Route::get('/user/list',[HRuserController::class,'index'])->name('HRuser.index');
//Employee Create
Route::get('/employee/create',[HRemployeeController::class,'create'])->name('HRemployee.create');
Route::get('/employee/group',[HRgroupController::class,'index'])->name('HRgroup.index');

//leave request
Route::get('/leave/request',[HRLeaveController::class,'leave'])->name('HRLeave.leave');
//payroll
Route::get('/payroll/show',[HRpayrollController::class,'show'])->name('HRpayroll.show');

//expense report
Route::get('/expense/report',[HRexpenseController::class,'report'])->name('HRexpense.report');
Route::get('/expense/list',[HRexpenseListController::class,'list'])->name('HRexpenseList.list');
Route::get('/expense/statistic',[HRExStatisticController::class,'statistic'])->name('HRExStatistic.statistic');



