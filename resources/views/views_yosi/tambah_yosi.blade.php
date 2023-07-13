@extends('layout1.main2')
@section('content')


<h4><b>Tambah Data Transaksi</b></h4>
<br>
<form action="{{ asset('views_yosi/tambah_proses_yosi') }}" method="POST">
@csrf
<div class="mb-3 row">
    <label for="id_transaksi" class="col-sm-2 col-form-label">ID Transaksi</label>
    <div class="col-sm-10">
    <input type="integer" class="form-control" id="id_transaksi" name="id_transaksi">
    </div>
</div>
<div class="mb-3 row">
    <label for="kode_jurnal" class="col-sm-2 col-form-label">Kode Jurnal</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="kode_jurnal" name="kode_jurnal">
    </div>
</div>
<div class="mb-3 row">
    <label for="nomor_perkiraan" class="col-sm-2 col-form-label">Nomor Perkiraan</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nomor_perkiraan" name="nomor_perkiraan">
    </div>
</div>
<div class="mb-3 row">
    <label for="tanggal_transaksi" class="col-sm-2 col-form-label">Tanggal Transaksi</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="tanggal_transaksi" name="tanggal_transaksi">
    </div>
</div>
<div class="mb-3 row">
    <label for="bulan_transaksi" class="col-sm-2 col-form-label">Bulan Transaksi</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="bulan_transaksi" name="bulan_transaksi">
    </div>
</div>
<div class="mb-3 row">
    <label for="jenis_transaksi" class="col-sm-2 col-form-label">Jenis Transaksi</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="jenis_transaksi" name="jenis_transaksi">
    </div>
</div>
<div class="mb-3 row">
    <label for="keterangan_transaksi" class="col-sm-2 col-form-label">Keterangan Transaksi</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="keterangan_transaksi" name="keterangan_transaksi">
    </div>
</div>
<div class="mb-3 row">
    <label for="debet" class="col-sm-2 col-form-label">Debet</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="debet" name="debet">
    </div>
</div>
<div class="mb-3 row">
    <label for="kredit" class="col-sm-2 col-form-label">Kredit</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="kredit" name="kredit">
    </div>
</div>
<div class="mb-3 row">
    <label for="tanggal_posting" class="col-sm-2 col-form-label">Tanggal Posting</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="tanggal_posting" name="tanggal_posting">
    </div>
</div>
<div class="mb-3 row">
    <label for="keterangan_posting" class="col-sm-2 col-form-label">Keterangan Posting</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="keterangan_posting" name="keterangan_posting">
    </div>
</div>
<input type="submit" value="Simpan">
</form> 

@endsection