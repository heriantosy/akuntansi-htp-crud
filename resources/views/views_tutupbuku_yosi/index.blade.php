@extends('layout1.main2')
@section('content')

<h4><b>Data Tutup Buku</b></h4>
<br>
<a href="{{ asset('views_tutupbuku_yosi/tambah_yosi')  }}">Tambah Data</a>
<table class="table table-striped" width="100%">
 <tr class="table-primary">
    <td><b>No</td>
    <td><b>ID Tutup Buku</td>
    <td><b>Nama File</td>
    <td><b>Tanggal Tutup Buku</td>
    <td><b>Id User</td>
    <td><b>Action</td>
 </tr>   
<?php 
$no=0;
foreach ($views_tutupbuku_yosi as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->id_tutupbuku_yosi }}</td>
    <td>{{ $rows->nama_file_yosi }}</td>
    <td>{{ $rows->tgl_tutupbuku_yosi }}</td>
    <td>{{ $rows->id_user_yosi }}</td>
    <td>
        <a href="{{ asset('views_tutupbuku_yosi/edit_yosi/'.$rows->id_tutupbuku_yosi ) }}">Edit</a>
        <a href="{{ asset('views_tutupbuku_yosi/delete_yosi/'.$rows->id_tutupbuku_yosi ) }}">Del</a>
</td>
</tr>
<?php 
}
?>
</table>
@endsection