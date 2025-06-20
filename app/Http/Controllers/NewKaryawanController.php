<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewKaryawanController extends Controller
{
    public function index()
    {

        $newkaryawan = DB::table('newkaryawan')->get();

    	// mengirim data karyawan ke view index
        return view('newkaryawanindex',['newkaryawan' => $newkaryawan]);


    }

    public function tambah()
    {
    	// memanggil view tambah
        return view('newtambah');
    }

    public function store(Request $request)
    {
    // validasi input
    $validated = $request->validate([
        'NIP' => 'required|unique:newkaryawan,NIP',
        'nama' => 'required|max:50',
        'pangkat' => 'required|max:30',
        'gaji' => 'required|numeric'
    ]);

    // insert data ke table karyawan
    DB::table('newkaryawan')->insert($validated);

    // alihkan halaman ke halaman karyawan
    return redirect('/newkaryawan');

    }

    // update data karyawan
    public function update(Request $request)
    {
	    // update data karyawan
        DB::table('karyawan')->where('NIP',$request->id)->update([
            'NIP' => $request->NIP,
            'nama' => $request->nama,
            'pangkat' => $request->pangkat,
            'gaji' => $request->gaji
        ]);
	    // alihkan halaman ke halaman karyawan
        return redirect('/newkaryawan');
    }

    // method untuk hapus data karyawan
    public function hapus($id)
    {
	    // menghapus data karyawan berdasarkan id yang dipilih
        DB::table('newkaryawan')->where('NIP',$id)->delete();

	    // alihkan halaman ke halaman karyawan
        return redirect('/newkaryawan');
    }

}
