<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HSluongNVModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table  = "hsluongnv";
    protected $primaryKey ='hsid';
    public $incrementing = false;
    protected $keyType = 'string';
    public function hasManyNhanVien(){
        return $this->hasMany(NhanVienModel::class,'hsid','hsid');
    }
}
