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
        Schema::create('t_jurnalmasuk', function (Blueprint $table) {
            $table->increments('jurnalid');
            $table->string('tipeJurnal');
            $table->string('nojurnal');
            $table->timestamps('tgltransaksi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
