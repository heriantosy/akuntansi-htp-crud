@extends('layout.main2')
@section('content')
<<<<<<< HEAD

=======
>>>>>>> 252af40bfd5ac623166bbae2877c74f547633f55
<h1>Jadwal Kuliah</h1>
<table class="table table-sm table-stripped table-bordered">
<tr>
    <td>No</td>
    <td>Nama Dosen</td>
    <td>Nama Matakulaih</td>
</tr>
<?php
$no=0; 
foreach ($jadwal as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->nama_dosen }}</td>
    <td>{{ $rows->nama_mk }}</td>
</tr>

<?php
}

?>

</table>
@endsection