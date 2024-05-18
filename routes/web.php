<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Marchel Adias']);
});

// Buat 2 rute baru
// 1. /blog
// 2 buah artikel, judul dan list
Route::get('/blog', function () {
    return view('blog');
});

// 2. /contact
// email / social media
Route::get('/contact', function () {
    return view('contact', ['nama'=> 'Marchel']);
});