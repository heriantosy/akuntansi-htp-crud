<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelYosi;

class ControllerYosi extends Controller
{
    public function index(){
    $myakun = new ModelYosi();
        $views_yosi = $myakun->tampil_transaksi();
        
        $data = array('views_yosi' => $views_yosi);
        return view('views_yosi/index', $data);
    }

    public function tambah_yosi(){
        // return ('Testing');
        return view('views_yosi/tambah_yosi');
     }
 
     public function tambah_proses_yosi(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('table_transaksi_yosi')
         ->insert([
             'id_transaksi' => $request->id_transaksi,
             'kode_jurnal' => $request->kode_jurnal,
             'nomor_perkiraan'  =>  $request->nomor_perkiraan,
             'tanggal_transaksi'  =>  $request->tanggal_transaksi,
             'bulan_transaksi'  =>  $request->bulan_transaksi,
             'jenis_transaksi'  =>  $request->jenis_transaksi,
             'keterangan_transaksi' => $request->keterangan_transaksi,
             'debet' => $request->debet,
             'kredit'  =>  $request->kredit,
             'tanggal_posting'  =>  $request->tanggal_posting,
             'keterangan_posting'  =>  $request->keterangan_posting
         ]);
         return redirect('views_yosi');
     }
 
     public function edit_yosi($id_transaksi){
         // return ('Testing');
         $views_yosi = \DB::table('table_transaksi_yosi')->where('id_transaksi', $id_transaksi)->first();
         //dd($views_yosi);
         $data = array('views_yosi' => $views_yosi);
         return view('views_yosi/edit_yosi', $data);
     }
 
     public function edit_proses_yosi(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('table_transaksi_yosi')->where('id_transaksi',$request->id_transaksi)
         ->update([
            'kode_jurnal' => $request->kode_jurnal,
            'nomor_perkiraan'  =>  $request->nomor_perkiraan,
            'tanggal_transaksi'  =>  $request->tanggal_transaksi,
            'bulan_transaksi'  =>  $request->bulan_transaksi,
            'jenis_transaksi'  =>  $request->jenis_transaksi,
            'keterangan_transaksi' => $request->keterangan_transaksi,
            'debet' => $request->debet,
            'kredit'  =>  $request->kredit,
            'tanggal_posting'  =>  $request->tanggal_posting,
            'keterangan_posting'  =>  $request->keterangan_posting
         ]);
         return redirect('views_yosi');
     }
 
     public function delete_yosi ($id_transaksi){
         $query = \DB::table('table_transaksi_yosi')->where('id_transaksi',$id_transaksi)->delete();
         return redirect('views_yosi');
     }
}
