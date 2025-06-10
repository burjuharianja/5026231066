<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TugasCRUD extends Controller
{
    public function index()
    {
    	// mengambil data dari table plastik
        // $plastik = DB::table('plastik')->get();
        // pagination
        $plastik = DB::table('plastik')->paginate(10);

    	// mengirim data plastik ke view index2
        return view('index2',['plastik' => $plastik]);


    }

    public function tambah()
    {
    	// memanggil view tambah
        return view('tambah2');
    }

    public function store(Request $request)
    {
	    // insert data ke table plastik
        DB::table('plastik')->insert([
            'merkplastik' => $request->merkplastik,
            'hargaplastik' => $request->hargaplastik,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
	]);
	// alihkan halaman ke halaman plastik
	return redirect('/plastik');

    }


    // method untuk edit data plastik
    public function edit($id)
    {
	// mengambil data plastik berdasarkan id yang dipilih
	$plastik = DB::table('plastik')
                ->where('ID',$id)
                ->get();
	// passing data plastik yang didapat ke view edit2.blade.php
	return view('edit2',['plastik' => $plastik]);
    }


    // update data plastik
    public function update(Request $request)
    {
	    // update data plastik
        DB::table('plastik')->where('ID',$request->id)->update([
            'merkplastik' => $request->merk,
            'hargaplastik' => $request->harga,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
	    // alihkan halaman ke halaman plastik
        return redirect('/plastik');
    }

    // method untuk hapus data plastik
    public function hapus($id)
    {
	    // menghapus data plastik berdasarkan id yang dipilih
        DB::table('plastik')->where('ID',$id)->delete();

	    // alihkan halaman ke halaman plastik
        return redirect('/plastik');
    }

    // method untuk mencari data plastik
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table plastik sesuai pencarian data
		$plastik = DB::table('plastik')
		->where('merkplastik','like',"%".$cari."%")
		->paginate();

    		// mengirim data plastik ke view index2
		return view('index2',['plastik' => $plastik]);

	}
}
