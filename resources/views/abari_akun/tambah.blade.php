<h1>Tambah Data Akun</h1>
<form action="{{ asset('abari_akun/tambah_proses') }}" method="POST">
@csrf
ID Perkiraan <input type="text" name="id"><br>
Nomor Perkiraan <input type="text" name="NomorPerkiraan"><br>
Nama Perkiraan <input type="text" name="NamaPerkiraan"><br>
Tipe <input type="text" name="tipe"><br>
Induk <input type="text" name="induk"><br>
Level <input type="text" name="level"><br>
Kelompok <input type="text" name="Kelompok"><br>
<input type="submit" value="Simpan">
</form>     