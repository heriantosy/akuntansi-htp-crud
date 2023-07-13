<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelJurnalUmumYosi extends Model
{
    use HasFactory;
    protected $table ="table_jurnal_umum_yosi";
    protected $primaryKey ="nomor_jurnal_yosi";

    public function tampil_jurnal_umum_yosi(){
        $query = \DB::table('table_jurnal_umum_yosi')->get();
        return $query;
    }
}
