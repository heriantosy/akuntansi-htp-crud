@extends('layout1.main2')
@section('content')

<h4><b>Data Jurnal Masuk</b></h4>
<br>
<a href="{{ asset('views_jurnalmasuk_yosi/tambah_yosi')  }}">Tambah Data</a>
<table class="table table-striped" width="100%">
 <tr class="table-primary">
    <td><b>No</td>
    <td><b>Nomor Jurnal</td>
    <td><b>Nama Jurnal</td>
    <td><b>Tanggal Selesai</td>
    <td><b>Action</td>
 </tr>   
<?php 
$no=0;
foreach ($views_jurnalmasuk_yosi as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->nomor_jurnal_yosi }}</td>
    <td>{{ $rows->nama_jurnal_yosi }}</td>
    <td>{{ $rows->tgl_selesai_yosi }}</td>
    <td>
        <a href="{{ asset('views_jurnalmasuk_yosi/edit_yosi/'.$rows->nomor_jurnal_yosi ) }}">Edit</a>
        <a href="{{ asset('views_jurnalmasuk_yosi/delete_yosi/'.$rows->nomor_jurnal_yosi ) }}">Del</a>
</td>
</tr>
<?php 
}
?>
</table>
@endsection