+<h1>Data Transaksi</h1>
<a href="{{ asset('views_yosi/tambah_yosi')  }}">Tambah Data</a>
<table border="1" width="100%">
 <tr style="background:black;color:white">
    <td>No</td>
    <td>ID Transaksi</td>
    <td>Kode Jurnal</td>
    <td>Nomor Perkiraan</td>
    <td>Tanggal Transaksi</td>
    <td>Bulan Transaksi</td>
    <td>Jenis Transaksi</td>
    <td>Aksi</td>
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
    <td>
        <a href="{{ asset('views_yosi/edit_yosi/'.$rows->id_transaksi ) }}">Edit</a>
        <a href="{{ asset('views_yosi/delete_yosi/'.$rows->id_transaksi ) }}">Del</a>
</td>
</tr>
<?php 
}
?>
</table>