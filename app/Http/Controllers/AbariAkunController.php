<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\abari_akun_model;

class AbariAkunController extends Controller
{
    public function index(){
        $myakun = new abari_akun_model();
        $akun = $myakun->tampil_data();
        
        $data = array('akun' => $akun);
        return view('abari_akun/index', $data);
    }

    public function tambah(){
       // return ('Testing');
       return view('abari_akun/tambah');
    }

    public function tambah_proses(Request $request){
        // return ('Testing Proses');
        $query = \DB::table('abari_t_perkiraan')
        ->insert([
            'nomor_perkiraan'  =>  $request->nomor_perkiraan,
            'nama_perkiraan'  =>  $request->nama_perkiraan,
            'kelompok'  =>  $request->kelompok
        ]);
        return redirect('abari_akun');
    }

    public function edit($id){
        // return ('Testing');
        $akun = \DB::table('abari_t_perkiraan')->where('id', $id)->first();
        //dd($akun);
        $data = array('akun' => $akun);
        return view('abari_akun/edit', $data);
    }

    public function edit_proses(Request $request){
        // return ('Testing Proses');
        $query = \DB::table('abari_t_perkiraan')->where('id',$request->id)
        ->update([
            'nomor_perkiraan'   =>  $request->nomor_perkiraan,
            'nama_perkiraan'    =>  $request->nama_perkiraan,
            'kelompok'          =>  $request->kelompok
        ]);
        return redirect('abari_akun');
    }

    public function delete ($id){
        $query = \DB::table('abari_t_perkiraan')->where('id',$id)->delete();
        return redirect('abari_akun');
    }
}
