<?php

namespace App\Http\Controllers;

use App\Models\NhanVienModel;
use Illuminate\Http\Request;

class NhanVienController extends Controller
{
    public $NhanVienModel;
    function getNhanVien(){
        $nhanviens = NhanVienModel::paginate(10);
        return view('admin.NhanVien.getNhanVien',['nhanviens'=>$nhanviens]);
    }
    function impinsertNhanVien(){
        return view('admin.NhanVien.insertNhanVien');
    }
    public function insertNhanVien(){
        if(isset($_POST["btnInsert"])){
            $id = $_POST["id"];
            $ten = $_POST["ten"];
            $tuoi = $_POST["tuoi"];
            $gioitinh = $_POST["gioitinh"];
            $diachi = $_POST["diachi"];
            $dienthoai =$_POST["dienthoai"];
            
            $result = $this->NhanVienModel->insertNhanVien($id,$ten,$tuoi,$gioitinh,$diachi,$dienthoai);
            $this->view('admin.NhanVien.insertNhanVien',["result"=>$result]);
        }
    }
}
