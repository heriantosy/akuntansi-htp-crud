<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelJurnalKeluarYosi;

class ControllerJurnalKeluarYosi extends Controller
{
    public function index(){
    $myakun = new ModelJurnalkeluarYosi();
        $views_jurnalkeluar_yosi = $myakun->tampil_jurnal_keluar_yosi();
        
        $data = array('views_jurnalkeluar_yosi' => $views_jurnalkeluar_yosi);
        return view('views_jurnalkeluar_yosi/index', $data);
    }

    public function tambah_yosi(){
        // return ('Testing');
        return view('views_jurnalkeluar_yosi/tambah_yosi');
     }
 
     public function tambah_proses_yosi(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('table_jurnal_keluar_yosi')
         ->insert([
             'nomor_jurnal_yosi' => $request->nomor_jurnal_yosi,
             'nama_jurnal_yosi'  =>  $request->nama_jurnal_yosi,
             'tgl_selesai_yosi'  =>  $request->tgl_selesai_yosi
         ]);
         return redirect('views_jurnalkeluar_yosi');
     }
 
     public function edit_yosi($nomor_jurnal_yosi){
         // return ('Testing');
         $views_jurnalkeluar_yosi = \DB::table('table_jurnal_keluar_yosi')->where('nomor_jurnal_yosi', $nomor_jurnal_yosi)->first();
         //dd($views_jurnalkeluar_yosi);
         $data = array('views_jurnalkeluar_yosi' => $views_jurnalkeluar_yosi);
         return view('views_jurnalkeluar_yosi/edit_yosi', $data);
     }
 
     public function edit_proses_yosi(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('table_jurnal_keluar_yosi')->where('nomor_jurnal_yosi',$request->nomor_jurnal_yosi)
         ->update([
            'nama_jurnal_yosi'  =>  $request->nama_jurnal_yosi,
             'tgl_selesai_yosi'  =>  $request->tgl_selesai_yosi
         ]);
         return redirect('views_jurnalkeluar_yosi');
     }
 
     public function delete_yosi ($nomor_jurnal_yosi){
         $query = \DB::table('table_jurnal_keluar_yosi')->where('nomor_jurnal_yosi',$nomor_jurnal_yosi)->delete();
         return redirect('views_jurnalkeluar_yosi');
     }
}
