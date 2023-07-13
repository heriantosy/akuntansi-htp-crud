@extends('layout1.main2')
@section('content')

<h4><b>Data Master</b></h4>
<br>
<a href="{{ asset('views_master_yosi/tambah_yosi')  }}">Tambah Data</a>
<table class="table table-striped" width="100%">
 <tr class="table-primary">
    <td><b>No</td>
    <td><b>ID Perkiraan</td>
    <td><b>Nomor Perkiraan</td>
    <td><b>Nama Perkiraan</td>
    <td><b>Tipe</td>
    <td><b>Induk</td>
    <td><b>Level</td>
    <td><b>Kelompok</td>
    <td><b>Normal</td>
    <td><b>Awal Debet</td>
    <td><b>Awal Kredit</td>
    <td><b>Mut Debet</td>
    <td><b>Mut Kredit</td>
    <td><b>Sisa Debet</td>
    <td><b>Sisa Kredit</td>
    <td><b>RL Debet</td>
    <td><b>RL Kredit</td>
    <td><b>NRC Debet</td>
    <td><b>NRC Kredit</td>
    <td><b>Aksi</td>
 </tr>   
<?php 
$no=0;
foreach ($views_master_yosi as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->id_perkiraan }}</td>
    <td>{{ $rows->nomor_perkiraan }}</td>
    <td>{{ $rows->nama_perkiraan }}</td>
    <td>{{ $rows->tipe }}</td>
    <td>{{ $rows->induk }}</td>
    <td>{{ $rows->level }}</td>
    <td>{{ $rows->kelompok }}</td>
    <td>{{ $rows->normal }}</td>
    <td>{{ $rows->awal_debet }}</td>
    <td>{{ $rows->awal_kredit }}</td>
    <td>{{ $rows->mut_debet }}</td>
    <td>{{ $rows->mut_kredit }}</td>
    <td>{{ $rows->sisa_debet }}</td>
    <td>{{ $rows->sisa_kredit }}</td>
    <td>{{ $rows->rl_debet }}</td>
    <td>{{ $rows->rl_kredit }}</td>
    <td>{{ $rows->nrc_debet }}</td>
    <td>{{ $rows->nrc_kredit }}</td>
    <td>
        <a href="{{ asset('views_master_yosi/edit_yosi/'.$rows->id_perkiraan ) }}">Edit</a>
        <a href="{{ asset('views_master_yosi/delete_yosi/'.$rows->id_perkiraan ) }}">Del</a>
</td>
</tr>
<?php 
}
?>
</table>
@endsection