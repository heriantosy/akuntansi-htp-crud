<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelYosi extends Model
{
    use HasFactory;
    protected $table ="table_transaksi_yosi";
    protected $primaryKey ="id_transaksi";

    public function tampil_transaksi(){
        $query = \DB::table('table_transaksi_yosi')->get();
        return $query;
    }
}
