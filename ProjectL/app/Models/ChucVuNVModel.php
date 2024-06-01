<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChucVuNVModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table  = "luongcvnv";
    protected $primaryKey ='cvid';
    public $incrementing = false;
    protected $keyType = 'string';
    public function hasManyNhanVien(){
        return $this->hasMany(NhanVienModel::class,'cvid','cvid');
    }
}
