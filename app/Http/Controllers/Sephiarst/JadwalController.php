<?php

namespace App\Http\Controllers\SephiaRst;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index(): View
    {
        $jadwal = Jadwal::select([
            'mkid',
            'tahun_id',
            'prodi_id',
            'hari_id',
            'dosen_id',
            'jam_mulai',
            'jam_selesai'
        ])->with([
            'matkul:mkid,nama_mk',
            'tahun:tahun_id,nama_tahun',
            'prodi:prodi_id,nama_prodi',
            'hari:hari_id,nama_hari',
            'dosen:dosen_id,nama_dosen',
        ])->get();

        return view('Sephiarst.jadwal.index', compact('jadwal'));
    }
}
