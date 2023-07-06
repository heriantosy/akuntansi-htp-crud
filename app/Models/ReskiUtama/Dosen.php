<?php

namespace App\Models\ReskiUtama;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 't_dosen_reski';
    protected $primaryKey = 'dosen_id';
    protected $keyType = 'string';
}
