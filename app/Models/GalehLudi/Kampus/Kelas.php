<?php

namespace App\Models\GalehLudi\Kampus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'galeh_kampus_kelas';
    protected $primaryKey = 'kelas_id';
    protected $keyType = 'string';
}
