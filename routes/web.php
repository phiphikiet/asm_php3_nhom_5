<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admins\SanPhamController;
use App\Http\Controllers\admins\TaiKhoanController;
use App\Http\Controllers\admins\BinhLuanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix("admin")->name("admin.")->group(function(){
    Route::resource("sanpham",SanPhamController::class);
    Route::resource("taikhoan",taikhoanController::class);
});


Route::get('/', function () {
    return view('welcome');
});

Route::resources([
    'sanpham' => SanPhamController::class,
    'binhluan' => BinhLuanController::class,
]);

