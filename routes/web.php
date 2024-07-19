<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admins\DanhMucController;
use App\Http\Controllers\admins\DonHangController;
use App\Http\Controllers\admins\SanPhamController;
use App\Http\Controllers\admins\BinhLuanController;
use App\Http\Controllers\admins\TaiKhoanController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resources([
    'sanpham' => SanPhamController::class,
    'binhluan' => BinhLuanController::class,
]);