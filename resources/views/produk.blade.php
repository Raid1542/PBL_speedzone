<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Produk | Speedzone</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

  <!-- Navbar -->
   <header class="bg-yellow-500 p-4 flex justify-between items-center gap-4 shadow-md">
  <div class="flex items-center flex-nowrap">
    <a href="dashboard" class="text-2xl font-bold text-white hover:text-gray-900">&larr;</a>
    <h1 class="text-xl font-semibold text-white ml-4 whitespace-nowrap">Produk Kami</h1>
  </div>
  <nav class="w-full flex justify-between items-center gap-4">
    <!-- Search Bar (di tengah) -->
    <div class="flex justify-center w-full md:w-1/3 mx-auto">
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

    <!-- Tombol Keranjang (di kanan) -->
    <div class="flex justify-center md:justify-end items-center space-x-2">
    <a href="keranjang" class="text-gray-700 hover:text-[#F8F8FF] hover:bg-[#c6a11a] px-3 py-2 rounded font-semibold transition">Keranjang</a>
    <a href="profil" class="text-gray-700 hover:text-[#F8F8FF] hover:bg-[#c6a11a] px-3 py-2 rounded font-semibold transition">Profil</a>
  </nav>
</header>

  <!-- Konten Produk -->
  <main class="max-w-6xl mx-auto py-10 px-6">
    <h2 class="text-3xl font-bold text-blue-900 mb-8 text-center">Daftar Motor Sport</h2>

    <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-8">
      <!-- Card Produk 1 -->
      <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <img src="images/Yamaha.jpg" alt="Yamaha R15 V4" class="w-full h-48 object-cover">
        <div class="p-4">
          <h3 class="text-xl font-semibold text-blue-900">Yamaha R15 V4</h3>
          <p class="text-sm text-gray-600">Rp 40.000.000</p>
          <div class="mt-4 flex gap-2">
            <a href="deskripsi" class="flex-1 bg-yellow-500 hover:bg-yellow-600 text-white py-2 px-4 rounded text-center">Detail</a>
            <button onclick="window.location.href='keranjang'" class="flex-1 border border-yellow-500 hover:bg-yellow-100 text-yellow-600 py-2 px-4 rounded">+ Keranjang</button>
          </div>
        </div>
      </div>

      <!-- Card Produk 2 -->
      <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <img src="images/Ducati.jpg" alt="Ducati Sport" class="w-full h-48 object-cover">
        <div class="p-4">
          <h3 class="text-xl font-semibold text-blue-900">Ducati Sport</h3>
          <p class="text-sm text-gray-600">Rp 38.500.000</p>
          <div class="mt-4 flex gap-2">
            <a href="deskripsi" class="flex-1 bg-yellow-500 hover:bg-yellow-600 text-white py-2 px-4 rounded text-center">Detail</a>
            <button onclick="window.location.href='keranjang'" class="flex-1 border border-yellow-500 hover:bg-yellow-100 text-yellow-600 py-2 px-4 rounded">+ Keranjang</button>
          </div>
        </div>
      </div>

      <!-- Card Produk 3 -->
      <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <img src="images/Honda.jpg" alt="Honda Racing" class="w-full h-48 object-cover">
        <div class="p-4">
          <h3 class="text-xl font-semibold text-blue-900">Honda Racing</h3>
          <p class="text-sm text-gray-600">Rp 62.000.000</p>
          <div class="mt-4 flex gap-2">
            <a href="deskripsi" class="flex-1 bg-yellow-500 hover:bg-yellow-600 text-white py-2 px-4 rounded text-center">Detail</a>
            <button onclick="window.location.href='keranjang'" class="flex-1 border border-yellow-500 hover:bg-yellow-100 text-yellow-600 py-2 px-4 rounded">+ Keranjang</button>
          </div>
        </div>
      </div>

      <!-- Card Produk 4 -->
      <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <img src="images/Kawasaki.jpg" alt="Kawasaki Ninja ZX-6R" class="w-full h-48 object-cover">
        <div class="p-4">
          <h3 class="text-xl font-semibold text-blue-900">Kawasaki Ninja ZX-6R</h3>
          <p class="text-sm text-gray-600">Rp 120.000.000</p>
          <div class="mt-4 flex gap-2">
            <a href="deskripsi" class="flex-1 bg-yellow-500 hover:bg-yellow-600 text-white py-2 px-4 rounded text-center">Detail</a>
            <button onclick="window.location.href='keranjang'" class="flex-1 border border-yellow-500 hover:bg-yellow-100 text-yellow-600 py-2 px-4 rounded">+ Keranjang</button>
          </div>
        </div>
      </div>

      <!-- Card Produk 5 -->
      <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <img src="images/Suzuki.jpg" alt="Suzuki GSX-R1000" class="w-full h-48 object-cover">
        <div class="p-4">
          <h3 class="text-xl font-semibold text-blue-900">Suzuki GSX-R1000</h3>
          <p class="text-sm text-gray-600">Rp 50.000.000</p>
          <div class="mt-4 flex gap-2">
            <a href="deskripsi" class="flex-1 bg-yellow-500 hover:bg-yellow-600 text-white py-2 px-4 rounded text-center">Detail</a>
            <button onclick="window.location.href='keranjang'" class="flex-1 border border-yellow-500 hover:bg-yellow-100 text-yellow-600 py-2 px-4 rounded">+ Keranjang</button>
          </div>
        </div>
      </div>

      <!-- Card Produk 6 -->
      <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <img src="images/HondaCBR.jpg" alt="Honda CBR1000RR" class="w-full h-48 object-cover">
        <div class="p-4">
          <h3 class="text-xl font-semibold text-blue-900">Honda CBR1000RR</h3>
          <p class="text-sm text-gray-600">Rp 95.000.000</p>
          <div class="mt-4 flex gap-2">
            <a href="deskripsi" class="flex-1 bg-yellow-500 hover:bg-yellow-600 text-white py-2 px-4 rounded text-center">Detail</a>
            <button onclick="window.location.href='keranjang'" class="flex-1 border border-yellow-500 hover:bg-yellow-100 text-yellow-600 py-2 px-4 rounded">+ Keranjang</button>
          </div>
        </div>
      </div>

    </div>
  </main>
</body>
</html>
