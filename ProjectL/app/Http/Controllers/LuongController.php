<?php

namespace App\Http\Controllers;

use App\Models\LuongModel;
use Illuminate\Http\Request;

class LuongController extends Controller
{
    function Luong(){
        $luongs = LuongModel::all();
        return view('admin.Luong.Luong',['luongs'=>$luongs]);
    }
    function editLuong($id){
        $luong = LuongModel::where('id',$id)->first();
        return view('admin.Luong.updateLuong',['luong'=>$luong]);  
    }
    function updateLuong(Request $request, $id){
        $luong = LuongModel::where('id',$id)->first();
        $luong->luongcoban = $request->luongcoban;
        $luong->luongngaycong = $request->luongngaycong;
        $luong->save();
        return redirect('updateLuong/'.$id)->with("Note","Sửa thành công");
    }
    function deleteLuong($id){
        $luong = LuongModel::where('id',$id)->first();
        $luong->delete();
        return redirect('Luong')->with("Note","Xóa thành công");
    }
    function nhapLuong(){
        return view('admin.Luong.insertLuong');
    }
    function insertLuong(Request $request){
        $luong = new LuongModel;
        $luong->id = $request->id;
        $luong->luongcoban = $request->luongcoban;
        $luong->luongngaycong = $request->luongngaycong;
        $luong->save();
        return redirect('insertLuong')->with("Note","Thêm thành công");
    }
}
