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
        Schema::create('abari_t_user', function (Blueprint $table) {
            $table->integer('id_user', 10);
            $table->string('user_name', 25);
            $table->string('password', 45);
            $table->string('level', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abari_t_user');
    }
};
