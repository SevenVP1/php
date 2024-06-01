<?php

namespace App\Http\Controllers;

use App\Models\LuongNVModel;
use Illuminate\Http\Request;

class LuongNVController extends Controller
{
    function LuongNV(){
        $luongnvs = LuongNVModel::with('belongsToNhanVien')->paginate(15);
        return view('admin.LuongNV.LuongNV',['luongnvs'=>$luongnvs]);
    }
    function getLuongNV(Request $request)
    {
        $lid = $request->input('lid');
        $luongnvs = LuongNVModel::with('belongsToNhanVien')->where('lid',$lid)->get();
        return view('admin.LuongNV.getLuongNV',['luongnvs'=>$luongnvs]);
    }
    function editLuongNV($lid){
        $luongnv = LuongNVModel::where('lid',$lid)->first();
        return view('admin.LuongNV.updateLuongNV',['luongnv'=>$luongnv]);

        
    }
    function updateLuongNV(Request $request, $lid){
        $luongnv = LuongNVModel::where('lid',$lid)->first();
        $luongnv->id = $request->id;
        $luongnv->luongcoban = $request->luongcoban;
        $luongnv->luongngaycong = $request->luongngaycong;
        $luongnv->save();
        return redirect('updateLuongNV/'.$lid)->with("Note","Sửa thành công");
    }
    function deleteLuongNV($lid){
        $luongnv = LuongNVModel::where('lid',$lid)->first();
        $luongnv->delete();
        return redirect('LuongNV')->with("Note","Xóa thành công");
    }
    function nhapLuongNV(){
        return view('admin.LuongNV.insertLuongNV');
    }
    function insertLuongNV(Request $request){
        $luongnv = new LuongNVModel;  
        $luongnv->id = $request->id;
        $luongnv->lid = $request->lid;
        $luongnv->luongcoban = $request->luongcoban;
        $luongnv->luongngaycong = $request->luongngaycong;
        $luongnv->save();
        return redirect('insertLuongNV')->with("Note","Thêm thành công");
    }
}
