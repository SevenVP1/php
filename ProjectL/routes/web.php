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
//ChamCong
Route::get('/ChamCong','App\Http\Controllers\ChamCongController@ChamCong');
Route::get('/getChamCong','App\Http\Controllers\ChamCongController@getChamCong')->name('admin.ChamCong.getChamCong');
Route::get('updateChamCong/{cid}','App\Http\Controllers\ChamCongController@editChamCong');
Route::post('updateChamCong/{cid}','App\Http\Controllers\ChamCongController@updateChamCong');
Route::get('deleteChamCong/{cid}','App\Http\Controllers\ChamCongController@deleteChamCong');
Route::get('insertChamCong','App\Http\Controllers\ChamCongController@nhapChamCong');
Route::post('insertChamCong','App\Http\Controllers\ChamCongController@insertChamCong');
//Chucvu
Route::get('/ChucVu','App\Http\Controllers\ChucVuController@ChucVu');
Route::get('updateChucVu/{id}','App\Http\Controllers\ChucVuController@editChucVu');
Route::post('updateChucVu/{id}','App\Http\Controllers\ChucVuController@updateChucVu');
Route::get('deleteChucVu/{id}','App\Http\Controllers\ChucVuController@deleteChucVu');
Route::get('insertChucVu','App\Http\Controllers\ChucVuController@nhapChucVu');
Route::post('insertChucVu','App\Http\Controllers\ChucVuController@insertChucVu');
//ChucvuNV
Route::get('/ChucVuNV','App\Http\Controllers\ChucVuNVController@ChucVuNV');
Route::get('/getChucVuNV','App\Http\Controllers\ChucVuNVController@getChucVuNV')->name('admin.ChucVuNV.getChucVuNV');
Route::get('updateChucVuNV/{cvid}','App\Http\Controllers\ChucVuNVController@editChucVuNV');
Route::post('updateChucVuNV/{cvid}','App\Http\Controllers\ChucVuNVController@updateChucVuNV');
Route::get('deleteChucVuNV/{cvid}','App\Http\Controllers\ChucVuNVController@deleteChucVuNV');
Route::get('insertChucVuNV','App\Http\Controllers\ChucVuNVController@nhapChucVuNV');
Route::post('insertChucVuNV','App\Http\Controllers\ChucVuNVController@insertChucVuNV');
//HSLuong
Route::get('/HSLuong','App\Http\Controllers\HSLuongController@HSLuong');
Route::get('updateHSLuong/{id}','App\Http\Controllers\HSLuongController@editHSLuong');
Route::post('updateHSLuong/{id}','App\Http\Controllers\HSLuongController@updateHSLuong');
Route::get('deleteHSLuong/{id}','App\Http\Controllers\HSLuongController@deleteHSLuong');
Route::get('insertHSLuong','App\Http\Controllers\HSLuongController@nhapHSLuong');
Route::post('insertHSLuong','App\Http\Controllers\HSLuongController@insertHSLuong');
//HSLuongNV
Route::get('/HSLuongNV','App\Http\Controllers\HSLuongNVController@HSLuongNV');
Route::get('/getHSLuongNV','App\Http\Controllers\HSLuongNVController@getHSLuongNV')->name('admin.HSLuongNV.getHSLuongNV');
Route::get('updateHSLuongNV/{hsid}','App\Http\Controllers\HSLuongNVController@editHSLuongNV');
Route::post('updateHSLuongNV/{hsid}','App\Http\Controllers\HSLuongNVController@updateHSLuongNV');
Route::get('deleteHSLuongNV/{hsid}','App\Http\Controllers\HSLuongNVController@deleteHSLuongNV');
Route::get('insertHSLuongNV','App\Http\Controllers\HSLuongNVController@nhapHSLuongNV');
Route::post('insertHSLuongNV','App\Http\Controllers\HSLuongNVController@insertHSLuongNV');
//Luong
Route::get('/Luong','App\Http\Controllers\LuongController@Luong');
Route::get('updateLuong/{id}','App\Http\Controllers\LuongController@editLuong');
Route::post('updateLuong/{id}','App\Http\Controllers\LuongController@updateLuong');
Route::get('deleteLuong/{id}','App\Http\Controllers\LuongController@deleteLuong');
Route::get('insertLuong','App\Http\Controllers\LuongController@nhapLuong');
Route::post('insertLuong','App\Http\Controllers\LuongController@insertLuong');
//LuongNV
Route::get('/LuongNV','App\Http\Controllers\LuongNVController@LuongNV');
Route::get('/getLuongNV','App\Http\Controllers\LuongNVController@getLuongNV')->name('admin.LuongNV.getLuongNV');
Route::get('updateLuongNV/{lid}','App\Http\Controllers\LuongNVController@editLuongNV');
Route::post('updateLuongNV/{lid}','App\Http\Controllers\LuongNVController@updateLuongNV');
Route::get('deleteLuongNV/{lid}','App\Http\Controllers\LuongNVController@deleteLuongNV');
Route::get('insertLuongNV','App\Http\Controllers\LuongNVController@nhapLuongNV');
Route::post('insertLuongNV','App\Http\Controllers\LuongNVController@insertLuongNV');
//NhanVien
Route::get('/NhanVien','App\Http\Controllers\NhanVienController@NhanVien');
Route::get('/getNhanVien','App\Http\Controllers\NhanVienController@getNhanVien')->name('admin.NhanVien.getNhanVien');
Route::get('updateNhanVien/{nid}','App\Http\Controllers\NhanVienController@editNhanVien');
Route::post('updateNhanVien/{nid}','App\Http\Controllers\NhanVienController@updateNhanVien');
Route::get('deleteNhanVien/{nid}','App\Http\Controllers\NhanVienController@deleteNhanVien');
Route::get('insertNhanVien','App\Http\Controllers\NhanVienController@nhapNhanVien');
Route::post('insertNhanVien','App\Http\Controllers\NhanVienController@insertNhanVien');
//PhongBan
Route::get('/PhongBan','App\Http\Controllers\PhongBanController@PhongBan');
Route::get('updatePhongBan/{id}','App\Http\Controllers\PhongBanController@editPhongBan');
Route::post('updatePhongBan/{id}','App\Http\Controllers\PhongBanController@updatePhongBan');
Route::get('deletePhongBan/{id}','App\Http\Controllers\PhongBanController@deletePhongBan');
Route::get('insertPhongBan','App\Http\Controllers\PhongBanController@nhapPhongBan');
Route::post('insertPhongBan','App\Http\Controllers\PhongBanController@insertPhongBan');
//PhongBanNV
Route::get('/PhongBanNV','App\Http\Controllers\PhongBanNVController@PhongBanNV');
Route::get('/getPhongBanNV','App\Http\Controllers\PhongBanNVController@getPhongBanNV')->name('admin.PhongBanNV.getPhongBanNV');
Route::get('updatePhongBanNV/{pid}','App\Http\Controllers\PhongBanNVController@editPhongBanNV');
Route::post('updatePhongBanNV/{pid}','App\Http\Controllers\PhongBanNVController@updatePhongBanNV');
Route::get('deletePhongBanNV/{pid}','App\Http\Controllers\PhongBanNVController@deletePhongBanNV');
Route::get('insertPhongBanNV','App\Http\Controllers\PhongBanNVController@nhapPhongBanNV');
Route::post('insertPhongBanNV','App\Http\Controllers\PhongBanNVController@insertPhongBanNV');
//PhuCap
Route::get('/PhuCap','App\Http\Controllers\PhuCapController@PhuCap');
Route::get('/getPhuCap','App\Http\Controllers\PhuCapController@getPhuCap')->name('admin.PhuCap.getPhuCap');
Route::get('updatePhuCap/{pcid}','App\Http\Controllers\PhuCapController@editPhuCap');
Route::post('updatePhuCap/{pcid}','App\Http\Controllers\PhuCapController@updatePhuCap');
Route::get('deletePhuCap/{pcid}','App\Http\Controllers\PhuCapController@deletePhuCap');
Route::get('insertPhuCap','App\Http\Controllers\PhuCapController@nhapPhuCap');
Route::post('insertPhuCap','App\Http\Controllers\PhuCapController@insertPhuCap');