<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelIndukUserYosi extends Model
{
    use HasFactory;
    protected $table ="table_induk_user_yosi";
    protected $primaryKey ="id_user";

    public function tampil_induk_user_yosi(){
        $query = \DB::table('table_induk_user_yosi')->get();
        return $query;
    }
}
