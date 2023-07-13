<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelBackupYosi;

class ControllerBackupYosi extends Controller
{
    public function index(){
    $myakun = new ModelBackupYosi();
        $views_backup_yosi = $myakun->tampil_history_backup_yosi();
        
        $data = array('views_backup_yosi' => $views_backup_yosi);
        return view('views_backup_yosi/index', $data);
    }

    public function tambah_yosi(){
        // return ('Testing');
        return view('views_backup_yosi/tambah_yosi');
     }
 
     public function tambah_proses_yosi(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('table_history_backup_yosi')
         ->insert([
             'id_backup_yosi' => $request->id_backup_yosi,
             'nama_file_yosi'  =>  $request->nama_file_yosi,
             'tgl_backup_yosi'  =>  $request->tgl_backup_yosi,
             'id_user_yosi'  =>  $request->id_user_yosi
         ]);
         return redirect('views_backup_yosi');
     }
 
     public function edit_yosi($id_backup_yosi){
         // return ('Testing');
         $views_backup_yosi = \DB::table('table_history_backup_yosi')->where('id_backup_yosi', $id_backup_yosi)->first();
         //dd($views_backup_yosi);
         $data = array('views_backup_yosi' => $views_backup_yosi);
         return view('views_backup_yosi/edit_yosi', $data);
     }
 
     public function edit_proses_yosi(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('table_history_backup_yosi')->where('id_backup_yosi',$request->id_backup_yosi)
         ->update([
            'nama_file_yosi'  =>  $request->nama_file_yosi,
             'tgl_backup_yosi'  =>  $request->tgl_backup_yosi,
             'id_user_yosi'  =>  $request->id_user_yosi
         ]);
         return redirect('views_backup_yosi');
     }
 
     public function delete_yosi ($id_backup_yosi){
         $query = \DB::table('table_history_backup_yosi')->where('id_backup_yosi',$id_backup_yosi)->delete();
         return redirect('views_backup_yosi');
     }
}
