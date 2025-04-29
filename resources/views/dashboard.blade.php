<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard Jual Beli Motor Sport</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
  <!-- Navbar -->
 
    <!-- Tombol Search -->
    <nav class="hover:bg-[#faf9f4] shadow-md p-4 flex flex-col md:flex-row md:justify-between md:items-center gap-4">
  <!-- Logo -->
  <div class="w-30 h-30 object-cover">
    <img src="images/LogoSpeedzone.jpg" alt="Logo Speedzone" class="h-full w-full object-cover rounded-full">
  </div>

  <!-- Search Bar di Tengah -->
  <div class="flex justify-center w-full md:w-1/3">
    <div class="relative w-full">
      <input 
        type="text" 
        placeholder="Cari motor sport..." 
        class="w-full border border-gray-300 rounded-full py-2 px-4 pl-10 focus:outline-none focus:ring-2 focus:ring-yellow-400"
      />
      <svg class="w-5 h-5 absolute left-3 top-2.5 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z" />
      </svg>
    </div>
  </div>

  <!-- Menu Navigasi -->
  <div class="flex justify-center md:justify-end items-center space-x-2">
    <a href="produk" class="text-gray-700 hover:text-[#F8F8FF] hover:bg-[#c6a11a] px-3 py-2 rounded font-semibold transition">Produk</a>
    <a href="keranjang" class="text-gray-700 hover:text-[#F8F8FF] hover:bg-[#c6a11a] px-3 py-2 rounded font-semibold transition">Keranjang</a>
    <a href="profil" class="text-gray-700 hover:text-[#F8F8FF] hover:bg-[#c6a11a] px-3 py-2 rounded font-semibold transition">Profil</a>
  </div>
</nav>
</nav>

  <!-- Hero Section -->
  <div class="bg-gradient-to-r from-yellow-300 to-yellow-100 text-blue-900 p-10 flex items-center justify-between">
    <div>
      <h1 class="text-4xl font-bold mb-2">SPEEDZONE</h1>
      <p class="text-lg">Temukan motor sport impianmu. Berkualitas, bergaya, dan bertenaga.</p>
    </div>
    <img src="images/Yamaha.jpg" alt="Motor Sport" class="w-1/3 hidden md:block">
  </div>

  <!-- Kategori Produk -->
<section class="bg-[#f3f3f3] py-12">
  <h2 class="text-2xl md:text-3xl font-bold text-center text-blue-900 mb-10">KATEGORI PRODUK</h2>
  <div class="flex flex-wrap justify-center gap-6 px-4 md:px-0">
    <!-- Kategori 1 -->
    <div class="relative group w-64 h-40 overflow-hidden rounded-xl shadow-lg">
      <img src="images/Yamaha.jpg" alt="YAMAHA" class="object-cover w-full h-full transform group-hover:scale-110 transition duration-300">
      <div class="absolute inset-0 bg-gradient-to-r from-black/30 to-black/10 flex items-center justify-center">
      </div>
    </div>
    <!-- Kategori 2 -->
    <div class="relative group w-64 h-40 overflow-hidden rounded-xl shadow-lg">
      <img src="images/Kawasaki.jpg" alt="KAWASAKI" class="object-cover w-full h-full transform group-hover:scale-110 transition duration-300">
      <div class="absolute inset-0 bg-gradient-to-r from-black/30 to-black/10 flex items-center justify-center">
      </div>
    </div>
    <!-- Kategori 3 -->
    <div class="relative group w-64 h-40 overflow-hidden rounded-xl shadow-lg">
      <img src="images/Ducati.jpg" alt="DUCATI" class="object-cover w-full h-full transform group-hover:scale-110 transition duration-300">
      <div class="absolute inset-0 bg-gradient-to-r from-black/30 to-black/10 flex items-center justify-center">
      </div>
    </div>
    <!-- Kategori 4 -->
    <div class="relative group w-64 h-40 overflow-hidden rounded-xl shadow-lg">
      <img src="images/Honda.jpg" alt="HONDA" class="object-cover w-full h-full transform group-hover:scale-110 transition duration-300">
      <div class="absolute inset-0 bg-gradient-to-r from-black/30 to-black/10 flex items-center justify-center">
      </div>
    </div>
  </div>
</section>

  <!-- Katalog Motor -->
  <section class="p-8">
    <h2 class="text-2xl font-bold mb-6 text-center text-blue-900">Katalog Motor Sport Terlaris</h2>
    <div class="grid md:grid-cols-3 gap-6">
      <!-- Card 1 -->
      <!-- Card 1 -->
<div class="bg-white rounded-lg shadow p-4">
  <img src="images/Yamaha.jpg" alt="Motor" class="rounded">
  <h3 class="text-lg font-semibold mt-4">Yamaha R15 V4</h3>
  <p class="text-blue-900">Rp 40.000.000</p>
  <a href="deskripsi" class="mt-2 inline-block px-4 py-2 bg-yellow-500 text-blue-900 rounded hover:bg-yellow-300">Detail</a>
</div>

<!-- Card 2 -->
<div class="bg-white rounded-lg shadow p-4">
  <img src="images/Ducati.jpg" alt="Motor" class="rounded">
  <h3 class="text-lg font-semibold mt-4">Ducati</h3>
  <p class="text-blue-900">Rp 38.500.000</p>
  <a href="deskripsi" class="mt-2 inline-block px-4 py-2 bg-yellow-500 text-blue-900 rounded hover:bg-yellow-300">Detail</a>
</div>

<!-- Card 3 -->
<div class="bg-white rounded-lg shadow p-4">
  <img src="images/Honda.jpg" alt="Motor" class="rounded">
  <h3 class="text-lg font-semibold mt-4">Honda</h3>
  <p class="text-blue-900">Rp 62.000.000</p>
  <a href="deskripsi" class="mt-2 inline-block px-4 py-2 bg-yellow-500 text-blue-900 rounded hover:bg-yellow-300">Detail</a>
</div>
  </section>

  <!-- Footer -->
  <footer class="bg-white shadow-md p-4 text-center text-blue-900 mt-8">
    &copy; 2025 speedzone. All rights reserved.
  </footer>
</body>
</html>
