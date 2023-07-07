<?php

namespace App\Models\ReskiUtama;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    use HasFactory;

    protected $table = 't_ruang_reski';
    protected $primaryKey = 'ruang_id';
    protected $keyType = 'string';
}
