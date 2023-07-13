<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelJurnalMasukYosi;

class ControllerJurnalMasukYosi extends Controller
{
    public function index(){
    $myakun = new ModelJurnalMasukYosi();
        $views_jurnalmasuk_yosi = $myakun->tampil_jurnal_masuk_yosi();
        
        $data = array('views_jurnalmasuk_yosi' => $views_jurnalmasuk_yosi);
        return view('views_jurnalmasuk_yosi/index', $data);
    }

    public function tambah_yosi(){
        // return ('Testing');
        return view('views_jurnalmasuk_yosi/tambah_yosi');
     }
 
     public function tambah_proses_yosi(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('table_jurnal_masuk_yosi')
         ->insert([
             'nomor_jurnal_yosi' => $request->nomor_jurnal_yosi,
             'nama_jurnal_yosi'  =>  $request->nama_jurnal_yosi,
             'tgl_selesai_yosi'  =>  $request->tgl_selesai_yosi
         ]);
         return redirect('views_jurnalmasuk_yosi');
     }
 
     public function edit_yosi($nomor_jurnal_yosi){
         // return ('Testing');
         $views_jurnalmasuk_yosi = \DB::table('table_jurnal_masuk_yosi')->where('nomor_jurnal_yosi', $nomor_jurnal_yosi)->first();
         //dd($views_jurnalmasuk_yosi);
         $data = array('views_jurnalmasuk_yosi' => $views_jurnalmasuk_yosi);
         return view('views_jurnalmasuk_yosi/edit_yosi', $data);
     }
 
     public function edit_proses_yosi(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('table_jurnal_masuk_yosi')->where('nomor_jurnal_yosi',$request->nomor_jurnal_yosi)
         ->update([
            'nama_jurnal_yosi'  =>  $request->nama_jurnal_yosi,
             'tgl_selesai_yosi'  =>  $request->tgl_selesai_yosi
         ]);
         return redirect('views_jurnalmasuk_yosi');
     }
 
     public function delete_yosi ($nomor_jurnal_yosi){
         $query = \DB::table('table_jurnal_masuk_yosi')->where('nomor_jurnal_yosi',$nomor_jurnal_yosi)->delete();
         return redirect('views_jurnalmasuk_yosi');
     }
}
