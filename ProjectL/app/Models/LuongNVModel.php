<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LuongNVModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table  = "luongnv";
    protected $primaryKey ='lid';
    public $incrementing = false;
    protected $keyType = 'string';
    public function belongsToNhanVien(){
        return $this->belongsTo(NhanVienModel::class,'nid','nid');
    }
}
