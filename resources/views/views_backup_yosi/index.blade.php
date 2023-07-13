@extends('layout1.main2')
@section('content')

<h4><b>Data Backup</b></h4>
<br>
<a href="{{ asset('views_backup_yosi/tambah_yosi')  }}">Tambah Data</a>
<table class="table table-striped" width="100%">
 <tr class="table-primary">
    <td><b>No</b></td>
    <td><b>ID Backup</b></td>
    <td><b>Nama File</b></td>
    <td><b>Tanggal Backup</b></td>
    <td><b>Id User</b></td>
    <td><b>Action</b></td>
 </tr>   
<?php 
$no=0;
foreach ($views_backup_yosi as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->id_backup_yosi }}</td>
    <td>{{ $rows->nama_file_yosi }}</td>
    <td>{{ $rows->tgl_backup_yosi }}</td>
    <td>{{ $rows->id_user_yosi }}</td>
    <td>
        <a href="{{ asset('views_backup_yosi/edit_yosi/'.$rows->id_backup_yosi ) }}">Edit</a>
        <a href="{{ asset('views_backup_yosi/delete_yosi/'.$rows->id_backup_yosi ) }}">Del</a>
</td>
</tr>
<?php 
}
?>
</table>
@endsection