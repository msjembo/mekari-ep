<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nitgen extends Model
{
    use HasFactory;
    protected $table = 'NGAC_AUTHLOG';
    protected $connection = 'sqlsrv';
}
