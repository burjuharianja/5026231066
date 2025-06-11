@extends('template')

@section('content')

    </style>
    <h3>Data karyawan</h3>

    <br/>
    <br/>

    <p>Cari Data karyawan :</p>
	<form action="/karyawan/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari karyawan .." >
		<input type="submit" value="CARI" class="btn btn-info">
	</form>

	<br/>


    <br />
    <br />

    <table class="table table-striped">
    <tr>
        <th>Kode Pegawai</th>
        <th>Nama Lengkap</th>
        <th>Divisi</th>
        <th>Departemen</th>
        <th>Opsi</th>
    </tr>
    @foreach ($karyawan as $p)
        <tr>
            <td>{{ $p->kodepegawai }}</td>
            {{-- Mengubah nama menjadi huruf kapital semua --}}
            <td>{{ Str::upper($p->namalengkap) }}</td>
            <td>{{ $p->divisi }}</td>
            {{-- Mengubah departemen menjadi huruf kecil semua --}}
            <td>{{ Str::lower($p->departemen) }}</td>
            <td>
                <a href="/karyawan/edit/{{ $p->kodepegawai }}" class="btn btn-success">Edit</a>
                <a href="/karyawan/hapus/{{ $p->kodepegawai }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    @endforeach
    </table>

    <a href="/karyawan/tambah" class="btn btn-primary"> + Tambah karyawan Baru</a>
    {{ $karyawan->links() }}
@endsection
