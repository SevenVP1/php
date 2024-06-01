<?php

namespace App\Http\Controllers;

use App\Models\NhanVienModel;
use Illuminate\Http\Request;

class NhanVienController extends Controller
{
    function NhanVien(){
        $nhanviens = NhanVienModel::with('belongsToPhongBanNV')->paginate(15);
        return view('admin.NhanVien.NhanVien',['nhanviens'=>$nhanviens]);
    }
    function getNhanVien(Request $request)
    {
        $ten = $request->input('ten');
        $nhanviens = NhanVienModel::with('belongsToPhongBanNV')->where('ten',$ten)->get();
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
        $nhanvien->sodienthoai = $request->sodienthoai;
        $nhanvien->email = $request->email;
        $nhanvien->save();
        return redirect('updateNhanVien/'.$nid)->with("Note","Sửa thành công");
    }
    function deleteNhanVien($nid){
        $nhanvien = NhanVienModel::where('nid',$nid)->first();
        $nhanvien->delete();
        return redirect('NhanVien')->with("Note","Xóa thành công");
    }
    function nhapNhanVien(){
        return view('admin.NhanVien.insertNhanVien');
    }
    function insertNhanVien(Request $request){
        $nhanvien = new NhanVienModel;  
        $nhanvien->id = $request->id;
        $nhanvien->nid = $request->nid;
        $nhanvien->ten = $request->ten;
        $nhanvien->tuoi = $request->tuoi;
        $nhanvien->gioitinh= $request->gioitinh;
        $nhanvien->diachi = $request->diachi;
        $nhanvien->sodienthoai = $request->sodienthoai;
        $nhanvien->email = $request->email;
        $nhanvien->save();
        return redirect('insertNhanVien')->with("Note","Thêm thành công");
    }
}
