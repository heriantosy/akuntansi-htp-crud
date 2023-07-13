<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBackupYosi extends Model
{
    use HasFactory;
    protected $table ="table_history_backup_yosi";
    protected $primaryKey ="id_backup_yosi";

    public function tampil_history_backup_yosi(){
        $query = \DB::table('table_history_backup_yosi')->get();
        return $query;
    }
}
