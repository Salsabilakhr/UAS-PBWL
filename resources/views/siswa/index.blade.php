@extends ('layouts.app')

@section('content')
<div class="container"> 

    <h2 style="text-align: center; font-family: serif">DATA SISWA</h2>
    
    <a href="{{ url('/siswa/create') }}"><button class="mb-3" style="background-color: #adb5bd">Tambah Siswa</button></a>
    <table class=" table table-bordered" style="box-shadow: 12px 12px 5px #198754; border: solid 2px black">
        <tr style="text-align : center; border: solid 2px black ">
            <th>NO</th>
            <th>NIS</th>
            <th>NAMA</th>
            <th>KELAS</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach ($rows as $row)
            <tr style="text-align : center; border: solid 2px black">
                <td>{{ $row->siswa_id }}</td>
                <td>{{ $row->siswa_nis }}</td>
                <td>{{ $row->siswa_nama }}</td>
                <td>{{ $row->siswa_kelas }}</td>
                <td><a href="{{ url('siswa/' . $row->siswa_id . '/edit') }}"><button style="background-color: #f7ff1a">Edit</button></a></td>
                <td>
                    <form action="{{ url('siswa/' . $row->siswa_id) }}" method="POST">
                        @method('DELETE')
                        @csrf 
                        <button onclick="return confirm('Apakah anda yakin?')" style="background-color: #e50b20">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    </div>
@endsection