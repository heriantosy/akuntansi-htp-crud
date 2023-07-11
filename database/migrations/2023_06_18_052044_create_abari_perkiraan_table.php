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
        Schema::create('abari_perkiraan', function (Blueprint $table) {
            $table->integer('PerkiraanID');
            $table->string('NomorPerkiraan', 6);
            $table->string('NamaPerkiraan', 30);
            $table->string('tipe', 7);
            $table->string('induk', 5);
            $table->string('level', 5);
            $table->string('Kelompok', 10);
            //$table->string('normal', 10);
            //$table->bigInteger('awal_debet');
            //$table->bigInteger('awal_kredit');
            //$table->bigInteger('mut_debet');
           // $table->bigInteger('mut_kredit');
           // $table->bigInteger('sisa_debet');
           // $table->bigInteger('sisa_kredit');
           // $table->bigInteger('rl_debet');
           // $table->bigInteger('rl_kredit');
           // $table->bigInteger('nrc_debet');
           // $table->bigInteger('nrc_kredit');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abari_perkiraan');
    }
};
