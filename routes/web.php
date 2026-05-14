<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return "Ini adalah halaman About"; 
});

Route::get('/user/{name}', function ($name) {
    return "Halo, $name!";
});


// --- 2 ROUTING TANPA PARAMETER ---

// 1. Halaman Beranda
Route::get('/', function () {
    return "Selamat Datang di Halaman Utama Praktikum 5";
});

// 2. Halaman Kontak
Route::get('/kontak', function () {
    return "Ini adalah halaman kontak. Hubungi kami di lab@uad.ac.id";
});


// --- 3 ROUTING DENGAN PARAMETER ---

// 3. Routing Profil Pengguna (Parameter {username})
Route::get('/profil/{username}', function ($username) {
    return "Halo! Anda sedang melihat profil dari: " . $username;
});

// 4. Routing Artikel/Berita (Parameter {id})
Route::get('/berita/{id}', function ($id) {
    return "Menampilkan detail berita dengan ID nomor: " . $id;
});

// 5. Routing Pencarian (Parameter {keyword})
Route::get('/cari/{keyword}', function ($keyword) {
    return "Hasil pencarian untuk kata kunci: " . $keyword;
});