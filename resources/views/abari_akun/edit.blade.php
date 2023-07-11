<h1>Tambah Data Akun</h1>
<form action="{{ asset('abari_akun/edit_proses') }}" method="POST">
@csrf
<input type="hidden" name="PerkiraanID" value="<?php echo $akun->PerkiraanID ?>">
Nomor Akun <input type="text" name="NomorPerkiraan" value="<?php echo $akun->NomorPerkiraan ?>"><br>
Nama Perkiraan <input type="text" name="nama_perkiraan" value="<?php echo $akun->nama_perkiraan ?>"><br>
Kelompok <input type="text" name="kelompok" value="<?php echo $akun->kelompok ?>"><br>
<input type="submit" value="Simpan">
</form>     