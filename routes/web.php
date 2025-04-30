<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

# Route Login #
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

# Route Register #
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

# Route Ubah Kata Sandi #
Route::get('/reset_password', [AuthController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('/reset_password', [AuthController::class, 'updatePassword'])->name('password.update');

# Route Resi #
Route::get('/resi', function () {
    return view('resi');
});

# Route Keranjang #
Route::get('/keranjang', function () {
    return view('keranjang');
});

# Route Pembelian #
Route::get('/pembelian', function () {
    return view('pembelian');
});

# Route Dashboard #
Route::get('/dashboard', function () {
    return view('dashboard');
});

# Route Deskripsi #
Route::get('/deskripsi', function () {
    return view('deskripsi');
});

# Route Produk #
Route::get('/produk', function () {
    return view('produk');
});

# Route Edit Profil #
Route::get('/edit_profil', function () {
    return view('edit_profil');
});

# Route Profil #
Route::get('/profil', function () {
    return view('profil');
});

# Route Dashboard Admin #
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

# Route Admin Riwayat Transaksi #
Route::view('/admin/riwayat-transaksi', 'admin.riwayat-transaksi')->name('riwayat-transaksi');

# Route Admin CRUD #
Route::get('/admin/produk/create', function () {
    return view('admin..produk.create');
})->name('create');