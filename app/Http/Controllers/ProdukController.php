<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        // sementara halaman produk masih statis
        return view('produk');
    }

    public function tambahProduk()
    {
        // kirim array jenis produk ke view
        $jenisProduk = ['Alat Tulis', 'Elektronik', 'Sembako'];

        // kirim ke view menggunakan compact
        return view('TambahProduk', compact('jenisProduk'));
    }

    public function store(Request $request)
    {
        // validasi sederhana
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'jenis_produk' => 'required',
        ]);

        // Simulasi simpan ke database
        // Produk::create($request->all());

        return redirect()->route('produk')->with('success', 'Produk berhasil ditambahkan!');
    }
}
