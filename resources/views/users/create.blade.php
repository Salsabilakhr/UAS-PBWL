@extends ('layouts.app')

@section('content')

<h2>Tambah Data Users</h2>

<form action="{{ url('/users') }}" method="POST">
    @csrf 
    <div class="mb-4">
        <label>JABATAN</label>
        <input type="text" name="user_jabatan" class="form-control">
    </div>
    <div class="mb-4">
        <label>NAMA</label>
        <input type="text" name="user_nama" class="form-control">
    </div>
    <div class="mb-4">
        <label>ALAMAT</label>
        <input type="text" name="user_alamat" class="form-control">
    </div>
    <div class="mb-4">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
</form>

@endsection