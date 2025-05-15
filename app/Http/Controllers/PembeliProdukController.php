<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembeliProdukController extends Controller
{
    public function index()
    {
        $produk = [
            ['nama' => 'Yamaha R15 V4', 'harga' => 40000000, 'gambar' => 'Yamaha.jpg'],
            ['nama' => 'Ducati Sport', 'harga' => 38500000, 'gambar' => 'Ducati.jpg'],
            ['nama' => 'Honda Racing', 'harga' => 62000000, 'gambar' => 'Honda.jpg'],
            ['nama' => 'Kawasaki Ninja ZX-6R', 'harga' => 120000000, 'gambar' => 'Kawasaki.jpg'],
            ['nama' => 'Suzuki GSX-R1000', 'harga' => 50000000, 'gambar' => 'Suzuki.jpg'],
            ['nama' => 'Honda CBR1000RR', 'harga' => 95000000, 'gambar' => 'HondaCBR.jpg'],
        ];

        return view('pages.pembeli.produk', compact('produk'));
    }
}
