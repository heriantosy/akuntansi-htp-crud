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
        Schema::create('table_induk_user_yosi', function (Blueprint $table) {
            $table->integer('id_user');
            $table->string('username', '20');
            $table->string('password', '20');
            $table->string('nama_lengkap', '50');
            $table->enum('asal_kantor', ['BKCU', 'CU'])->default('BKCU');
            $table->string('kode_cu', '6');
            $table->string('email', '50');
            $table->enum('leveluser', ['Admin', 'Supervisor', 'User'])->default('Admin');
            $table->enum('divisi', ['Kasir', 'Credit', 'Operasional', 'Akuntansi'])->default('Kasir');
            $table->enum('publish', ['Yes', 'No'])->default('Yes');
            $table->date('tgldaftar');
            $table->date('tgllogin');
            $table->enum('statuslogin', ['Online', 'Offline'])->default('Online');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_induk_user_yosi');
    }
};
