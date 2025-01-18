<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\KeluhanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\WebAspirasiController;
use App\Http\Controllers\WebBerandaController;
use App\Http\Controllers\WebArtikelController;
use App\Http\Controllers\WebGaleriController;
use App\Http\Controllers\WebAcaraController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[WebBerandaController::class,'index']);

Route::get('visi', function () {
    return view('visi');
});
Route::get('struktur', function () {
    return view('struktur');
});
Route::get('sejarah', function () {
    return view('sejarah');
});
Route::get('acara',[WebAcaraController::class,'index'])->name('acara');
Route::post('acara/{judul}', [WebAcaraController::class, 'register'])->name('acara.register');

Route::get('galeri',[WebGaleriController::class,'index']);

Route::get('kontak', function () {
    return view('kontak');
});

Route::get('aspirasi',[WebAspirasiController::class,'index']);
Route::post('aspirasi',[WebAspirasiController::class,'tambah'])->name('aspirasi.tambah');

Route::get('faq', function () {
    return view('faq');
});
Route::get('artikel',[WebArtikelController::class,'index']);
Route::get('artikel/{judul}', [WebArtikelController::class, 'detail'])->name('artikel.detail');
Route::get('artikel/{info?}', [WebArtikelController::class, 'filterByInfo'])->name('artikel.filterByInfo');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('d-keluhan', [KeluhanController::class, 'index']);
    Route::post('d-keluhan/tambah',[KeluhanController::class,'tambah']);
    Route::post('d-keluhan/hapus',[KeluhanController::class,'hapus']);
    Route::post('d-keluhan/edit',[KeluhanController::class,'edit']);
    Route::get('/chart', [KeluhanController::class, 'chart']);

    Route::get('d-aspirasi', [AspirasiController::class, 'index']);
    Route::post('d-aspirasi/hapus',[AspirasiController::class,'hapus']);
    Route::post('d-aspirasi/edit',[AspirasiController::class,'edit']);
    Route::get('/chart', [AspirasiController::class, 'chart']);

    //Web
    Route::get('d-judul', [WebBerandaController::class, 'judul']);
    Route::post('d-judul/tambah',[WebBerandaController::class,'judultambah']);
    Route::post('d-judul/hapus',[WebBerandaController::class,'judulhapus']);
    Route::post('d-judul/edit',[WebBerandaController::class,'juduledit']);

    Route::get('d-testimoni', [WebBerandaController::class, 'testimoni']);
    Route::post('d-testimoni/tambah',[WebBerandaController::class,'testimonitambah']);
    Route::post('d-testimoni/hapus',[WebBerandaController::class,'testimonihapus']);
    Route::post('d-testimoni/edit',[WebBerandaController::class,'testimoniedit']);

    Route::get('d-acara', [WebAcaraController::class, 'acara']);
    Route::post('d-acara/tambah',[WebAcaraController::class,'acaratambah']);
    Route::post('d-acara/hapus',[WebAcaraController::class,'acarahapus']);
    Route::post('d-acara/edit',[WebAcaraController::class,'acaraedit']);

    Route::get('d-artikel', [WebArtikelController::class, 'artikel']);
    Route::post('d-artikel/tambah',[WebArtikelController::class,'artikeltambah']);
    Route::post('d-artikel/hapus',[WebArtikelController::class,'artikelhapus']);
    Route::post('d-artikel/edit',[WebArtikelController::class,'artikeledit']);

    Route::get('d-galeri', [WebGaleriController::class, 'galeri']);
    Route::post('d-galeri/tambah',[WebGaleriController::class,'galeritambah']);
    Route::post('d-galeri/hapus',[WebGaleriController::class,'galerihapus']);
    Route::post('d-galeri/edit',[WebGaleriController::class,'galeriedit']);

    Route::get('d-kontak', [KontakController::class, 'index']);
    Route::post('d-kontak/tambah',[KontakController::class,'tambah']);
    Route::post('d-kontak/hapus',[KontakController::class,'hapus']);
    Route::post('d-kontak/edit',[KontakController::class,'edit']);
    Route::get('/chart', [KontakController::class, 'chart']);

});

require __DIR__.'/auth.php';
