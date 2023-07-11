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
        $query = \DB::table('abari_perkiraan')
        ->insert([
            'PerkiraanID' => $request->PerkiraanID,
            'NomorPerkiraan'  =>  $request->NomorPerkiraan,
            'NamaPerkiraan'  =>  $request->NamaPerkiraan,
            'tipe'  =>  $request->tipe,
            'induk'  =>  $request->induk,
            'level'  =>  $request->level,
            'Kelompok'  =>  $request->Kelompok,
        ]);
        return redirect('abari_akun');
    }

    public function edit($id){
        // return ('Testing');
        $akun = \DB::table('abari_perkiraan')->where('PerkiraanID', $id)->first();
        //dd($akun);
        $data = array('akun' => $akun);
        return view('abari_akun/edit', $data);
    }

    public function edit_proses(Request $request){
        // return ('Testing Proses');
        $query = \DB::table('abari_perkiraan')->where('PerkiraanID',$request->PerkiraanID)
        ->update([
            'PerkiraanID' => $request->PerkiraanID,
            'NomorPerkiraan'  =>  $request->NomorPerkiraan,
            'NamaPerkiraan'  =>  $request->NamaPerkiraan,
            'tipe'  =>  $request->tipe,
            'induk'  =>  $request->induk,
            'level'  =>  $request->level,
            'Kelompok'  =>  $request->Kelompok
        ]);
        return redirect('abari_akun');
    }

    public function delete ($id){
        $query = \DB::table('abari_perkiraan')->where('PerkiraanID',$id)->delete();
        return redirect('abari_akun');
    }

//     public function destroy(abari_akun_model $akun, $PerkiraanID)
//     {
//         $data = $akun->find($PerkiraanID);    
//         $data->delete();
//         return redirect('abari_akun')->with('msg', 'Hapus'. $data->PerkiraanID.' berhasil');
//     }
 }