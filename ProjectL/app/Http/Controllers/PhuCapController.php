<?php

namespace App\Http\Controllers;

use App\Models\PhuCapModel;
use Illuminate\Http\Request;

class PhuCapController extends Controller
{
    function PhuCap(){
        $phucaps = PhuCapModel::with('belongsToNhanVien')->paginate(15);
        return view('admin.PhuCap.PhuCap',['phucaps'=>$phucaps]);
    }
    function getPhuCap(Request $request)
    {
        $pcid = $request->input('pcid');
        $phucaps = PhuCapModel::with('belongsToNhanVien')->where('pcid',$pcid)->get();
        return view('admin.PhuCap.getPhuCap',['phucaps'=>$phucaps]);
    }
    function editPhuCap($pcid){
        $phucap = PhuCapModel::where('pcid',$pcid)->first();
        return view('admin.PhuCap.updatePhuCap',['phucap'=>$phucap]);

        
    }
    function updatePhuCap(Request $request, $pcid){
        $phucap = PhuCapModel::where('pcid',$pcid)->first();
        $phucap->id = $request->id;
        $phucap->sotien = $request->sotien;
        $phucap->ngayapdung = $request->ngayapdung;
        $phucap->save();
        return redirect('updatePhuCap/'.$pcid)->with("Note","Sửa thành công");
    }
    function deletePhuCap($pcid){
        $phucap = PhuCapModel::where('pcid',$pcid)->first();
        $phucap->delete();
        return redirect('PhuCap')->with("Note","Xóa thành công");
    }
    function nhapPhuCap(){
        return view('admin.PhuCap.insertPhuCap');
    }
    function insertPhuCap(Request $request){
        $phucap = new PhuCapModel;
        $phucap->id = $request->id;
        $phucap->pcid = $request->pcid;
        $phucap->sotien = $request->sotien;
        $phucap->ngayapdung = $request->ngayapdung;
        $phucap->save();
        return redirect('insertPhuCap')->with("Note","Thêm thành công");
    }
}
