<?php

namespace App\Http\Controllers;

use App\Models\HSLuongModel;
use Illuminate\Http\Request;

class HSLuongController extends Controller
{
    function HSLuong(){
        $hsluongs = HSLuongModel::all();
        return view('admin.HSLuong.HSLuong',['hsluongs'=>$hsluongs]);
    }
    function editHSLuong($id){
        $hsluong = HSLuongModel::where('id',$id)->first();
        return view('admin.HSLuong.updateHSLuong',['hsluong'=>$hsluong]);  
    }
    function updateHSLuong(Request $request, $id){
        $hsluong = HSLuongModel::where('id',$id)->first();
        $hsluong->bacluong = $request->bacluong;
        $hsluong->hesoluong = $request->hsluong;
        $hsluong->save();
        return redirect('updateHSLuong/'.$id)->with("Note","Sửa thành công");
    }
    function deleteHSLuong($id){
        $hsluong = HSLuongModel::where('id',$id)->first();
        $hsluong->delete();
        return redirect('HSLuong')->with("Note","Xóa thành công");
    }
    function nhapHSLuong(){
        return view('admin.HSLuong.insertHSLuong');
    }
    function insertHSLuong(Request $request){
        $hsluong = new HSLuongModel;
        $hsluong->id = $request->id;
        $hsluong->bacluong = $request->bacluong;
        $hsluong->hesoluong = $request->hsluong;
        $hsluong->save();
        return redirect('insertHSLuong')->with("Note","Thêm thành công");
    }
}
