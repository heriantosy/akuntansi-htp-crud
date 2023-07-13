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
        Schema::create('table_jurnal_masuk_yosi', function (Blueprint $table) {
            $table->integer('nomor_jurnal_yosi');
            $table->string('nama_jurnal_yosi', '15');
            $table->string('tgl_selesai_yosi', '20');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_jurnal_masuk_yosi');
    }
};
