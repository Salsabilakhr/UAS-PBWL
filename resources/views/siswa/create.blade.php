@extends ('layouts.app')

@section('content')

<h2>Tambah Data Siswa</h2>

<form action="{{ url('/siswa') }}" method="POST">
    @csrf 
    <div class="mb-4">
        <label>NIS</label>
        <input type="text" name="siswa_nis" class="form-control">
    </div>
    <div class="mb-4">
        <label>NAMA</label>
        <input type="text" name="siswa_nama" class="form-control">
    </div>
    <div class="mb-4">
        <label>KELAS</label>
        <input type="text" name="siswa_kelas" class="form-control">
    </div>
    <div class="mb-4">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
</form>

@endsection