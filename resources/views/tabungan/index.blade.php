@extends ('layouts.app')
@section('content')
<div class="container"> 

    <h2 style="text-align: center; font-family: serif">DATA TABUNGAN</h2>
    <a href="{{ url('/tabungan/create') }}"><button class="mb-3" style="background-color: #adb5bd">Tambah Tabungan</button></a>

    <table class=" table table-bordered" style="box-shadow: 12px 12px 5px #198754; border: solid 2px black">
        <tr style="text-align : center; border: solid 2px black ">
            <td>NO</td>
            <td>SISWA</td>
            <td>KELAS</td>
            <td>WAKTU</td>
            <td>JUMLAH</td>
            <td>PENERIMA</td>
            <td>EDIT</td>
            <td>DELETE</td>
        </tr>
        @foreach ($rows as $row)
            <tr style="text-align : center; border: solid 2px black ">
                <td>{{ $row->tab_id }}</td>
                <td>{{ $row->tab_id_siswa }}</td>
                <td>{{ $row->tab_kelas }}</td>
                <td>{{ $row->tab_waktu }}</td>
                <td>{{ $row->tab_jumlah }}</td>
                <td>{{ $row->tab_penerima }}</td>
                <td><a href="{{ url('tabungan/' . $row->tab_id . '/edit') }}"><button style="background-color: #f7ff1a">Edit</button></a></td>
                <td>
                    <form action="{{ url('tabungan/' . $row->tab_id) }}" method="POST">
                        @method('DELETE')
                        @csrf 
                        <button onclick="return confirm('Apakah anda yakin?')"style="background-color: #e50b20">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    </div>
@endsection