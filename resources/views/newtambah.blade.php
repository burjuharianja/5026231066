@extends('template')

@section('content')
    <h3>Tambah Data Karyawan Baru</h3>

    <a href="/newkaryawan" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    <form action="/newkaryawan/store" method="post">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <div class="alert-title">
                    <h4>Whoops!</h4>
                </div>
                There are some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="NIP">NIP</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="NIP" placeholder="Masukkan NIP" name="NIP"
                    required="required" maxlength="9">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="nama">Nama</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="nama" placeholder="Masukkan Nama Lengkap" name="nama"
                    required="required" maxlength="50">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="pangkat">Pangkat</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="pangkat" placeholder="Masukkan Pangkat" name="pangkat"
                    required="required" maxlength="30">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="gaji">Gaji</label>
            <div class="col-sm-6">
                <input class="form-control" type="number" id="gaji" placeholder="Masukkan gaji" name="gaji"
                    required="required">
            </div>
        </div>

        <div class="form-group row">

            <div class="offset-sm-2 col-sm-6">
                <button type="submit" class="btn btn-success">Simpan Data</button>
            </div>
        </div>

    </form>
@endsection
