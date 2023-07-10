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
        $table = [
            ['from' => 't_dosen', 'to' => 'galeh_kampus_dosen'],
            ['from' => 't_prodi', 'to' => 'galeh_kampus_prodi'],
            ['from' => 't_program', 'to' => 'galeh_kampus_program'],
            ['from' => 't_ruang', 'to' => 'galeh_kampus_ruang'],
            ['from' => 't_kelas', 'to' => 'galeh_kampus_kelas'],
            ['from' => 't_kurikulum', 'to' => 'galeh_kampus_kurikulum'],
            ['from' => 't_tahun', 'to' => 'galeh_kampus_tahun'],
            ['from' => 't_hari', 'to' => 'galeh_kampus_hari'],
            ['from' => 't_mahasiswa', 'to' => 'galeh_kampus_mahasiswa'],
            ['from' => 't_matakuliah', 'to' => 'galeh_kampus_matakuliah'],
            ['from' => 't_jadwal', 'to' => 'galeh_kampus_jadwal'],
            ['from' => 't_krs', 'to' => 'galeh_kampus_krs'],
        ];

        foreach ($table as $key)
            if (Schema::hasTable($key['from']))
                Schema::rename($key['from'], $key['to']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
