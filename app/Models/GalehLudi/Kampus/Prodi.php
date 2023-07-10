<?php

namespace App\Models\GalehLudi\Kampus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    protected $table = 'galeh_kampus_prodi';
    protected $primaryKey = 'prodi_id';
    protected $keyType = 'string';
}
