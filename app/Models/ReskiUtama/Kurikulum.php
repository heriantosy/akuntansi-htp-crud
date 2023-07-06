<?php

namespace App\Models\ReskiUtama;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
    use HasFactory;

    protected $table = 't_kurikulum_reski';
    protected $primaryKey = 'kurikulum_id';
    protected $keyType = 'string';
}
