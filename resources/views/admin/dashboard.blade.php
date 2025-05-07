{{-- resources/views/admin/dashboard.blade.php --}}
@extends('admin.layout')

@section('title', 'Dashboard Penjual')

@section('judul_halaman', 'Dashboard Penjual')

@section('konten')
  <h1 class="text-2xl font-bold text-yellow-300 mb-6">Selamat datang, Admin!</h1>

  <!-- Statistik Cards -->
  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 mb-8">
    <!-- Card 1 -->
    <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:bg-gray-700 transition-all">
      <h3 class="text-yellow-400 text-2xl font-semibold">Produk Anda</h3>
      <div class="mt-4 text-white">
        <p class="text-lg">Kategori Produk: <span class="text-yellow-300">4</span></p>
        <p class="text-lg">Jumlah Produk: <span class="text-yellow-300">30</span></p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:bg-gray-700 transition-all">
      <h3 class="text-yellow-400 text-2xl font-semibold">Pesanan Terbaru</h3>
      <div class="mt-4 text-white">
        <p class="text-lg">Pesanan Terbaru: <span class="text-yellow-300">2</span></p>
        <p class="text-lg">Total Pesanan: <span class="text-yellow-300">50</span></p>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:bg-gray-700 transition-all">
      <h3 class="text-yellow-400 text-2xl font-semibold">Pendapatan</h3>
      <div class="mt-4 text-white">
        <p class="text-lg">Hari Ini: <span class="text-yellow-300">Rp100.000.000</span></p>
        <p class="text-lg">Bulan Ini: <span class="text-yellow-300">Rp300.000.000</span></p>
      </div>
    </div>
  </div>

  <!-- Tabel Pesanan -->
  <h3 class="text-2xl font-semibold text-yellow-400 mb-4">Pesanan Terbaru</h3>
  <div class="overflow-x-auto bg-gray-800 rounded-lg shadow">
    <table class="min-w-full text-sm text-left border border-gray-700">
      <thead class="bg-yellow-500 text-gray-900">
        <tr>
          <th class="px-4 py-2 border border-gray-700">ID Pesanan</th>
          <th class="px-4 py-2 border border-gray-700">Produk</th>
          <th class="px-4 py-2 border border-gray-700">Jumlah</th>
          <th class="px-4 py-2 border border-gray-700">Status</th>
          <th class="px-4 py-2 border border-gray-700">Total</th>
          <th class="px-4 py-2 border border-gray-700">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @for($i = 1; $i <= 3; $i++)
        <tr class="hover:bg-gray-700 text-white">
          <td class="px-4 py-2 border border-gray-700">{{ $i }}</td>
          <td class="px-4 py-2 border border-gray-700">Produk {{ $i }}</td>
          <td class="px-4 py-2 border border-gray-700">2</td>
          <td class="px-4 py-2 border border-gray-700">Dikirim</td>
          <td class="px-4 py-2 border border-gray-700">Rp200.000</td>
          <td class="px-4 py-2 border border-gray-700 text-blue-400 hover:underline">
            <a href="/admin/konfirmasi_pembayaran">Detail</a>
          </td>
        </tr>
        @endfor
      </tbody>
    </table>
  </div>
@endsection
