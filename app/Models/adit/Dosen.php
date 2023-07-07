<?php

namespace App\Models\adit;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 't_dosen_adit';
    protected $primaryKey = 'dosen_id';
    protected $keyType = 'string';
}
