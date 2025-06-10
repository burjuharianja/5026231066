@extends('template')

@section('content')

    </style>
    <h3>Data plastik</h3>
    <a href="/plastik/tambah" class="btn btn-primary"> + Tambah plastik Baru</a>
    <br/>
    <br/>

    <p>Cari Data plastik :</p>
	<form action="/plastik/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari plastik .." >
		<input type="submit" value="CARI" class="btn btn-info">
	</form>

	<br/>


    <br />
    <br />

    <table class="table table-striped">
        <tr>
            <th>merk</th>
            <th>harga</th>
            <th>Tersedia</th>
            <th>Berat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($plastik as $p)
            <tr>
                <td>{{ $p->merkplastik }}</td>
                <td>{{ $p->hargaplastik }}</td>
                <td>{{ $p->tersedia }}</td>
                <td>{{ $p->berat }}</td>
                <td>
                    <a href="/plastik/edit/{{ $p->ID }}" class="btn btn-success">Edit</a>
                    <a href="/plastik/hapus/{{ $p->ID }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $plastik->links() }}
@endsection
