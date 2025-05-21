<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Coba extends Controller
{
    //
    public function helloworld(){
        return view('blog');

    }
    public function index(){
        $nama = "Diki Alfarabi Hadi";
        $umur = 35;
        $alamat = "Surabaya";
        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
        return view('biodata ',['nama' => $nama, 'umur' => $umur, 'alamat' => $alamat, 'matkul' => $pelajaran]);
    }
}
