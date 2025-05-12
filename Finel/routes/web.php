<?php

use App\Http\Controllers\Latihan\MateriController;
use App\Http\Controllers\Latihan\MahasiswaController;
use App\Http\Controllers\Latihan\ProdiController;
use App\Http\Controllers\Latihan\DosenController;
use App\Http\Controllers\Latihan\FakultasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/berita{id}/{title?}', function ($id, $title = NULL) {
    return view('berita', data:['id' => $id, 'title' => $title]);
});

Route::get('/hasil{angka1}/{angka2}/{angka3?}', function ($angka1, $angka2, $angka3 = NULL) {
    return view('hasil', data:['angka1' => $angka1, 'angka2' => $angka2, 'angka3' => $angka3]);
});

Route::get('/fakultass', function () {
    // return view('fakultas.index', ["ilkom" => "Fakultas Ilmu Komputer dan Rekayasa"]);
    // return view('fakultas.index', ["fakultas" => ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ilmu Ekonomi"]]);
    // return view('fakultas.index') -> with ("fakultas", ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ilmu Ekonomi"]);
    $kampus = "Universitas Multi Data Palembang";
    // $fakultas = [];
    $fakultas = ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ilmu Ekonomi"];
    return view('fakultas.index', compact('fakultas', 'kampus'));
});


Route::resource('prodi', ProdiController::class);
Route::resource('materi', MateriController::class);
Route::resource('dosen', DosenController::class);
Route::resource('mhs', MahasiswaController::class);
Route::resource('fakultas', FakultasController::class);

Route::get('/master', function(){
    return view('LatihanLayout.master');
});