<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TugasCRUD;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\TrafficController  ;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\NewKaryawanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//route bawaan
Route::get('/', function () {
    return view('welcome');
});

Route::get('/selamat', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
	return view('blog');
});


Route::get('/hello', [Coba::class, 'helloworld']);


//route untuk link tugas
Route::get('/bootstrap1', function () {
    return view('bootstrap1');
});

Route::get('/bootstrap2', function () {
    return view('bootstrap2');
});

Route::get('/buttons', function () {
    return view('buttons');
});

Route::get('/js1', function () {
    return view('js1');
});

Route::get('/js2', function () {
    return view('js2');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/link', function () {
    return view('link');
});

Route::get('/linktree', function () {
    return view('linktree');
});

Route::get('/pertama', function () {
    return view('pertama');
});

Route::get('/frontend', function () {
    return view('frontend');
});

//route Pegawai
Route::get('dosen', [Coba::class, 'index']);
// Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);  //halaman isian formulir
Route::post('/formulir/proses', [PegawaiController::class, 'proses']); //action untuk mengirim data formulir


// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// route untuk CRUD Pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update/', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

// form validasi
// route input
Route::get('/input', [PegawaiDBController::class, 'input']);
// route proses input
Route::post('/proses', [PegawaiDBController::class, 'proses']);

// route untuk CRUD plastik
Route::get('/plastik', [TugasCRUD::class, 'index']);
Route::get('/plastik/tambah', [TugasCRUD::class, 'tambah']);
Route::post('/plastik/store', [TugasCRUD::class, 'store']);
Route::get('/plastik/edit/{id}', [TugasCRUD::class, 'edit']);
Route::post('/plastik/update/', [TugasCRUD::class, 'update']);
Route::get('/plastik/hapus/{id}', [TugasCRUD::class, 'hapus']);
Route::get('/plastik/cari', [TugasCRUD::class, 'cari']);

//route untuk CRUD karyawan LATIHAN 3
Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);
Route::get('/karyawan/edit/{id}', [KaryawanController::class, 'edit']);
Route::post('/karyawan/update/', [KaryawanController::class, 'update']);
Route::get('/karyawan/hapus/{id}', [KaryawanController::class, 'hapus']);
Route::get('/karyawan/cari', [KaryawanController::class, 'cari']);

//route untuk LATIHAN 2
Route::get('/pagecounter', [TrafficController::class, 'index']);


//route untuk tugas 2: keranjang belanja
Route::get('/keranjangbelanja', [KeranjangBelanjaController::class,'index']);
Route::get('/keranjangbelanja/tambah', [KeranjangBelanjaController::class,'tambah']);
Route::post('/keranjangbelanja/store', [KeranjangBelanjaController::class,'store']);
Route::get('/keranjangbelanja/edit/{id}', [KeranjangBelanjaController::class,'edit']);
Route::post('/keranjangbelanja/update', [KeranjangBelanjaController::class,'update']);
Route::get('/keranjangbelanja/hapus/{id}', [KeranjangBelanjaController::class,'hapus']);

//route untuk EAS
Route::get('/newkaryawan', [NewKaryawanController::class,'index']);
Route::get('/newkaryawan/tambah', [NewKaryawanController::class,'tambah']);
Route::post('/newkaryawan/store', [NewKaryawanController::class,'store']);
Route::post('/newkaryawan/update', [NewKaryawanController::class,'update']);
Route::get('/newkaryawan/hapus/{id}', [NewKaryawanController::class,'hapus']);
?>
