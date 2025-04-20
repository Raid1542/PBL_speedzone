<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

# Route Login #
Route::get('/login', [AuthController::class, 'showLoginForm'])
->name('login');
Route::post('/login', [AuthController::class, 'login']);

# Route Register #
Route::get('/register', [AuthController::class, 'showRegisterForm'])
->name('register');
Route::post('/register', [AuthController::class, 'register']);

# Route Ubah Kata Sandi #
Route::get('/reset-password', [AuthController::class, 'showResetPasswordForm'])
->name('password.reset');
Route::post('/reset-password', [AuthController::class, 'updatePassword'])->name('password.update');