<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChamCongModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table  = "tblCC";

    public function hasNhanVien(){
        return $this->hasMany(NhanVienModel::class,'cid','nid');
    }
}
