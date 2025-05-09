@extends('layouts.app')

@section('content')
<section class="relative w-full h-[500px] bg-black">
  <img src="{{ asset('images/iklan.png') }}" class="w-full h-full object-cover opacity-80" alt="Banner Speedzone">
  <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white px-4">
    <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Temukan Motor Impian Anda</h1>
    <p class="text-lg md:text-xl mb-6 max-w-xl drop-shadow">Dapatkan motor sport terbaik dengan harga bersaing dan proses cepat hanya di SpeedZone.</p>
    <a href="{{ url('produk') }}" class="bg-yellow-400 text-gray-900 px-6 py-3 rounded-full font-semibold hover:bg-yellow-300 transition duration-300">Lihat Produk Sekarang</a>
  </div>
</section>

<h2 class="text-2xl font-bold text-center mb-8 text-yellow-400 mt-12">Rekomendasi Motor untuk Anda</h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-6">
  @php
    $motors = [
      ['image' => 'Yamaha.jpg', 'nama' => 'Yamaha R15 V4', 'harga' => 'Rp 40.000.000'],
      ['image' => 'Ducati.jpg', 'nama' => 'Ducati Panigale', 'harga' => 'Rp 38.500.000'],
      ['image' => 'Honda1.jpg', 'nama' => 'Honda CBR', 'harga' => 'Rp 62.000.000']
    ];
  @endphp
  @foreach ($motors as $motor)
    <div class="bg-white rounded-xl shadow-md overflow-hidden">
      <img src="{{ asset('images/' . $motor['image']) }}" alt="{{ $motor['nama'] }}" class="w-full h-48 object-contain">
      <div class="p-4">
        <h3 class="font-semibold text-xl text-blue-800">{{ $motor['nama'] }}</h3>
        <p class="text-yellow-600 mt-1">{{ $motor['harga'] }}</p>
        <a href="{{ url('deskripsi') }}" class="inline-block mt-3 bg-yellow-400 text-gray-900 px-4 py-2 rounded hover:bg-yellow-300">Lihat Detail</a>
      </div>
    </div>
  @endforeach
</div>

<div class="mt-10 max-w-5xl mx-auto px-4">
  <video controls autoplay muted loop class="w-full h-[400px] object-cover rounded-xl shadow-lg">
    <source src="{{ asset('videos/vidio.mp4') }}" type="video/mp4">
    Browser Anda tidak mendukung video ini.
  </video>
  <p class="text-center mt-3 text-yellow-300 text-sm">Preview Yamaha R15 V4 - Sunset Gloss</p>
</div>

<footer class="bg-gray-900 text-yellow-300 mt-12 pt-10 pb-6 px-6">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">
    <div>
      <div class="flex items-center gap-3 mb-4">
        <img src="{{ asset('images/LogoSpeedzone.jpg') }}" alt="Logo" class="h-12 w-12 rounded-full object-cover">
        <span class="text-2xl font-bold tracking-wide text-white">SpeedZone</span>
      </div>
      <p class="text-sm leading-relaxed">
        Platform jual beli motor sport terpercaya di Indonesia. Temukan motor impian Anda dengan harga terbaik dan proses mudah.
      </p>
    </div>
    <div>
      <h4 class="text-lg font-bold mb-3 text-white">Navigasi</h4>
      <ul class="space-y-2 text-sm">
        <li><a href="{{ url('/pembeli/home') }}" class="hover:underline">Beranda</a></li>
        <li><a href="{{ url('/pembeli/produk') }}" class="hover:underline">Produk</a></li>
        <li><a href="{{ url('/pembeli/tentang_kami') }}" class="hover:underline">Tentang Kami</a></li>
      </ul>
    </div>
    <div>
      <h4 class="text-lg font-bold mb-3 text-white">Hubungi Kami</h4>
      <ul class="space-y-2 text-sm">
        <li class="flex items-center gap-2"><i class="ph ph-envelope-simple"></i> support@speedzone.id</li>
        <li class="flex items-center gap-2"><i class="ph ph-whatsapp-logo"></i> +62 812-3456-7890</li>
        <li class="flex items-center gap-2"><i class="ph ph-instagram-logo"></i> @speedzone.id</li>
      </ul>
    </div>
  </div>
  <div class="border-t border-yellow-500 mt-10 pt-4 text-center text-sm">
    &copy; 2025 SpeedZone. All rights reserved.
  </div>
</footer>
@endsection
