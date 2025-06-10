@extends('template')

@section('content')
    <h3>Edit Data Plastik</h3>

    <a href="/plastik" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    @foreach ($plastik as $p)
        <form action="/plastik/update" method="post" class="form-horizontal">
            @csrf
            <input type="hidden" name="id" value="{{ $p->ID }}">

            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="merkplastik">
                    Merk Plastik
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="merkplastik" name="merk" required="required"
                        value="{{ $p->merkplastik }}">
                </div>
            </div>

            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="hargaplastik">
                    Harga
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="number" id="hargaplastik" name="harga" required="required"
                        value="{{ $p->hargaplastik }}">
                </div>
            </div>

            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="tersedia">
                    Tersedia
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="number" id="tersedia" name="tersedia" required="required"
                        value="{{ $p->tersedia }}" placeholder="Masukkan angka 1 atau 0">
                </div>
            </div>

            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="berat">
                    Berat (kg)
                </label>
                <div class="col-sm-6">
                    {{-- step="any" digunakan untuk mengizinkan angka desimal/float --}}
                    <input class="form-control" type="number" step="any" id="berat" name="berat"
                        required="required" value="{{ $p->berat }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-6">
                    <input type="submit" value="Simpan Data" class="btn btn-success">
                </div>
            </div>
        </form>
    @endforeach
@endsection
