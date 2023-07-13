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
        Schema::create('table_master_yosi', function (Blueprint $table) {
            $table->integer('id_perkiraan');
            $table->string('nomor_perkiraan', '6');
            $table->string('nama_perkiraan', '30');
            $table->string('tipe', '7');
            $table->string('induk', '5');
            $table->integer('level', '6');
            $table->string('kelompok', '10');
            $table->string('normal', '10');
            $table->double('awal_debet', '20');
            $table->double('awal_kredit', '20');
            $table->double('mut_debet', '20');
            $table->double('mut_kredit', '20');
            $table->double('sisa_debet', '20');
            $table->double('sisa_kredit', '20');
            $table->double('rl_debet', '20');
            $table->double('rl_kredit', '20');
            $table->double('nrc_debet', '20');
            $table->double('nrc_kredit', '20');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_master_yosi');
    }
};
