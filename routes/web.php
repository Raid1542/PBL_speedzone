<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PesananController;


# ----------------------------HALAMAN UMUM-------------------------------------------- #


Route::view('/', 'welcome');


# ----------------------------AUTENTIKASI-------------------------------------------- #

Route::controller(AuthController::class)->group(function () {
    // Login
    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/login', 'login');

    // Register
    Route::get('/register', 'showRegisterForm')->name('register');
    Route::post('/register', 'register');

    // Reset Password
    Route::get('/reset_password', 'showResetPasswordForm')->name('password.reset');
    Route::post('/reset_password', 'updatePassword')->name('password.update');
});

# ----------------------------PEMBELI-------------------------------------------- #

Route::prefix('pembeli')->group(function () {
    Route::view('/dashboard', 'dashboard')->name('pembeli.dashboard');
    Route::view('/keranjang', 'keranjang')->name('keranjang');
    Route::view('/pembelian', 'pembelian')->name('pembelian');
    Route::view('/edit_profil', 'edit_profil')->name('edit_profil');
    Route::view('/profil', 'profil')->name('profil');
    Route::view('/status_pesanan', 'status_pesanan')->name('status_pesanan');
    Route::view('/resi', 'resi')->name('resi');
    Route::get('/pesanan_saya', [PesananController::class, 'index'])->name('pesanan_saya');
    Route::view('/tentang_kami', 'tentang_kami');
    Route::view('/produk', 'produk');
    Route::view('/deskripsi', 'deskripsi');
    Route::view('/pembayaran', 'pembayaran');
    Route::view('/terimakasih', 'terimakasih');
});

# ----------------------------ADMIN-------------------------------------------- #

Route::prefix('admin')->group(function () {
    Route::view('/dashboard', 'admin.dashboard')->name('admin.dashboard');
    Route::view('/riwayat-transaksi', 'admin.riwayat-transaksi')->name('admin.riwayat-transaksi');
    Route::view('/produk', 'admin.produk')->name('admin.produk.index');
    Route::view('/produk/create', 'admin.produk.create')->name('admin.produk.create');
    Route::view('/rekap-penjualan', 'admin.rekap-penjualan')->name('admin.rekap-penjualan');
    Route::view('/konfirmasi_pembayaran', 'admin.konfirmasi_pembayaran')->name('admin.konfirmasi_pembayaran');
    Route::view('/profil_admin', 'admin.profil_admin')->name('admin.profil_admin');
});



