<?php

namespace App\Models\adit;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 't_kelas_adit';
    protected $primaryKey = 'kelas_id';
    protected $keyType = 'string';
}
