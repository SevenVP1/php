<?php

namespace App\Http\Controllers;

use App\Models\DanhSachLuongModel;
use Illuminate\Http\Request;

class DanhSachLuongController extends Controller
{
    function getDanhSachLuong(){
        $danhsachs = DanhSachLuongModel::paginate(10);
        return view('admin.DanhSachLuong.getDanhSach',['danhsachs'=>$danhsachs]);
    }
}
