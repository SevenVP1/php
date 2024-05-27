<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVienModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table  = "tblNV";

    public function belongtoChamCong(){
        return $this->belongsTo(ChamCongModel::class,'nid','cid');
    }
    public function insertNhanVien($id,$ten,$tuoi,$gioitinh,$diachi,$dienthoai){
        $result = false;
        $sql = "insert into tblNV(nid,ten,tuoi,gioitinh,diachi,dienthoai) values('$id','$ten','$tuoi','$gioitinh','$diachi','$dienthoai')";
        if(mysqli_query($this->con,$sql)){
            $result = true;
        }
        return json_decode($result);
    }

}
