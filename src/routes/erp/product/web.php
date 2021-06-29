<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductHomeController;
use App\Http\Controllers\ProductCreateController;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\ProductStockController;
use App\Http\Controllers\ProductStatisticsController;
use App\Http\Controllers\WarehouseListController;
use App\Http\Controllers\WarehouseStatisticsController;
use App\Http\Controllers\ProductUserController;
use App\Http\Controllers\ProductTransferController;
use App\Http\Controllers\WarehouseCreateController;
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
    return redirect() -> route('signin.index');  
});

Route::get('/',[ProductUserController::class, 'logout'])->name('user.logout');


                                    // Products
//Product
Route::get('/product/home',[ProductHomeController::class, 'index'])->name('productHome.index');

Route::get('/product/create',[ProductCreateController::class, 'index'])->name('productCreate.index');
Route::post('/product/create',[ProductCreateController::class, 'create']);

Route::get('/product/list',[ProductListController::class, 'index'])->name('productList.index');
Route::get('/product/list/faulty',[ProductListController::class, 'faulty'])->name('productListFaulty.index');

// Update
Route::get('/product/edit/{product_id}',[ProductListController::class, 'editProduct'])->name('productList.editProduct');
Route::post('/product/edit/{product_id}',[ProductListController::class, 'updateProduct']);

Route::get('/product/delete/{product_id}',[ProductListController::class, 'deleteProduct'])->name('productList.deleteProduct');
Route::post('/product/delete/{product_id}',[ProductListController::class, 'destroyProduct']);

Route::get('/product/stocks',[ProductStockController::class, 'index'])->name('productStocks.index');
Route::get('/product/statistics',[ProductStatisticsController::class, 'index'])->name('productStatistics.index');

Route::get('/product/transfer',[ProductTransferController::class, 'index'])->name('productTransfer.index');
Route::post('/product/transfer',[ProductTransferController::class, 'transfer']);

//Warehouse
Route::get('/warehouse/create',[WarehouseCreateController::class, 'index'])->name('warehouseCreate.index');
Route::post('/warehouse/create',[WarehouseCreateController::class, 'create']);

Route::get('/warehouse/list',[WarehouseListController::class, 'index'])->name('warehouseList.index');

// Edit
Route::get('/warehouse/edit/{warehouse_id}',[WarehouseListController::class, 'editWarehouse'])->name('warehouseList.edit');
Route::post('/warehouse/edit/{warehouse_id}',[WarehouseListController::class, 'updateWarehouse']);

Route::get('/warehouse/statistics',[WarehouseStatisticsController::class, 'index'])->name('warehouseStatistics.index');

//Others
Route::get('/product/user/activities',[ProductUserController::class, 'activities'])->name('userActivities.index');
Route::get('/product/user/leave',[ProductUserController::class, 'leave'])->name('userLeave.index');
Route::get('/product/user/administration',[ProductUserController::class, 'administration'])->name('userAdministration.index');

//User
Route::get('/product/user/profile',[ProductUserController::class, 'profile'])->name('userProfile.index');

Route::get('/product/user/edit',[ProductUserController::class, 'editProfile'])->name('userEditProfile.index');
Route::post('/product/user/edit',[ProductUserController::class, 'editProfileVerify']);

Route::get('/product/user/edit/profilepicture',[ProductUserController::class, 'editProfilePicture'])->name('userEditProfilePicture.index');
Route::post('/product/user/edit/profilepicture',[ProductUserController::class, 'editProfilePictureVerify']);

Route::get('/product/user/edit/changePassword',[ProductUserController::class, 'changePassword'])->name('userChangePassword.index');
Route::post('/product/user/edit/changePassword',[ProductUserController::class, 'changePasswordVerify']);

Route::get('/product/user/edit/changePassword/verify',[ProductUserController::class, 'verification'])->name('userChangeProfileVerication.index');
Route::post('/product/user/edit/changePassword/verify',[ProductUserController::class, 'verificationVerify']);


// Export
Route::get('/product/list/good/export',[ProductListController::class, 'exportGoodProduct'])->name('productList.exportGoodProduct');
Route::get('/product/list/faulty/export',[ProductListController::class, 'exportFaultyProduct'])->name('productList.exportFaultyProduct');