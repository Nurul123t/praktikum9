<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/salam', function () {
    return "Hai, Saya Nurhasanah siap belajar Laravel 11";
});
Route::get('/profil', function () {
    return view('profil');
});

// routes/web.php
Route::get('/about', function () {
    $data = [
        'nama' => 'Nurhasanah',
        'nim' => '0110223234',
        'program_studi' => 'Teknik Informatika',
        'tahun_angkatan' => '2023'
    ];
    return view('dashboard.about', $data);
});