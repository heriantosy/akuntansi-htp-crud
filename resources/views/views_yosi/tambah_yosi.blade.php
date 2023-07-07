<h1>Tambah Data Transaksi</h1>
<form action="{{ asset('views_yosi/tambah_proses_yosi') }}" method="POST">
@csrf
ID Transaksi <input type="integer" name="id_transaksi"><br>
Kode Jurnal <input type="text" name="kode_jurnal"><br>
Nomor Perkiraan <input type="text" name="nomor_perkiraan"><br>
Tanggal Transaksi <input type="text" name="tanggal_transaksi"><br>
Bulan Transaksi <input type="text" name="bulan_transaksi"><br>
Jenis Transaksi <input type="text" name="jenis_transaksi"><br>
<input type="submit" value="Simpan">
</form> 