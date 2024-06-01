<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//NhanVien
Route::get('/NhanVien','App\Http\Controllers\NhanVienController@NhanVien');
Route::get('/getNhanVien','App\Http\Controllers\NhanVienController@getNhanVien')->name('admin.NhanVien.getNhanVien');
Route::get('updateNhanVien/{nid}','App\Http\Controllers\NhanVienController@editNhanVien');
Route::post('updateNhanVien/{nid}','App\Http\Controllers\NhanVienController@updateNhanVien');
Route::get('deleteNhanVien/{nid}','App\Http\Controllers\NhanVienController@deleteNhanVien');
//DSLuong
Route::get('/DanhSachLuong','App\Http\Controllers\DanhSachLuongController@DanhSachLuong');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
