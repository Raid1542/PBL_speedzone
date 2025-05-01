@extends('admin.layout')

@section('title', 'Dashboard - Statistik')

@section('konten')
    <h2 class="text-2xl font-bold text-yellow-700 mb-6">Statistik Umum</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <!-- Total Pengguna -->
        <div class="bg-white rounded-2xl p-6 shadow hover:shadow-lg transition-all">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-yellow-700 text-lg font-semibold">Total Pengguna</h3>
                    <p class="text-4xl font-bold text-yellow-600 mt-1">1,234</p>
                </div>
                <div class="text-yellow-400 text-5xl">👥</div>
            </div>
        </div>

        <!-- Total Produk -->
        <div class="bg-white rounded-2xl p-6 shadow hover:shadow-lg transition-all">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-yellow-700 text-lg font-semibold">Total Produk</h3>
                    <p class="text-4xl font-bold text-yellow-600 mt-1">87</p>
                </div>
                <div class="text-yellow-400 text-5xl">🏍</div>
            </div>
        </div>
    </div>
@endsection