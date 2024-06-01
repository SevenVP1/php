<?php

namespace App\Http\Controllers;

use App\Models\ChucVuModel;
use Illuminate\Http\Request;

class ChucVuController extends Controller
{
    function ChucVu(){
        $chucvus = ChucVuModel::all();
        return view('admin.ChucVu.ChucVu',['chucvus'=>$chucvus]);
    }
    function editChucVu($id){
        $chucvu = ChucVuModel::where('id',$id)->first();
        return view('admin.ChucVu.updateChucVu',['chucvu'=>$chucvu]);  
    }
    function updateChucVu(Request $request, $id){
        $chucvu = ChucVuModel::where('id',$id)->first();
        $chucvu->chucvu = $request->chucvu;
        $chucvu->luongchucvu = $request->luongchucvu;
        $chucvu->save();
        return redirect('updateChucVu/'.$id)->with("Note","Sửa thành công");
    }
    function deleteChucVu($id){
        $chucvu = ChucVuModel::where('id',$id)->first();
        $chucvu->delete();
        return redirect('ChucVu')->with("Note","Xóa thành công");
    }
    function nhapChucVu(){
        return view('admin.ChucVu.insertChucVu');
    }
    function insertChucVu(Request $request){
        $chucvu = new ChucVuModel;
        $chucvu->id = $request->id;
        $chucvu->chucvu = $request->chucvu;
        $chucvu->luongchucvu = $request->luongchucvu;
        $chucvu->save();
        return redirect('insertChucVu')->with("Note","Thêm thành công");
    }
}
