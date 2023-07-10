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
        Schema::create('abari_hjurnal', function (Blueprint $table) {
            $table->id('NomorJurnal');
            $table->string('JurnalKode', 15);
            $table->string('TanggalSelesai', 20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abari_hjurnal');
    }
};
