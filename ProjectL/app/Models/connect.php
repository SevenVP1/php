<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class connect extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $connection;

    public function __construct()
    {
        $this->connection = new \mysqli('localhost', 'root', '', 'projectluong');

    }

    public function connect($table)
    {
        $query = "SELECT * FROM $table";
        return $this->connection->query($query);
    }
}
