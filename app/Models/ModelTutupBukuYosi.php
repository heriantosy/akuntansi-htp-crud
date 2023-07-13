<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelTutupBukuYosi extends Model
{
    use HasFactory;
    protected $table ="table_history_tutupbuku_yosi";
    protected $primaryKey ="id_tutupbuku_yosi";

    public function tampil_history_tutupbuku_yosi(){
        $query = \DB::table('table_history_tutupbuku_yosi')->get();
        return $query;
    }
}
