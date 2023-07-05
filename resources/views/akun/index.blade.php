@extends('layout.main2')
@section('content')

<h1>Master data akun</h1>
<div class="card">
<div class="card-header">
<a href="{{ asset('akun/tambah')  }}">Tambah Data</a>
<table class="table table-sm table-stripped table-bordered">
   
    <thead>
 <tr style="background:black;color:white">
    <td>No</td>
    <td>Nomor Perkiaraan</td>
    <td>Nama Perkiraan</td>
    <td>Kelompok</td>
    <td>Tipe</td>
    <td>Aksi</td>
 </tr> 
 </thead>

    <tbody>  
<?php 
$no=0;
foreach ($akun as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->nomor_perkiraan }}</td>
    <td>{{ $rows->nama_perkiraan }}</td>
    <td>{{ $rows->kelompok }}</td>
    <td>{{ $rows->tipe }}</td>
    <td>
        <a href="{{ asset('akun/edit/'.$rows->id ) }}">Edit</a>
        <a href="{{ asset('akun/delete/'.$rows->id ) }}">Del</a>
</td>
</tr>
<?php 
}
?>
 </tbody>
</table>
</div>
</div>
@endsection