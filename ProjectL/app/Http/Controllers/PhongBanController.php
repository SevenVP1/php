<?php

namespace App\Http\Controllers;

use App\Models\PhongBanModel;
use Illuminate\Http\Request;

class PhongBanController extends Controller
{
    function PhongBan(){
        $phongbans = PhongBanModel::all();
        return view('admin.PhongBan.PhongBan',['phongbans'=>$phongbans]);
    }
    function editPhongBan($id){
        $phongban = PhongBanModel::where('id',$id)->first();
        return view('admin.PhongBan.updatePhongBan',['phongban'=>$phongban]);  
    }
    function updatePhongBan(Request $request, $id){
        $phongban = PhongBanModel::where('id',$id)->first();
        $phongban->tenphong = $request->tenphong;
        $phongban->email = $request->email;
        $phongban->save();
        return redirect('updatePhongBan/'.$id)->with("Note","Sửa thành công");
    }
    function deletePhongBan($id){
        $phongban = PhongBanModel::where('id',$id)->first();
        $phongban->delete();
        return redirect('PhongBan')->with("Note","Xóa thành công");
    }
    function nhapPhongBan(){
        return view('admin.PhongBan.insertPhongBan');
    }
    function insertPhongBan(Request $request){
        $phongban = new PhongBanModel;
        $phongban->id = $request->id;
        $phongban->tenphong= $request->tenphong;
        $phongban->email = $request->email;
        $phongban->save();
        return redirect('insertPhongBan')->with("Note","Thêm thành công");
    }
}
