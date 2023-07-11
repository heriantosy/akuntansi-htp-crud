<h1>Tambah Data Akun</h1>
<form action="{{ asset('abari_akun/edit_proses') }}" method="POST">
@csrf
<input type="hidden" name="PerkiraanID" value="<?php echo $akun->PerkiraanID ?>">
Nomor Akun <input type="text" name="NomorPerkiraan" value="<?php echo $akun->NomorPerkiraan ?>"><br>
Nama Perkiraan <input type="text" name="NamaPerkiraan" value="<?php echo $akun->NamaPerkiraan ?>"><br>
Tipe <input type="text" name="tipe" value="<?php echo $akun->tipe ?>"><br>
Induk <input type="text" name="induk" value="<?php echo $akun->induk ?>"><br>
Level <input type="text" name="level" value="<?php echo $akun->level ?>"><br>
Kelompok <input type="text" name="Kelompok" value="<?php echo $akun->Kelompok ?>"><br>
<input type="submit" value="Simpan">
</form>     