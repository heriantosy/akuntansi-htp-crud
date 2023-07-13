@extends('layout1.main2')
@section('content')


<h4><b>Edit Data Backup</b></h1>
<br>
<form action="{{ asset('views_backup_yosi/edit_proses_yosi') }}" method="POST">
@csrf
<input type="hidden" name="id_backup_yosi" value="<?php echo $views_backup_yosi->id_backup_yosi ?>">
<div class="mb-3 row">
    <label for="nama_file_yosi" class="col-sm-2 col-form-label">Nama File</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nama_file_yosi" name="nama_file_yosi" value="<?php echo $views_backup_yosi->nama_file_yosi ?>">
    </div>
</div>
<div class="mb-3 row">
    <label for="tgl_backup_yosi" class="col-sm-2 col-form-label">Tanggal Backup</label>
    <div class="col-sm-10">
    <input type="date" class="form-control" id="tgl_backup_yosi" name="tgl_backup_yosi" value="<?php echo $views_backup_yosi->tgl_backup_yosi ?>">
    </div>
</div>
<div class="mb-3 row">
    <label for="id_user_yosi" class="col-sm-2 col-form-label">ID User</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="id_user_yosi" name="id_user_yosi" value="<?php echo $views_backup_yosi->id_user_yosi ?>">
    </div>
</div>
<input type="submit" value="Simpan">
</form>

@endsection