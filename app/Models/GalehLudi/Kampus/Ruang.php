<?php

namespace App\Models\GalehLudi\Kampus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    use HasFactory;

    protected $table = 'galeh_kampus_ruang';
    protected $primaryKey = 'ruang_id';
    protected $keyType = 'string';
}
