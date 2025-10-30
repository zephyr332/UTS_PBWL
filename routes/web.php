<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/TambahProduk', function () {
    return view('TambahProduk');
});