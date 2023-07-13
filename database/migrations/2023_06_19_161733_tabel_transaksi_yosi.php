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
        Schema::create('table_transaksi_yosi', function (Blueprint $table) {
            $table->integer('id_transaksi');
            $table->string('kode_jurnal', '15');
            $table->string('nomor_perkiraan', '10');
            $table->string('tanggal_transaksi', '12');
            $table->string('bulan_transaksi', '20');
            $table->string('jenis_transaksi', '15');
            $table->string('keterangan_transaksi', '20');
            $table->double('debet', '20');
            $table->double('kredit', '20');
            $table->string('tanggal_posting', '12');
            $table->string('keterangan_posting', '10');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_transaksi_yosi');
    }
};
