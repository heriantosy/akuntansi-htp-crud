@extends('layout.main2')
@section('content')

<h1>Master data akun</h1>

<div class="card">
<div class="card-header">

<h1>Tambah Data Akun</h1>
<form action="{{ asset('adit_akun/tambah_proses') }}" method="POST">
@csrf
Nomor Akun <input type="text" name="nomor_perkiraan"><br>
Nama Perkiraan <input type="text" name="nama_perkiraan"><br>
Kelompok <input type="text" name="kelompok"><br>
Tipe <input type="text" name="tipe"><br>
<input type="submit" value="Simpan">
</form>   

</div>
</div>
@endsection