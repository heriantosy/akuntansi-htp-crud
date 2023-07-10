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
        Schema::create('abari_tabel_induk_user', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('username', 100);
            $table->string('password', 100);
            $table->string('nama_lengkap', 100);
            $table->enum('asal_kantor', ['BKCU', 'CU']);
            $table->string('kode_cu', 6);
            $table->string('email', 50);
            $table->enum('leveluser', ['Admin', 'Supervisor', 'User']);
            $table->enum('divisi', ['kasir', 'credit', 'operasional', 'akuntansi']);
            $table->enum('publish', ['Yes', 'No']);
            $table->date('tgldaftar');
            $table->date('tgllogin');
            $table->enum('statuslogin', ['Online', 'Offline']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abari_tabel_induk_user');
    }
};
