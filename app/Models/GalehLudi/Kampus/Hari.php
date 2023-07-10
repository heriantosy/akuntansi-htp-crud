<?php

namespace App\Models\GalehLudi\Kampus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hari extends Model
{
    use HasFactory;

    protected $table = 'galeh_kampus_hari';
    protected $primaryKey = 'hari_id';
    protected $keyType = 'string';
}
