@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Edit Data Users</h3>
        <form action="{{ url('/users/'.$row->user_id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label>JABATAN</label>
                <input type="text" class="form-control"name="user_jabatan" value="{{ $row->user_jabatan }}"></>
            </div>
            <div class="mb-3">
                <label>NAMA</label>
                <input type="text" class="form-control"name="user_nama" value="{{ $row->user_nama }}"></>
            </div>
            <div class="mb-3">
                <label>ALAMAT</label>
                <input type="text" class="form-control"name="user_alamat" value="{{ $row->user_alamat }}"></>
            </div>
            <div class="mb-3">
                <input type="submit" value="UPDATE" class="btn btn-primary">
            </div>
        </form>
    </div>

    @endsection
