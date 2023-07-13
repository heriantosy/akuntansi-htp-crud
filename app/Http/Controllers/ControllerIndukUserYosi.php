<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelIndukUserYosi;

class ControllerindukUserYosi extends Controller
{
    public function index(){
    $myakun = new ModelindukUserYosi();
        $views_induk_user_yosi = $myakun->tampil_induk_user_yosi();
        
        $data = array('views_induk_user_yosi' => $views_induk_user_yosi);
        return view('views_induk_user_yosi/index', $data);
    }

    public function tambah_yosi(){
        // return ('Testing');
        return view('views_induk_user_yosi/tambah_yosi');
     }
 
     public function tambah_proses_yosi(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('table_induk_user_yosi')
         ->insert([
             'id_user' => $request->id_user,
             'username'  =>  $request->username,
             'password'  =>  $request->password,
             'nama_lengkap'  =>  $request->nama_lengkap,
             'asal_kantor'  =>  $request->asal_kantor,
             'kode_cu' => $request->kode_cu,
             'email' => $request->email,
             'leveluser'  =>  $request->leveluser,
             'divisi'  =>  $request->divisi,
             'publish'  =>  $request->publish,
             'tgldaftar'  =>  $request->tgldaftar,
             'tgllogin'  =>  $request->tgllogin,
             'statuslogin'  =>  $request->statuslogin
         ]);
         return redirect('views_induk_user_yosi');
     }
 
     public function edit_yosi($id_user){
         // return ('Testing');
         $views_induk_user_yosi = \DB::table('table_induk_user_yosi')->where('id_user', $id_user)->first();
         //dd($views_induk_user_yosi);
         $data = array('views_induk_user_yosi' => $views_induk_user_yosi);
         return view('views_induk_user_yosi/edit_yosi', $data);
     }
 
     public function edit_proses_yosi(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('table_induk_user_yosi')->where('id_user',$request->id_user)
         ->update([
            'username'  =>  $request->username,
             'password'  =>  $request->password,
             'nama_lengkap'  =>  $request->nama_lengkap,
             'asal_kantor'  =>  $request->asal_kantor,
             'kode_cu' => $request->kode_cu,
             'email' => $request->email,
             'leveluser'  =>  $request->leveluser,
             'divisi'  =>  $request->divisi,
             'publish'  =>  $request->publish,
             'tgldaftar'  =>  $request->tgldaftar,
             'tgllogin'  =>  $request->tgllogin,
             'statuslogin'  =>  $request->statuslogin
         ]);
         return redirect('views_induk_user_yosi');
     }
 
     public function delete_yosi ($id_user){
         $query = \DB::table('table_induk_user_yosi')->where('id_user',$id_user)->delete();
         return redirect('views_induk_user_yosi');
     }
}
