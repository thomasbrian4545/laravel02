<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Menampilkan Data
Route::get('/mahasiswa', function () {
    $nama = "Thomas Brian";
    $nilai = 75;
    $buah = ["Apel", "Melon", "Mangga", "Nanas"];
    $nomor = [55, 30, 77, 95];
    return view('mahasiswa', compact('nama', 'nilai', 'buah', 'nomor'));
});

// Merancang Layout
Route::get('/pegawai', function () {
    $arrPegawai = ["Thomas Brian", "Andik Kurniawan", "Melani Ayu", "Widya Waspada"];
    return view('pegawai')->with('pegawai', $arrPegawai);
})->name('pegawai');

Route::get('/direksi', function () {
    $arrDireksi = ["Untung Heri Sukariyanto", "Sugeng", "Abdullah Badrudin", "Topan"];
    return view('direksi')->with('direksi', $arrDireksi);
})->name('direksi');

Route::get('/universitas/fmipa/fisika/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/admin', function () {
    return view('admin');
});
