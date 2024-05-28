<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/NhanVien','App\Http\Controllers\NhanVienController@getNhanVien');
Route::get('/ThemNhanVien','App\Http\Controllers\NhanVienController@impinsertNhanVien');
Route::get('/insertNhanVien','App\Http\Controllers\NhanVienController@insertNhanVien');
Route::get('/DanhSachLuong','App\Http\Controllers\DanhSachLuongController@getDanhSachLuong');