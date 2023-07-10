<?php

namespace App\Models\GalehLudi\Kampus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tahun extends Model
{
    use HasFactory;

    protected $table = 'galeh_kampus_tahun';
    protected $primaryKey = 'tahun_id';
    protected $keyType = 'string';
}
