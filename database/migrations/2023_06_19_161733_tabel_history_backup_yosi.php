<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('table_history_backup_yosi', function (Blueprint $table) {
            $table->integer('id_backup_yosi');
            $table->string('nama_file_yosi', '50');
            $table->string('tgl_backup_yosi', '20');
            $table->string('id_user_yosi', '20');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_history_backup_yosi');
    }
};
