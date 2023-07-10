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
        Schema::create('galeh_bengkel_barang', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 30);
            $table->unsignedInteger('harga_beli');
            $table->unsignedInteger('harga_jual');
            $table->string('satuan', 15);
            $table->timestamps();
        });

        Schema::create('galeh_bengkel_jasa', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 30);
            $table->unsignedInteger('tarif');
            $table->timestamps();
        });

        Schema::create('galeh_bengkel_mekanik', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 30);
            $table->string('alamat', 50);
            $table->string('hp', 15);
            $table->unsignedInteger('tarif');
            $table->timestamps();
        });

        Schema::create('galeh_bengkel_pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 30);
            $table->string('nopol', 15);
            $table->string('alamat', 15);
            $table->date('tanggal');
            $table->string('keluhan');
            $table->string('status', 25);
            $table->timestamps();
        });

        Schema::create('galeh_bengkel_service', function (Blueprint $table) {
            $table->string('faktur', 10)->primary();
            $table->date('tanggal');
            $table->unsignedInteger('jml_item');
            $table->unsignedInteger('biaya_jasa');
            $table->unsignedInteger('biaya_barang');
            $table->unsignedInteger('diskon');
            $table->foreignId('mekanik_id')->references('id')->on('galeh_bengkel_mekanik')->restrictOnDelete();
            $table->foreignId('user_id')->references('id')->on('users')->restrictOnDelete();
            $table->string('nopol', 15);
            $table->timestamps();
        });

        Schema::create('galeh_bengkel_detail_service', function (Blueprint $table) {
            $table->id();
            $table->string('faktur', 10);
            $table->foreign('faktur')->references('faktur')->on('galeh_bengkel_service')->restrictOnDelete();
            $table->foreignId('barang_id')->references('id')->on('galeh_bengkel_barang')->restrictOnDelete();
            $table->unsignedInteger('harga_jual');
            $table->unsignedInteger('jml__jual');
            $table->timestamps();
        });

        Schema::create('galeh_bengkel_detail_jasa', function (Blueprint $table) {
            $table->id();
            $table->string('faktur', 10);
            $table->foreign('faktur')->references('faktur')->on('galeh_bengkel_service')->restrictOnDelete();
            $table->foreignId('jasa_id')->references('id')->on('galeh_bengkel_jasa')->restrictOnDelete();
            $table->unsignedInteger('tarif');
            $table->unsignedInteger('harga');
            $table->timestamps();
        });

        if (Schema::hasTable('users'))
            if (!Schema::hasColumn('users', 'level'))
                Schema::table('users', function (Blueprint $table) {
                    $table->string('level', 25);
                });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::withoutForeignKeyConstraints(
            function () {
                $table = ['barang', 'jasa', 'mekanik', 'pendaftaran', 'service', 'detail_service', 'detail_jasa'];

                foreach ($table as $key)
                    Schema::dropIfExists('galeh_bengkel_' . $key);
            }
        );
    }
};
