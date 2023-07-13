<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelTutupBukuYosi;

class ControllerTutupBukuYosi extends Controller
{
    public function index(){
    $myakun = new ModelTutupBukuYosi();
        $views_tutupbuku_yosi = $myakun->tampil_history_tutupbuku_yosi();
        
        $data = array('views_tutupbuku_yosi' => $views_tutupbuku_yosi);
        return view('views_tutupbuku_yosi/index', $data);
    }

    public function tambah_yosi(){
        // return ('Testing');
        return view('views_tutupbuku_yosi/tambah_yosi');
     }
 
     public function tambah_proses_yosi(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('table_history_tutupbuku_yosi')
         ->insert([
             'id_tutupbuku_yosi' => $request->id_tutupbuku_yosi,
             'nama_file_yosi'  =>  $request->nama_file_yosi,
             'tgl_tutupbuku_yosi'  =>  $request->tgl_tutupbuku_yosi,
             'id_user_yosi'  =>  $request->id_user_yosi
         ]);
         return redirect('views_tutupbuku_yosi');
     }
 
     public function edit_yosi($id_tutupbuku_yosi){
         // return ('Testing');
         $views_tutupbuku_yosi = \DB::table('table_history_tutupbuku_yosi')->where('id_tutupbuku_yosi', $id_tutupbuku_yosi)->first();
         //dd($views_tutupbuku_yosi);
         $data = array('views_tutupbuku_yosi' => $views_tutupbuku_yosi);
         return view('views_tutupbuku_yosi/edit_yosi', $data);
     }
 
     public function edit_proses_yosi(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('table_history_tutupbuku_yosi')->where('id_tutupbuku_yosi',$request->id_tutupbuku_yosi)
         ->update([
            'nama_file_yosi'  =>  $request->nama_file_yosi,
             'tgl_tutupbuku_yosi'  =>  $request->tgl_tutupbuku_yosi,
             'id_user_yosi'  =>  $request->id_user_yosi
         ]);
         return redirect('views_tutupbuku_yosi');
     }
 
     public function delete_yosi ($id_tutupbuku_yosi){
         $query = \DB::table('table_history_tutupbuku_yosi')->where('id_tutupbuku_yosi',$id_tutupbuku_yosi)->delete();
         return redirect('views_tutupbuku_yosi');
     }
}
