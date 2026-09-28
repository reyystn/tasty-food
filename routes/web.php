<?php

use Illuminate\Support\Facades\Route;

// Route Halaman Utama (Home)
Route::get('/', function () {
    return view('home');
})->name('home');

// Route Halaman Tentang Kami
Route::get('/tentang', function () {
    return view('about');
})->name('about');

// Route Halaman Berita Kami
Route::get('/berita', function () {
    return view('news');
})->name('news');

Route::get('/galeri', function () {
    return view('gallery');
})->name('gallery');


Route::get('/kontak', function () {
    return view('contact');
})->name('contact');
