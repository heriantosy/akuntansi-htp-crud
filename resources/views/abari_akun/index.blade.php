@extends('abari_layout.abari_main')
@section('content')

<h3>Modul Perkiraan</h3>
<div class="card">
<div class="card-header">
<button type="button" class="btn btn-sm btn-success" onclick="window.location='{{ url('abari_akun/tambah') }}'">
        <i class="fas fa-plus-circle"></i> Add
</button>
</div>
<div class="card-body">
  @if (session('msg')) 
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Berhasil</strong> {{ session('msg') }}
      <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  <table class="table table-sm table-stripped table-bordered">
    <thead>
        <tr>
            <th>No</th>
    <th>ID Perkiraan</th>
    <th>Nomor Perkiraan</th>
    <th>Nama Perkiraan</th>
    <th>Tipe</th>
    <th>Induk</th>
    <th>Level</th>
    <th>Kelompok</th>
    <th>Aksi</th>           
        </tr>
    </thead>

    <tbody>
        @foreach($akun as $row)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $row->PerkiraanID }}</td>
            <td>{{ $row->NomorPerkiraan }}</td>
            <td>{{ $row->NamaPerkiraan }}</td>
            <td>{{ $row->tipe }}</td>
            <td>{{ $row->induk }}</td>
            <td>{{ $row->level }}</td>
            <td>{{ $row->Kelompok }}</td>
            <td>
              <button onclick="window.location='{{ url('abari_akun/edit/'.$row->PerkiraanID) }}'" type="button" class="btn btn-sm btn-warning" title="Edit Data">
                <i class="fas fa-edit"></i>
              </button>

                <button onClick="window.location='{{ url('abari_akun/delete/'.$row->PerkiraanID) }}'" type="button"  title="Hapus Data" class="btn btn-danger btn-sm">
                <i class="fas fa-trash-alt"></i>
                </button>
               
              </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
</div>

<!--
<script>
  function deleteData(name){
    pesan = confirm('Yakin data dengan nama ${name} ini dihapus?');
    if(pesan) return true;
    else return false;
  }
</script>
-->
@endsection