@extends('template')

@section('content')

    </style>
    <h3>Data karyawan</h3>
	<br/>
    <a href="/newkaryawan/tambah" class="btn btn-primary"> + Tambah karyawan Baru</a>

    <br />
    <br />

    <table class="table table-striped">
    <tr>
        <th>NIP</th>
        <th>Nama</th>
        <th>Pangkat</th>
        <th>Gaji</th>

    </tr>
    @foreach ($newkaryawan as $p)
        <tr>
            <td>{{ $p->NIP }}</td>
            <td>{{$p->nama }}</td>
            <td>{{$p->pangkat }}</td>
            <td>{{ number_format($p->gaji, 0, ',', '.') }}</td>
            <td>
                <a href="/newkaryawan/hapus/{{ $p->NIP }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    @endforeach
    </table>

    <br>
@endsection
