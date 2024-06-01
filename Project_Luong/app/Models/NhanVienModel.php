<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVienModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table  = "tblNV";
    protected $primaryKey ='nid';
    public $incrementing = false;
    protected $keyType = 'string';
    public function belongtoChamCong(){
        return $this->belongsTo(ChamCongModel::class,'nid','nid');
    }

}
