@extends('layout1.main2')
@section('content')


<h4><b>Edit Data Jurnal Umum</b></h1>
<br>
<form action="{{ asset('views_jurnalumum_yosi/edit_proses_yosi') }}" method="POST">
@csrf
<input type="hidden" name="nomor_jurnal_yosi" value="<?php echo $views_jurnalumum_yosi->nomor_jurnal_yosi ?>">
<div class="mb-3 row">
    <label for="nama_jurnal_yosi" class="col-sm-2 col-form-label">Nama Jurnal</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nama_jurnal_yosi" name="nama_jurnal_yosi" value="<?php echo $views_jurnalumum_yosi->nama_jurnal_yosi ?>">
    </div>
</div>
<div class="mb-3 row">
    <label for="tgl_selesai_yosi" class="col-sm-2 col-form-label">Tanggal Selesai</label>
    <div class="col-sm-10">
    <input type="date" class="form-control" id="tgl_selesai_yosi" name="tgl_selesai_yosi" value="<?php echo $views_jurnalumum_yosi->tgl_selesai_yosi ?>">
    </div>
</div>
<input type="submit" value="Simpan">
</form>

@endsection