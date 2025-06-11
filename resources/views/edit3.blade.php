@extends('template')

@section('content')
    <h3>Edit karyawan</h3>

    <a href="/karyawan" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    @foreach ($karyawan as $p)
        <form action="/karyawan/update" method="post" class="form-horizontal">
            @csrf
            <input type="hidden" name="id" value="{{ $p->kodepegawai }}">

            <div class="form-group">
                <label class="control-label col-sm-2" for="nama">Kode Pegawai</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" required="required" name="kodepegawai"
                        value="{{ $p->kodepegawai }}">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="jabatan">Nama Lengkap</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" required="required" name="namalengkap"
                        value="{{ $p->namalengkap }}">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="umur">Divisi</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" required="required" name="divisi"
                        value="{{ $p->divisi }}">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="alamat">Departemen</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" required="required" name="departemen"
                        value="{{ $p->departemen }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
                    <input type="submit" class="btn btn-success" value="Simpan Data">
                </div>
            </div>
        </form>
    @endforeach
@endsection
