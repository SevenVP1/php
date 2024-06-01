<?php

namespace App\Http\Controllers;

use App\Models\ChamCongModel;
use Illuminate\Http\Request;

class ChamCongController extends Controller
{
    function ChamCong(){
        $chamcongs = ChamCongModel::with('belongsToNhanVien')->paginate(15);
        return view('admin.ChamCong.ChamCong',['chamcongs'=>$chamcongs]);
    }
    function getChamCong(Request $request)
    {
        $cid = $request->input('cid');
        $chamcongs = ChamCongModel::with('belongsToNhanVien')->where('cid',$cid)->get();
        return view('admin.ChamCong.getChamCong',['chamcongs'=>$chamcongs]);
    }
    function editChamCong($cid){
        $chamcong = ChamCongModel::where('cid',$cid)->first();
        return view('admin.ChamCong.updateChamCong',['chamcong'=>$chamcong]);

        
    }
    function updateChamCong(Request $request, $cid){
        $chamcong = ChamCongModel::where('cid',$cid)->first();
        $chamcong->id = $request->id;
        $chamcong->ngaylam = $request->ngaylam;
        $chamcong->save();
        return redirect('updateChamCong/'.$cid)->with("Note","Sửa thành công");
    }
    function deleteChamCong($cid){
        $chamcong = ChamCongModel::where('cid',$cid)->first();
        $chamcong->delete();
        return redirect('ChamCong')->with("Note","Xóa thành công");
    }
    function nhapChamCong(){
        return view('admin.ChamCong.insertChamCong');
    }
    function insertChamCong(Request $request){
        $chamcong = new ChamCongModel;
        $chamcong->id = $request->id;
        $chamcong->cid = $request->cid;
        $chamcong->ngaylam = $request->ngaylam;
        $chamcong->save();
        return redirect('insertChamCong')->with("Note","Thêm thành công");
    }
}
