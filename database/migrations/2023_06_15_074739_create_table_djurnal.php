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
        Schema::create('t_djurnal', function (Blueprint $table) {
            $table->id();
            $table->string('TransaksiID', '15');
            $table->string('JurnalKode', '45');
            $table->string('NomorPerkiraan', '45');
            $table->string('TanggalTransaksi', '45');
            $table->string('bulan_transaksi', '45');
            $table->string('jenis_transaksi', '45');
            $table->string('Keterangan', '45');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_djurnal');
    }
};
