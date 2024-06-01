<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChucVuModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table  = "chucvu";
}
