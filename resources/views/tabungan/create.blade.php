@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>TAMBAH DATA TABUNGAN</h3>
        <form action="{{ url('/tabungan')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="">SISWA</label>
                <select name="tab_id_siswa" id="tab_id_siswa">
                    @foreach ($rows['data_siswa'] as $row)
                    <option value="{{ $row->siswa_id }}">{{ $row->siswa_nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="">KELAS</label>
                <input type="text" name="tab_kelas" class="form-control" placeholder="Kelas">
            </div>
            <div class="mb-3">
                <label for="">WAKTU</label>
                <input type="date" name="tab_waktu" class="form-control" placeholder="Waktu">
            </div>
            <div class="mb-3">
                <label for="">JUMLAH</label>
                <input type="text" name="tab_jumlah" class="form-control" placeholder="Jumlah">
            </div>
            <div class="mb-3">
                <label for="">PENERIMA</label>
                <input type="text" name="tab_penerima" class="form-control" placeholder="Penerima">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
            </div>

        </form>
    </div>
@endsection