@extends('layout1.main2')
@section('content')


<h4><b>Tambah Data Tutup Buku</b></h4>
<br>
<form action="{{ asset('views_tutupbuku_yosi/tambah_proses_yosi') }}" method="POST">
@csrf
<div class="mb-3 row">
    <label for="id_tutupbuku_yosi" class="col-sm-2 col-form-label">ID Tutup Buku</label>
    <div class="col-sm-10">
    <input type="integer" class="form-control" id="id_tutupbuku_yosi" name="id_tutupbuku_yosi">
    </div>
</div>
<div class="mb-3 row">
    <label for="nama_file_yosi" class="col-sm-2 col-form-label">Nama File</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nama_file_yosi" name="nama_file_yosi">
    </div>
</div>
<div class="mb-3 row">
    <label for="tgl_tutupbuku_yosi" class="col-sm-2 col-form-label">Tanggal Tutup Buku</label>
    <div class="col-sm-10">
    <input type="date" class="form-control" id="tgl_tutupbuku_yosi" name="tgl_tutupbuku_yosi">
    </div>
</div>
<div class="mb-3 row">
    <label for="id_user_yosi" class="col-sm-2 col-form-label">ID User</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="id_user_yosi" name="id_user_yosi">
    </div>
</div>
<input type="submit" value="Simpan">
</form> 

@endsection