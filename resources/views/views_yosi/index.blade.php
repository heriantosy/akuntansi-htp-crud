@extends('layout1.main2')
@section('content')

<h4><b>Data Transaksi</b></h4>
<br>
<a href="{{ asset('views_yosi/tambah_yosi')  }}">Tambah Data</a>
<table class="table table-striped" width="100%">
 <tr class="table-primary">
    <td><b>No</td>
    <td><b>ID Transaksi</td>
    <td><b>Kode Jurnal</td>
    <td><b>Nomor Perkiraan</td>
    <td><b>Tanggal Transaksi</td>
    <td><b>Bulan Transaksi</td>
    <td><b>Jenis Transaksi</td>
    <td><b>Keterangan Transaksi</td>
    <td><b>Debit</td>
    <td><b>Kredit</td>
    <td><b>Tanggal Posting</td>
    <td><b>Keterangan Posting</td>
    <td><b>Aksi</td>
 </tr>   
<?php 
$no=0;
foreach ($views_yosi as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->id_transaksi }}</td>
    <td>{{ $rows->kode_jurnal }}</td>
    <td>{{ $rows->nomor_perkiraan }}</td>
    <td>{{ $rows->tanggal_transaksi }}</td>
    <td>{{ $rows->bulan_transaksi }}</td>
    <td>{{ $rows->jenis_transaksi }}</td>
    <td>{{ $rows->keterangan_transaksi }}</td>
    <td>{{ $rows->debet }}</td>
    <td>{{ $rows->kredit }}</td>
    <td>{{ $rows->tanggal_posting }}</td>
    <td>{{ $rows->keterangan_posting }}</td>
    <td>
        <a href="{{ asset('views_yosi/edit_yosi/'.$rows->id_transaksi ) }}">Edit</a>
        <a href="{{ asset('views_yosi/delete_yosi/'.$rows->id_transaksi ) }}">Del</a>
</td>
</tr>
<?php 
}
?>
</table>
@endsection