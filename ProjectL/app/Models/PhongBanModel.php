<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhongBanModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table  = "phongban";
}
