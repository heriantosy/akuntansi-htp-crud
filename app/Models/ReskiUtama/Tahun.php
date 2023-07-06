<?php

namespace App\Models\ReskiUtama;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tahun extends Model
{
    use HasFactory;

    protected $table = 't_tahun_reski';
    protected $primaryKey = 'tahun_id';
    protected $keyType = 'string';
}
