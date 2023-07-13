<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelMasterYosi extends Model
{
    use HasFactory;
    protected $table ="table_master_yosi";
    protected $primaryKey ="id_perkiraan";

    public function tampil_master_yosi(){
        $query = \DB::table('table_master_yosi')->get();
        return $query;
    }
}
