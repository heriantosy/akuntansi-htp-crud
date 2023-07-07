<?php

namespace App\Models\ReskiUtama;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    protected $table = 't_prodi_reski';
    protected $primaryKey = 'prodi_id';
    protected $keyType = 'string';
}
