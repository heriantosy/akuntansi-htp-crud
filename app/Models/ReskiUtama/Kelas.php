<?php

namespace App\Models\ReskiUtama;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 't_kelas_reski';
    protected $primaryKey = 'kelas_id';
    protected $keyType = 'string';
}
