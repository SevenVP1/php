<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhongBanNVModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table  = "phongbannv";
    protected $primaryKey ='pid';
    public $incrementing = false;
    protected $keyType = 'string';
    public function hasManyNhanVien(){
        return $this->hasMany(NhanVienModel::class,'pid','pid');
    }
}
