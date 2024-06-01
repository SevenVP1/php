<?php

namespace App\Http\Controllers;

use App\Models\ChamCongModel;
use App\Models\NhanVienModel;
use Illuminate\Http\Request;

class NhanVienController extends Controller
{
    public $NhanVienModel;
    function NhanVien(){
        $nhanviens = NhanVienModel::with('belongtoChamCong')->paginate(10);
        return view('admin.NhanVien.NhanVien',['nhanviens'=>$nhanviens]);
    }
    function getNhanVien(Request $request)
    {
        $ten = $request->input('ten');
        $nhanviens = NhanVienModel::where('ten',$ten)->get();
        return view('admin.NhanVien.getNhanVien',['nhanviens'=>$nhanviens]);
    }
    function editNhanVien($nid){
        $nhanvien = NhanVienModel::where('nid',$nid)->first();
        return view('admin.NhanVien.updateNhanVien',['nhanvien'=>$nhanvien]);

        
    }
    function updateNhanVien(Request $request, $nid){
        $nhanvien = NhanVienModel::where('nid',$nid)->first();
        $nhanvien->id = $request->id;
        $nhanvien->ten = $request->ten;
        $nhanvien->tuoi = $request->tuoi;
        $nhanvien->gioitinh= $request->gioitinh;
        $nhanvien->diachi = $request->diachi;
        $nhanvien->dienthoai = $request->dienthoai;
        $nhanvien->namlv = $request->namlv;
        $nhanvien->save();
        return redirect('updateNhanVien/'.$nid)->with("Note","Sửa thành công");
    }
    function deleteNhanVien($nid){
        $nhanvien = NhanVienModel::where('nid',$nid)->first();
        $nhanvien->delete();
        return redirect('NhanVien')->with("Note","Xóa thành công");
    }
}
