@extends('template')

@section('content')
    <h3>Edit Pegawai</h3>

    <a href="/pegawai" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="post" class="form-horizontal">
            @csrf
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}">

            <div class="form-group">
                <label class="control-label col-sm-2" for="nama">Nama</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" required="required" name="nama"
                        value="{{ $p->pegawai_nama }}">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="jabatan">Jabatan</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" required="required" name="jabatan"
                        value="{{ $p->pegawai_jabatan }}">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="umur">Umur</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" required="required" name="umur"
                        value="{{ $p->pegawai_umur }}">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="alamat">Alamat</label>
                <div class="col-sm-8">
                    <textarea required="required" class="form-control" name="alamat">{{ $p->pegawai_alamat }}</textarea>
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
