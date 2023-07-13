<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelMasterYosi;

class ControllerMasterYosi extends Controller
{
    public function index(){
    $myakun = new ModelMasterYosi();
        $views_master_yosi = $myakun->tampil_master_yosi();
        
        $data = array('views_master_yosi' => $views_master_yosi);
        return view('views_master_yosi/index', $data);
    }

    public function tambah_yosi(){
        // return ('Testing');
        return view('views_master_yosi/tambah_yosi');
     }
 
     public function tambah_proses_yosi(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('table_master_yosi')
         ->insert([
             'id_perkiraan' => $request->id_perkiraan,
             'nomor_perkiraan'  =>  $request->nomor_perkiraan,
             'nama_perkiraan'  =>  $request->nama_perkiraan,
             'tipe'  =>  $request->tipe,
             'induk'  =>  $request->induk,
             'level' => $request->level,
             'kelompok' => $request->kelompok,
             'normal'  =>  $request->normal,
             'awal_debet'  =>  $request->awal_debet,
             'awal_kredit'  =>  $request->awal_kredit,
             'mut_debet'  =>  $request->mut_debet,
             'mut_kredit'  =>  $request->mut_kredit,
             'sisa_debet'  =>  $request->sisa_debet,
             'sisa_kredit'  =>  $request->sisa_kredit,
             'rl_debet'  =>  $request->rl_debet,
             'rl_kredit'  =>  $request->rl_kredit,
             'nrc_debet'  =>  $request->nrc_debet,
             'nrc_kredit'  =>  $request->nrc_kredit
         ]);
         return redirect('views_master_yosi');
     }
 
     public function edit_yosi($id_perkiraan){
         // return ('Testing');
         $views_master_yosi = \DB::table('table_master_yosi')->where('id_perkiraan', $id_perkiraan)->first();
         //dd($views_master_yosi);
         $data = array('views_master_yosi' => $views_master_yosi);
         return view('views_master_yosi/edit_yosi', $data);
     }
 
     public function edit_proses_yosi(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('table_master_yosi')->where('id_perkiraan',$request->id_perkiraan)
         ->update([
            'nomor_perkiraan'  =>  $request->nomor_perkiraan,
             'nama_perkiraan'  =>  $request->nama_perkiraan,
             'tipe'  =>  $request->tipe,
             'induk'  =>  $request->induk,
             'level' => $request->level,
             'kelompok' => $request->kelompok,
             'normal'  =>  $request->normal,
             'awal_debet'  =>  $request->awal_debet,
             'awal_kredit'  =>  $request->awal_kredit,
             'mut_debet'  =>  $request->mut_debet,
             'mut_kredit'  =>  $request->mut_kredit,
             'sisa_debet'  =>  $request->sisa_debet,
             'sisa_kredit'  =>  $request->sisa_kredit,
             'rl_debet'  =>  $request->rl_debet,
             'rl_kredit'  =>  $request->rl_kredit,
             'nrc_debet'  =>  $request->nrc_debet,
             'nrc_kredit'  =>  $request->nrc_kredit
         ]);
         return redirect('views_master_yosi');
     }
 
     public function delete_yosi ($id_perkiraan){
         $query = \DB::table('table_master_yosi')->where('id_perkiraan',$id_perkiraan)->delete();
         return redirect('views_master_yosi');
     }
}
