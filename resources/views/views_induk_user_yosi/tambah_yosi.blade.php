@extends('layout1.main2')
@section('content')


<h4><b>Tambah Data Transaksi</b></h4>
<br>
<form action="{{ asset('views_induk_user_yosi/tambah_proses_yosi') }}" method="POST">
@csrf
<div class="mb-3 row">
    <label for="id_user" class="col-sm-2 col-form-label">Id User</label>
    <div class="col-sm-10">
    <input type="integer" class="form-control" id="id_user" name="id_user" >
    </div>
</div>
<div class="mb-3 row">
    <label for="username" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="username" name="username">
    </div>
</div>
<div class="mb-3 row">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="password" name="password" >
    </div>
</div>
<div class="mb-3 row">
    <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
    </div>
</div>
<div class="mb-3 row">
    <label for="asal_kantor" class="col-sm-2 col-form-label">Asal Kantor</label>
    <div class="col-sm-10">
    <select class="form-select" id="asal_kantor" name="asal_kantor" >
    <option selected>Pilih Asal Kantor</option>
    <option value="1">BKCU</option>
    <option value="2">CU</option>  
</select> 
</div>
</div>
<div class="mb-3 row">
    <label for="kode_cu" class="col-sm-2 col-form-label">Kode CU</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="kode_cu" name="kode_cu" >
    </div>
</div>
<div class="mb-3 row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="email" name="email">
    </div>
</div>
<div class="mb-3 row">
    <label for="leveluser" class="col-sm-2 col-form-label">Level User</label>
    <div class="col-sm-10">
    <select class="form-select" id="leveluser" name="leveluser" >
    <option selected>Pilih Level User</option>
    <option value="1">Admin</option>
    <option value="2">Supervisor</option> 
    <option value="3">User</option> 
</select>    
</div>
</div>
<div class="mb-3 row">
    <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
    <div class="col-sm-10">
    <select class="form-select" id="divisi" name="divisi" >
    <option selected>Pilih Divisi</option>
    <option value="1">Kasir</option>
    <option value="2">Credit</option>
    <option value="3">Operasional</option>
    <option value="4">Akuntansi</option>  
</select>    
</div>
</div>
<div class="mb-3 row">
    <label for="publish" class="col-sm-2 col-form-label">Publish</label>
    <div class="col-sm-10">
    <select class="form-select" id="publish" name="publish">
    <option selected>Pilih Publish</option>
    <option value="1">Yes</option>
    <option value="2">No</option>  
</select>    
</div>
</div>
<div class="mb-3 row">
    <label for="tgldaftar" class="col-sm-2 col-form-label">Tanggal Daftar</label>
    <div class="col-sm-10">
    <input type="date" class="form-control" id="tgldaftar" name="tgldaftar" >
    </div>
</div>
<div class="mb-3 row">
    <label for="tgllogin" class="col-sm-2 col-form-label">Tanggal Login</label>
    <div class="col-sm-10">
    <input type="date" class="form-control" id="tgllogin" name="tgllogin" >
    </div>
</div>
<div class="mb-3 row">
    <label for="statuslogin" class="col-sm-2 col-form-label">Status Login</label>
    <div class="col-sm-10">
    <select class="form-select" id="statuslogin" name="statuslogin" >
    <option selected>Pilih Status Login</option>
    <option value="1">Online</option>
    <option value="2">Offline</option>  
</select>    
</div>
</div>
<input type="submit" value="Simpan">
</form> 

@endsection