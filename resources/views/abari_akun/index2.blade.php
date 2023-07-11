@extends('abari_layout.abari_main')
@section('content')

<h1>Modul Perkiraan</h1>
<a href="{{ asset('abari_akun/tambah')  }}">Tambah Data</a>
<table border="1" width="75%">
 <tr style="background:black;color:white">
    <td>No</td>
    <td>ID Perkiraan</td>
    <td>Nomor Perkiraan</td>
    <td>Nama Perkiraan</td>
    <td>Tipe</td>
    <td>Induk</td>
    <td>Level</td>
    <td>Kelompok</td>
    <td>Aksi</td>
 </tr>   
<?php 
$no=0;
foreach ($akun as $rows){
$no++;
?>
<tr>
    <td><?php echo $no ?></td>
    <td><?php echo $rows->PerkiraanID ?></td>
    <td><?php echo $rows->NomorPerkiraan ?></td>
    <td><?php echo $rows->NamaPerkiraan ?></td>
    <td><?php echo $rows->tipe ?></td>
    <td><?php echo $rows->induk ?></td>
    <td><?php echo $rows->level ?></td>
    <td><?php echo $rows->Kelompok ?></td>
    <td>
        <a href="{{ asset('abari_akun/edit/'.$rows->PerkiraanID ) }}">Edit</a>
        <a href="{{ asset('abari_akun/delete/'.$rows->PerkiraanID ) }}">Del</a>
</td>
</tr>
<?php 
}
?>
</table>
@endsection