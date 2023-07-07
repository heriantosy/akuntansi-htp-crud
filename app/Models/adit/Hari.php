<?php

namespace App\Models\adit;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hari extends Model
{
    use HasFactory;

    protected $table = 't_hari_adit';
    protected $primaryKey = 'hari_id';
    protected $keyType = 'string';
}
