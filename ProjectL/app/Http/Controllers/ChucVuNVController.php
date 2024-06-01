<?php

namespace App\Http\Controllers;

use App\Models\ChucVuNVModel;
use Illuminate\Http\Request;

class ChucVuNVController extends Controller
{
    function ChucVuNV(){
        $chucvunvs = ChucVuNVModel::with('hasManyNhanVien')->paginate(15);
        return view('admin.ChucVuNV.ChucVuNV',['chucvunvs'=>$chucvunvs]);
    }
    function getChucVuNV(Request $request)
    {
        $chucvu = $request->input('chucvu');
        $chucvunvs = ChucVuNVModel::with('hasManyNhanVien')->where('chucvu',$chucvu)->get();
        return view('admin.ChucVuNV.getChucVuNV',['chucvunvs'=>$chucvunvs]);
    }
    function editChucVuNV($cvid){
        $chucvunv = ChucVuNVModel::where('cvid',$cvid)->first();
        return view('admin.ChucVuNV.updateChucVuNV',['chucvunv'=>$chucvunv]);

        
    }
    function updateChucVuNV(Request $request, $cvid){
        $chucvunv = ChucVuNVModel::where('cvid',$cvid)->first();
        $chucvunv->id = $request->id;
        $chucvunv->chucvu= $request->chucvu;
        $chucvunv->luongchucvu= $request->luongchucvu;
        $chucvunv->save();
        return redirect('updateChucVuNV/'.$cvid)->with("Note","Sửa thành công");
    }
    function deleteChucVuNV($cvid){
        $chucvunv = ChucVuNVModel::where('cvid',$cvid)->first();
        $chucvunv->delete();
        return redirect('ChucVuNV')->with("Note","Xóa thành công");
    }
    function nhapChucVuNV(){
        return view('admin.ChucVuNV.insertChucVuNV');
    }
    function insertChucVuNV(Request $request){
        $chucvunv = new ChucVuNVModel;
        $chucvunv->id = $request->id;
        $chucvunv->cvid = $request->cvid;
        $chucvunv->chucvu= $request->chucvu;
        $chucvunv->luongchucvu= $request->luongchucvu;
        $chucvunv->save();
        return redirect('insertChucVuNV')->with("Note","Thêm thành công");
    }
}
