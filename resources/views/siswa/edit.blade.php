@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Edit Data Siswa</h3>
        <form action="{{ url('/siswa/'.$row->siswa_id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label>NIS</label>
                <input type="text" class="form-control"name="siswa_nis" value="{{ $row->siswa_nis }}"></>
            </div>
            <div class="mb-3">
                <label>NAMA</label>
                <input type="text" class="form-control"name="siswa_nama" value="{{ $row->siswa_nama }}"></>
            </div>
            <div class="mb-3">
                <label>KELAS</label>
                <input type="text" class="form-control"name="siswa_kelas" value="{{ $row->siswa_kelas }}"></>
            </div>
            <div class="mb-3">
                <input type="submit" value="UPDATE" class="btn btn-primary">
            </div>
        </form>
    </div>

    @endsection
