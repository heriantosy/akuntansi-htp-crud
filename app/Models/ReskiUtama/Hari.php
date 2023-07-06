<?php

namespace App\Models\ReskiUtama;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hari extends Model
{
    use HasFactory;

    protected $table = 't_hari_reski';
    protected $primaryKey = 'hari_id';
    protected $keyType = 'string';
}
