<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;


Route::get('/', function () {
    return view('Home');
});

Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');

Route::get('/TambahProduk', [ProdukController::class, 'tambahProduk'])->name('produk.tambah');