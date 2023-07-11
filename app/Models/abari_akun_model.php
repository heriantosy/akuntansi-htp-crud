<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class abari_akun_model extends Model
{
    use HasFactory;
    protected $table ="abari_perkiraan";
    protected $primaryKey ="PerkiraanID";

    public function tampil_data(){
        $query = \DB::table('abari_perkiraan')->get();
        return $query;
    }
}
