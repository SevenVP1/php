<?php

namespace App\Http\Controllers;

use App\Models\PhongBanNVModel;
use Illuminate\Http\Request;

class PhongBanNVController extends Controller
{
    function PhongBanNV(){
        $phongbannvs = PhongBanNVModel::with('hasManyNhanVien')->paginate(15);
        return view('admin.PhongBanNV.PhongBanNV',['phongbannvs'=>$phongbannvs]);
    }
    function getPhongBanNV(Request $request)
    {
        $tenphong = $request->input('tenphong');
        $phongbans = PhongBanNVModel::with('hasManyNhanVien')->where('tenphong',$tenphong)->get();
        return view('admin.PhongBanNV.getPhongBanNV',['phongbans'=>$phongbans]);
    }
    function editPhongBanNV($pid){
        $phongbannv = PhongBanNVModel::where('pid',$pid)->first();
        return view('admin.PhongBanNV.updatePhongBanNV',['phongbannv'=>$phongbannv]);

        
    }
    function updatePhongBanNV(Request $request, $pid){
        $phongbannv = PhongBanNVModel::where('pid',$pid)->first();
        $phongbannv->id = $request->id;
        $phongbannv->tenphong = $request->tenphong;
        $phongbannv->email = $request->email;
        $phongbannv->save();
        return redirect('updatePhongBanNV/'.$pid)->with("Note","Sửa thành công");
    }
    function deletePhongBanNV($pid){
        $phongbannv = PhongBanNVModel::where('pid',$pid)->first();
        $phongbannv->delete();
        return redirect('PhongBanNV')->with("Note","Xóa thành công");
    }
    function nhapPhongBanNV(){
        return view('admin.PhongBanNV.insertPhongBanNV');
    }
    function insertPhongBanNV(Request $request){
        $phongbannv = new PhongBanNVModel;
        $phongbannv->id = $request->id;
        $phongbannv->pid = $request->pid;
        $phongbannv->tenphong = $request->tenphong;
        $phongbannv->email = $request->email;
        $phongbannv->save();
        return redirect('insertPhongBanNV')->with("Note","Thêm thành công");
    }
}
