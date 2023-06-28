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
        Schema::create('abari_tabel_akuntansi_history_tutup_buku', function (Blueprint $table) {
            $table->integer('id_backup', 10);
            $table->string('nama_file', 50);
            $table->string('tanggal_backup', 20);
            $table->string('id_user', 20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abari_tabel_akuntansi_history_tutup_buku');
    }
};
