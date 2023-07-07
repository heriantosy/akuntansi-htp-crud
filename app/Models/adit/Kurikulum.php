<?php

namespace App\Models\adit;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
    use HasFactory;

    protected $table = 't_kurikulum_adit';
    protected $primaryKey = 'kurikulum_id';
    protected $keyType = 'string';
}
