<?php

namespace App\Models\GalehLudi\Kampus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'galeh_kampus_dosen';
    protected $primaryKey = 'dosen_id';
    protected $keyType = 'string';
}
