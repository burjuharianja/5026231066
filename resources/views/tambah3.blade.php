@extends('template')

@section('content')
    <h3>Tambah Data Karyawan Baru</h3>

    <a href="/karyawan" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    {{-- Hapus class "form-horizontal" --}}
    <form action="/karyawan/store" method="post">
        @csrf

        {{-- Gunakan "form-group row" untuk setiap baris --}}
        <div class="form-group row">
            {{-- Gunakan "col-form-label" untuk label --}}
            <label class="col-sm-2 col-form-label" for="kodepegawai">Kode Pegawai</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="kodepegawai" placeholder="Masukkan Kode Pegawai (contoh: PG001)" name="kodepegawai" required="required" maxlength="5" pattern=".{5}" title="Kode harus 5 karakter">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="namalengkap">Nama Lengkap</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="namalengkap" placeholder="Masukkan Nama Lengkap" name="namalengkap" required="required" maxlength="50">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="divisi">Divisi</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="divisi" placeholder="Masukkan divisi (contoh: ITDEV)" name="divisi" required="required" maxlength="5">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="departemen">Departemen</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="departemen" placeholder="Masukkan nomor departemen" name="departemen" required="required">
            </div>
        </div>

        <div class="form-group row">
            {{-- Gunakan "offset-sm-2" untuk menggeser tombol --}}
            <div class="offset-sm-2 col-sm-6">
                <button type="submit" class="btn btn-success">Simpan Data</button>
            </div>
        </div>

    </form>
@endsection
