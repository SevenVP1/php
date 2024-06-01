<?php

namespace App\Http\Controllers;

use App\Models\HSluongNVModel;
use Illuminate\Http\Request;

class HSluongNVController extends Controller
{
    function HSLuongNV(){
        $hsluongnvs = HSluongNVModel::with('hasManyNhanVien')->paginate(15);
        return view('admin.HSLuongNV.HSLuongNV',['hsluongnvs'=>$hsluongnvs]);
    }
    function getHSLuongNV(Request $request)
    {
        $bacluong = $request->input('bacluong');
        $hsluongnvs = HSluongNVModel::with('hasManyNhanVien')->where('bacluong',$bacluong)->get();
        return view('admin.HSLuongNV.getHSLuongNV',['hsluongnvs'=>$hsluongnvs]);
    }
    function editHSLuongNV($hsid){
        $hsluongnv = HSluongNVModel::where('hsid',$hsid)->first();
        return view('admin.HSLuongNV.updateHSLuongNV',['hsluongnv'=>$hsluongnv]);

        
    }
    function updateHSLuongNV(Request $request, $hsid){
        $hsluongnv = HSluongNVModel::where('hsid',$hsid)->first();
        $hsluongnv->id = $request->id;
        $hsluongnv->bacluong = $request->bacluong;
        $hsluongnv->hesoluong= $request->hesoluong;
        $hsluongnv->save();
        return redirect('updateHSLuongNV/'.$hsid)->with("Note","Sửa thành công");
    }
    function deleteHSLuongNV($hsid){
        $hsluongnv = HSluongNVModel::where('hsid',$hsid)->first();
        $hsluongnv->delete();
        return redirect('HSLuongNV')->with("Note","Xóa thành công");
    }
    function nhapHSLuongNV(){
        return view('admin.HSLuongNV.insertHSLuongNV');
    }
    function insertHSLuongNV(Request $request){
        $hsluongnv = new HSluongNVModel;  
        $hsluongnv->id = $request->id;
        $hsluongnv->hsid = $request->hsid;
        $hsluongnv->bacluong = $request->bacluong;
        $hsluongnv->hesoluong= $request->hesoluong;
        $hsluongnv->save();
        return redirect('insertHSLuongNV')->with("Note","Thêm thành công");
    }
}
