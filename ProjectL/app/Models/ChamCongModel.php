<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChamCongModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table  = "chamcong";
    protected $primaryKey ='cid';
    public $incrementing = false;
    protected $keyType = 'string';
    public function belongsToNhanVien(){
        return $this->belongsTo(NhanVienModel::class,'nid','nid');
    }

}
