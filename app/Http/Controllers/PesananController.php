<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Pesanan;

class PesananController extends Controller
{
    public function index()
    {
// Contoh ambil semua pesanan
$pesanan = Pesanan::all(); // Pastikan model Pesanan ada

return view('pembeli.pesanan_saya', compact('pesanan'));
    }
}
