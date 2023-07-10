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
        if (Schema::hasTable('galeh_kampus_dosen')) {
            Schema::table('galeh_kampus_dosen', function (Blueprint $table) {
                $table->string('dosen_id')->primary();
                $table->string('nama_dosen', 50);
                $table->string('alamat', 100);
                $table->string('handphone', 15);
                $table->timestamps();
            });
        } else {
            Schema::create('galeh_kampus_dosen', function (Blueprint $table) {
                $table->string('dosen_id')->primary();
                $table->string('nama_dosen', 50);
                $table->string('alamat', 100);
                $table->string('handphone', 25);
                $table->timestamps();
            });
        }

        if (Schema::hasTable('galeh_kampus_prodi')) {
            Schema::table('galeh_kampus_prodi', function (Blueprint $table) {
                $table->string('prodi_id')->primary();
                $table->string('nama_prodi', 50);
                $table->string('pejabat', 100);
                $table->timestamps();
            });
        } else {
            Schema::create('galeh_kampus_prodi', function (Blueprint $table) {
                $table->string('prodi_id')->primary();
                $table->string('nama_prodi', 50);
                $table->string('pejabat', 100);
                $table->timestamps();
            });
        }

        if (Schema::hasTable('galeh_kampus_program')) {
            Schema::table('galeh_kampus_program', function (Blueprint $table) {
                $table->string('program_id')->primary();
                $table->string('nama_program', 50);
                $table->timestamps();
            });
        } else {
            Schema::create('galeh_kampus_program', function (Blueprint $table) {
                $table->string('program_id')->primary();
                $table->string('nama_program', 50);
                $table->timestamps();
            });
        }

        if (Schema::hasTable('galeh_kampus_ruang')) {
            Schema::table('galeh_kampus_ruang', function (Blueprint $table) {
                $table->string('ruang_id')->primary();
                $table->string('nama_ruang', 50);
                $table->timestamps();
            });
        } else {
            Schema::create('galeh_kampus_ruang', function (Blueprint $table) {
                $table->string('ruang_id')->primary();
                $table->string('nama_ruang', 50);
                $table->timestamps();
            });
        }

        if (Schema::hasTable('galeh_kampus_kelas')) {
            Schema::table('galeh_kampus_kelas', function (Blueprint $table) {
                $table->string('kelas_id')->primary();
                $table->string('nama_kelas', 50);
                $table->string('keterangan', 100);
                $table->timestamps();
            });
        } else {
            Schema::create('galeh_kampus_kelas', function (Blueprint $table) {
                $table->string('kelas_id')->primary();
                $table->string('nama_kelas', 50);
                $table->string('keterangan', 100);
                $table->timestamps();
            });
        }

        if (Schema::hasTable('galeh_kampus_kurikulum')) {
            Schema::table('galeh_kampus_kurikulum', function (Blueprint $table) {
                $table->string('kurikulum_id')->primary();
                $table->string('nama_kurikulum', 50);
                $table->timestamps();
            });
        } else {
            Schema::create('galeh_kampus_kurikulum', function (Blueprint $table) {
                $table->string('kurikulum_id')->primary();
                $table->string('nama_kurikulum', 50);
                $table->timestamps();
            });
        }

        if (Schema::hasTable('galeh_kampus_tahun')) {
            Schema::table('galeh_kampus_tahun', function (Blueprint $table) {
                $table->string('tahun_id')->primary();
                $table->string('nama_tahun', 50);
                $table->timestamps();
            });
        } else {
            Schema::create('galeh_kampus_tahun', function (Blueprint $table) {
                $table->string('tahun_id')->primary();
                $table->string('nama_tahun', 50);
                $table->timestamps();
            });
        }

        if (Schema::hasTable('galeh_kampus_hari')) {
            Schema::table('galeh_kampus_hari', function (Blueprint $table) {
                $table->string('hari_id')->primary();
                $table->string('nama_hari', 50);
                $table->timestamps();
            });
        } else {
            Schema::create('galeh_kampus_hari', function (Blueprint $table) {
                $table->string('hari_id')->primary();
                $table->string('nama_hari', 50);
                $table->timestamps();
            });
        }

        if (Schema::hasTable('galeh_kampus_mahasiswa')) {
            Schema::table('galeh_kampus_mahasiswa', function (Blueprint $table) {
                $table->string('nim')->primary();
                $table->string('nama_mahasiswa', 50);
                $table->string('alamat', 100);
                $table->string('prodi_id');
                $table->foreign('prodi_id')->references('prodi_id')->on('galeh_kampus_prodi');
                $table->string('program_id');
                $table->foreign('program_id')->references('program_id')->on('galeh_kampus_program');
                $table->timestamps();
            });
        } else {
            Schema::create('galeh_kampus_mahasiswa', function (Blueprint $table) {
                $table->string('nim')->primary();
                $table->string('nama_mahasiswa', 50);
                $table->string('alamat', 100);
                $table->string('prodi_id');
                $table->foreign('prodi_id')->references('prodi_id')->on('galeh_kampus_prodi');
                $table->string('program_id');
                $table->foreign('program_id')->references('program_id')->on('galeh_kampus_program');
                $table->timestamps();
            });
        }

        if (Schema::hasTable('galeh_kampus_matakuliah')) {
            Schema::table('galeh_kampus_matakuliah', function (Blueprint $table) {
                $table->string('mkid')->primary();
                $table->string('nama_mk', 50);
                $table->integer('sks');
                $table->string('semester', 2);
                $table->string('kurikulum_id');
                $table->foreign('kurikulum_id')->references('kurikulum_id')->on('galeh_kampus_kurikulum');
                $table->timestamps();
            });
        } else {
            Schema::create('galeh_kampus_matakuliah', function (Blueprint $table) {
                $table->string('mkid')->primary();
                $table->string('nama_mk', 50);
                $table->integer('sks');
                $table->string('semester', 2);
                $table->string('kurikulum_id');
                $table->foreign('kurikulum_id')->references('kurikulum_id')->on('galeh_kampus_kurikulum');
                $table->timestamps();
            });
        }

        if (Schema::hasTable('galeh_kampus_jadwal')) {
            Schema::table('galeh_kampus_jadwal', function (Blueprint $table) {
                $table->string('jadwal_id')->primary();
                $table->string('mkid');
                $table->string('tahun_id');
                $table->string('prodi_id');
                $table->string('kelas_id');
                $table->string('ruang_id');
                $table->string('dosen_id');
                $table->string('hari_id');
                $table->foreign('mkid')->references('mkid')->on('galeh_kampus_matakuliah');
                $table->foreign('tahun_id')->references('tahun_id')->on('galeh_kampus_tahun');
                $table->foreign('prodi_id')->references('prodi_id')->on('galeh_kampus_prodi');
                $table->foreign('kelas_id')->references('kelas_id')->on('galeh_kampus_kelas');
                $table->foreign('ruang_id')->references('ruang_id')->on('galeh_kampus_ruang');
                $table->foreign('dosen_id')->references('dosen_id')->on('galeh_kampus_dosen');
                $table->foreign('hari_id')->references('hari_id')->on('galeh_kampus_hari');
                $table->time('jam_mulai');
                $table->time('jam_selesai');
                $table->timestamps();
            });
        } else {
            Schema::create('galeh_kampus_jadwal', function (Blueprint $table) {
                $table->string('jadwal_id')->primary();
                $table->string('mkid');
                $table->string('tahun_id');
                $table->string('prodi_id');
                $table->string('kelas_id');
                $table->string('ruang_id');
                $table->string('dosen_id');
                $table->string('hari_id');
                $table->foreign('mkid')->references('mkid')->on('galeh_kampus_matakuliah');
                $table->foreign('tahun_id')->references('tahun_id')->on('galeh_kampus_tahun');
                $table->foreign('prodi_id')->references('prodi_id')->on('galeh_kampus_prodi');
                $table->foreign('kelas_id')->references('kelas_id')->on('galeh_kampus_kelas');
                $table->foreign('ruang_id')->references('ruang_id')->on('galeh_kampus_ruang');
                $table->foreign('dosen_id')->references('dosen_id')->on('galeh_kampus_dosen');
                $table->foreign('hari_id')->references('hari_id')->on('galeh_kampus_hari');
                $table->time('jam_mulai');
                $table->time('jam_selesai');
                $table->timestamps();
            });
        }

        if (Schema::hasTable('galeh_kampus_krs')) {
            Schema::table('galeh_kampus_krs', function (Blueprint $table) {
                $table->string('krs_id')->primary();
                $table->string('tahun_id');
                $table->string('nim');
                $table->foreign('tahun_id')->references('tahun_id')->on('galeh_kampus_tahun');
                $table->foreign('nim')->references('nim')->on('galeh_kampus_mahasiswa');
                $table->string('tugas');
                $table->string('kehadiran');
                $table->string('uts');
                $table->string('uas');
                $table->string('nilai_angka');
                $table->string('nilai_huruf');
                $table->timestamps();
            });
        } else {
            Schema::create('galeh_kampus_krs', function (Blueprint $table) {
                $table->string('krs_id')->primary();
                $table->string('tahun_id');
                $table->string('nim');
                $table->foreign('tahun_id')->references('tahun_id')->on('galeh_kampus_tahun');
                $table->foreign('nim')->references('nim')->on('galeh_kampus_mahasiswa');
                $table->string('tugas');
                $table->string('kehadiran');
                $table->string('uts');
                $table->string('uas');
                $table->string('nilai_angka');
                $table->string('nilai_huruf');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            Schema::dropIfExists('galeh_kampus_dosen');
            Schema::dropIfExists('galeh_kampus_prodi');
            Schema::dropIfExists('galeh_kampus_program');
            Schema::dropIfExists('galeh_kampus_ruang');
            Schema::dropIfExists('galeh_kampus_kelas');
            Schema::dropIfExists('galeh_kampus_kurikulum');
            Schema::dropIfExists('galeh_kampus_tahun');
            Schema::dropIfExists('galeh_kampus_hari');
            Schema::dropIfExists('galeh_kampus_mahasiswa');
            Schema::dropIfExists('galeh_kampus_matakuliah');
            Schema::dropIfExists('galeh_kampus_jadwal');
            Schema::dropIfExists('galeh_kampus_krs');
        });
    }
};
