<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = [
            [
                'nama' => 'Yamaha R15 V4',
                'harga' => 'Rp 40.000.000',
                'gambar' => 'images/Yamaha.jpg',
            ],
            [
                'nama' => 'Ducati Panigale',
                'harga' => 'Rp 38.500.000',
                'gambar' => 'images/Ducati.jpg',
            ],
            [
                'nama' => 'Honda CBR',
                'harga' => 'Rp 62.000.000',
                'gambar' => 'images/Honda1.jpg',
            ],
        ];

        return view('.peges.pembeli.produk', compact('produk'));
    }
}
