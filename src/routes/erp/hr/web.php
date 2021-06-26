<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HRuserController;
use App\Http\Controllers\HRhomeController;
use App\Http\Controllers\HRemployeeController;
use App\Http\Controllers\HREmpScheduleController;
use App\Http\Controllers\HRgroupController;
use App\Http\Controllers\HRexpenseController;
use App\Http\Controllers\HRexpenseListController;
use App\Http\Controllers\HRExStatisticController;
use App\Http\Controllers\HRLeaveController;
use App\Http\Controllers\HRpayrollController;
use App\Http\Controllers\HRuserProfileController;

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
Route::get('/HR/home',[HRhomeController::class,'index'])->name('HRhome.index');


//HR user create
Route::get('/HR/user/create',[HRuserController::class,'create'])->name('HRuser.create');
Route::get('/HR/user/list',[HRuserController::class,'index'])->name('HRuser.index');
//Employee Create
Route::get('/HR/employee/create',[HRemployeeController::class,'create'])->name('HRemployee.create');
Route::post('/HR/employee/create',[HRemployeeController::class,'index']);
Route::get('/HR/employee/list',[HRemployeeController::class,'emplist'])->name('HRemployee.emplist');
Route::get('/HR/employee/group',[HRgroupController::class,'index'])->name('HRgroup.index');
Route::get('/HR/employee/schedule',[HREmpScheduleController::class,'schedule'])->name('HREmpSchedule.schedule');

//leave request
Route::get('/HR/leave/request',[HRLeaveController::class,'leave'])->name('HRLeave.leave');
Route::get('/HR/leave/request/list',[HRLeaveController::class,'leaveList'])->name('HRLeave.leaveList');
//payroll
Route::get('/HR/payroll/show',[HRpayrollController::class,'show'])->name('HRpayroll.show');

//expense report
Route::get('/HR/expense/report',[HRexpenseController::class,'report'])->name('HRexpense.report');
Route::get('/HR/expense/list',[HRexpenseListController::class,'list'])->name('HRexpenseList.list');
Route::get('/HR/expense/statistic',[HRExStatisticController::class,'statistic'])->name('HRExStatistic.statistic');
//user profile
Route::get('/HR/user/profile',[HRuserProfileController::class,'details'])->name('HRuserProfile.details');
Route::get('/HR/user/profile/edit',[HRuserProfileController::class,'profileEdit'])->name('HRuserProfile.profileEdit');
Route::get('/HR/user/profile/edit/changePassword',[HRuserProfileController::class,'changePassword'])->name('HRuserProfile.changePassword');
Route::get('/HR/user/profile/edit/uploadImage',[HRuserProfileController::class,'uploadImage'])->name('HRuserProfile.uploadImage');





