@extends('layout1.main2')
@section('content')

<h4><b>Data User</b></h4>
<br>
<a href="{{ asset('views_induk_user_yosi/tambah_yosi')  }}">Tambah Data</a>
<table class="table table-striped" width="100%">
 <tr class="table-primary">
    <td><b>No</td>
    <td><b>ID User</td>
    <td><b>Username</td>
    <td><b>Password</td>
    <td><b>Nama Lengkap</td>
    <td><b>Asal Kantor</td>
    <td><b>Kode Cu</td>
    <td><b>Email</td>
    <td><b>Level User</td>
    <td><b>Divisi</td>
    <td><b>Publish</td>
    <td><b>Tanggal Daftar</td>
    <td><b>Tanggal Login</td>
    <td><b>Status Login</td>
    <td><b>Aksi</td>
 </tr>   
<?php 
$no=0;
foreach ($views_induk_user_yosi as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->id_user }}</td>
    <td>{{ $rows->username }}</td>
    <td>{{ $rows->password }}</td>
    <td>{{ $rows->nama_lengkap }}</td>
    <td>{{ $rows->asal_kantor }}</td>
    <td>{{ $rows->kode_cu }}</td>
    <td>{{ $rows->email }}</td>
    <td>{{ $rows->leveluser }}</td>
    <td>{{ $rows->divisi }}</td>
    <td>{{ $rows->publish }}</td>
    <td>{{ $rows->tgldaftar }}</td>
    <td>{{ $rows->tgllogin }}</td>
    <td>{{ $rows->statuslogin }}</td>
    <td>
        <a href="{{ asset('views_induk_user_yosi/edit_yosi/'.$rows->id_user ) }}">Edit</a>
        <a href="{{ asset('views_induk_user_yosi/delete_yosi/'.$rows->id_user ) }}">Del</a>
</td>
</tr>
<?php 
}
?>
</table>
@endsection