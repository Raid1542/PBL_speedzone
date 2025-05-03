<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Produk | Speedzone</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body class="bg-gray-900 text-white font-sans">

  <!-- Navbar -->
  <header class="bg-gradient-to-r from-yellow-400 to-yellow-600 p-4 flex justify-between items-center gap-4 shadow-md">
    <div class="flex items-center flex-nowrap">
      <a href="dashboard" class="text-2xl font-bold text-white hover:text-yellow-200">&larr;</a>
      <h1 class="text-xl font-semibold text-white ml-4 whitespace-nowrap">Produk Kami</h1>
    </div>

    <!-- Navigasi Tengah & Kanan -->
    <nav class="w-full flex justify-between items-center gap-4">
      <!-- Search Bar -->
      <div class="flex justify-center w-full md:w-1/3 mx-auto">
        <div class="relative w-full">
          <input 
            type="text" 
            placeholder="Cari motor sport..." 
            class="w-full border border-gray-600 bg-white text-yellow-600 rounded-full py-2 px-4 pl-10 focus:outline-none focus:ring-2 focus:ring-yellow-500"
          />
          <svg class="w-5 h-5 absolute left-3 top-2.5 text-yellow-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z" />
          </svg>
        </div>
      </div>

      <!-- Ikon Keranjang & Profil -->
      <div class="flex justify-center md:justify-end items-center space-x-4">
        <a href="keranjang" title="Keranjang">
          <i class="ph ph-shopping-cart-simple text-3xl text-white hover:text-yellow-200 transition"></i>
        </a>
        <a href="profil" title="Profil">
          <i class="ph ph-user-circle text-3xl text-white hover:text-yellow-200 transition"></i>
        </a>
      </div>
    </nav>
  </header>

  <!-- Konten Produk -->
  <main class="max-w-6xl mx-auto py-10 px-6">
    <h2 class="text-3xl font-bold text-yellow-300 mb-8 text-center">Daftar Motor Sport</h2>

    <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-8">
      <!-- Contoh Card Produk -->
      <?php
        $produk = [
          ["Yamaha R15 V4", "40.000.000", "images/Yamaha.jpg"],
          ["Ducati Sport", "38.500.000", "images/Ducati.jpg"],
          ["Honda Racing", "62.000.000", "images/Honda.jpg"],
          ["Kawasaki Ninja ZX-6R", "120.000.000", "images/Kawasaki.jpg"],
          ["Suzuki GSX-R1000", "50.000.000", "images/Honda1.jpg"],
          ["Honda CBR1000RR", "95.000.000", "images/Yamaha_R15.png"],
        ];
        foreach ($produk as [$nama, $harga, $gambar]) {
      ?>
        <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden">
          <img src="<?= $gambar ?>" alt="<?= $nama ?>" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold text-yellow-300"><?= $nama ?></h3>
            <p class="text-sm text-yellow-200">Rp <?= $harga ?></p>
            <div class="mt-4 flex gap-2">
              <a href="deskripsi" class="flex-1 bg-yellow-500 hover:bg-yellow-600 text-blue-900 py-2 px-4 rounded text-center font-semibold">Detail</a>
              <button onclick="window.location.href='keranjang'" class="flex-1 border border-yellow-500 hover:bg-yellow-600 text-yellow-400 py-2 px-4 rounded">+ Keranjang</button>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </main>
</body>
</html>
