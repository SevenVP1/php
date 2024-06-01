<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVienModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table  = "nhanvien";
    protected $primaryKey ='nid';
    public $incrementing = false;
    protected $keyType = 'string';

    public function hasManyChamCong(){
        return $this->hasMany(ChamCongModel::class,'nid','nid');
    }
    public function belongsToHSluongNV(){
        return $this->belongsTo(HSluongNVModel::class,'hsid','hsid');
    }
    public function belongsToPhongBanNV(){
        return $this->belongsTo(PhongBanNVModel::class,'pid','pid');
    }
    public function hasManyPhuCap(){
        return $this->hasMany(PhuCapModel::class,'nid','nid');
    }
    public function hasManyLuongNV(){
        return $this->hasMany(LuongNVModel::class,'nid','nid');
    }
    public function belongsToChucVuNV(){
        return $this->belongsTo(ChucVuNVModel::class,'cvid','cvid');
    }
}
