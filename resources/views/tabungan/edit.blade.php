@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>EDIT DATA TABUNGAN</h3>
        <form action="{{ url('/tabungan/' .$row->tab_id)}}" method="post">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="">KELAS</label>
                <input type="text" name="tab_kelas" class="form-control" value="{{$row->tab_kelas}}">
            </div>
            <div class="mb-3">
                <label for="">WAKTU</label>
                <input type="date" name="tab_waktu" class="form-control" value="{{$row->tab_waktu}}">
            </div>
            <div class="mb-3">
                <label for="">JUMLAH</label>
                <input type="text" name="tab_jumlah" class="form-control" value="{{$row->tab_jumlah}}">
            </div>
            <div class="mb-3">
                <label for="">PENERIMA</label>
                <input type="text" name="tab_penerima" class="form-control" value="{{$row->tab_penerima}}">
            </div>
            <div class="mb-3">
                <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
@endsection