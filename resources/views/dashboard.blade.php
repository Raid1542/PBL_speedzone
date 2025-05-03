<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SpeedZone - Temukan Motor Impian Anda</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body class="bg-gray-900 font-sans text-yellow-300">

<!-- Navbar -->
<nav class="bg-gradient-to-r from-yellow-400 to-yellow-600 shadow-md py-4 px-6 flex flex-wrap items-center justify-between gap-4">
  <!-- Logo -->
  <div class="flex items-center gap-3">
    <img src="images/LogoSpeedzone.jpg" alt="Logo" class="h-14 w-14 rounded-full object-cover">
    <span class="text-2xl font-bold tracking-wide text-white">SpeedZone</span>
  </div>

  <!-- Search Bar (ukuran sedang + ikon kaca pembesar) -->
  <div class="flex-1 mx-6 max-w-md">
    <div class="relative">
      <input 
        type="text" 
        placeholder="Cari motor impian Anda..." 
        class="w-full px-10 py-2 rounded-full border border-yellow-300 focus:outline-none focus:ring-2 focus:ring-yellow-500 bg-white text-gray-900"
      />
      <i class="ph ph-magnifying-glass text-yellow-600 absolute left-3 top-1/2 transform -translate-y-1/2 text-xl"></i>
    </div>
  </div>

  <!-- Ikon Navigasi -->
  <div class="flex items-center gap-4 text-white text-lg font-semibold">
    <a href="keranjang" title="Keranjang">
      <i class="ph ph-shopping-cart-simple text-3xl hover:text-yellow-900 transition"></i>
    </a>
    <a href="profil" title="Profil">
      <i class="ph ph-user-circle text-3xl hover:text-yellow-900 transition"></i>
    </a>
    <a href="tentang_kami" title="Akun Penjual">
      <i class="ph ph-storefront text-3xl hover:text-yellow-900 transition"></i>
    </a>
  </div>
</nav>

<!-- Script Toggle Search -->
<script>
  const toggleBtn = document.getElementById("toggleSearch");
  const searchInput = document.getElementById("searchInput");

  toggleBtn.addEventListener("click", (e) => {
    e.stopPropagation();
    searchInput.classList.toggle("hidden");
    if (!searchInput.classList.contains("hidden")) {
      searchInput.focus();
    }
  });

  window.addEventListener("click", (e) => {
    if (!searchInput.contains(e.target) && !toggleBtn.contains(e.target)) {
      searchInput.classList.add("hidden");
    }
  });
</script>

<!-- CSS untuk efek klik pada kategori -->
<style>
  .category-link:active, .category-link:focus {
    background-color: rgba(255, 255, 0, 0.3);
  }
</style>

<!-- Hero Section -->
<section class="relative w-full h-[500px] bg-black">
  <img src="images/iklan.png" alt="Banner Speedzone" class="w-full h-full object-cover opacity-80">
  <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white px-4">
    <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Temukan Motor Impian Anda</h1>
    <p class="text-lg md:text-xl mb-6 max-w-xl drop-shadow">Dapatkan motor sport terbaik dengan harga bersaing dan proses cepat hanya di SpeedZone.</p>
    <a href="produk" class="bg-yellow-400 text-gray-900 px-6 py-3 rounded-full font-semibold hover:bg-yellow-300 transition duration-300">
      Lihat Produk Sekarang
    </a>
  </div>
</section>

<!-- Rekomendasi Produk -->
  <h2 class="text-2xl font-bold text-center mb-8 text-yellow-400">Rekomendasi Motor untuk Anda</h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <!-- Card 1 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden">
      <img src="images/Yamaha.jpg" alt="Yamaha" class="w-full h-48 object-contain">
      <div class="p-4">
        <h3 class="font-semibold text-xl text-blue-800">Yamaha R15 V4</h3>
        <p class="text-yellow-600 mt-1">Rp 40.000.000</p>
        <a href="deskripsi" class="inline-block mt-3 bg-yellow-400 text-gray-900 px-4 py-2 rounded hover:bg-yellow-300">Lihat Detail</a>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden">
      <img src="images/Ducati.jpg" alt="Ducati" class="w-full h-48 object-contain">
      <div class="p-4">
        <h3 class="font-semibold text-xl text-blue-800">Ducati Panigale</h3>
        <p class="text-yellow-600 mt-1">Rp 38.500.000</p>
        <a href="deskripsi" class="inline-block mt-3 bg-yellow-400 text-gray-900 px-4 py-2 rounded hover:bg-yellow-300">Lihat Detail</a>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden">
      <img src="images/Honda1.jpg" alt="Honda" class="w-full h-48 object-contain">
      <div class="p-4">
        <h3 class="font-semibold text-xl text-blue-800">Honda CBR</h3>
        <p class="text-yellow-600 mt-1">Rp 62.000.000</p>
        <a href="deskripsi" class="inline-block mt-3 bg-yellow-400 text-gray-900 px-4 py-2 rounded hover:bg-yellow-300">Lihat Detail</a>
      </div>
    </div>

  </div>

  <div class="mt-10 max-w-5xl mx-auto px-4">
    <video 
      controls 
      autoplay 
      muted 
      loop
      class="w-full h-[400px] object-cover rounded-xl shadow-lg"
  
      <source src="videos/vidio.mp4" type="video/mp4">
      Browser Anda tidak mendukung video ini.
    </video>
    <p class="text-center mt-3 text-yellow-300 text-sm">
      Preview Yamaha R15 V4 - Sunset Gloss
    </p>
  </div>
</div>
</section>

<!-- Footer -->
<footer class="bg-gray-900 text-yellow-300 mt-12 pt-10 pb-6 px-6">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">
    <div>
      <div class="flex items-center gap-3 mb-4">
        <img src="images/LogoSpeedzone.jpg" alt="Logo" class="h-12 w-12 rounded-full object-cover">
        <span class="text-2xl font-bold tracking-wide text-white">SpeedZone</span>
      </div>
      <p class="text-sm leading-relaxed">
        Platform jual beli motor sport terpercaya di Indonesia. Temukan motor impian Anda dengan harga terbaik dan proses mudah.
      </p>
    </div>

    <div>
      <h4 class="text-lg font-bold mb-3 text-white">Navigasi</h4>
      <ul class="space-y-2 text-sm">
        <li><a href="dashboard" class="hover:underline">Beranda</a></li>
        <li><a href="produk" class="hover:underline">Produk</a></li>
        <li><a href="tentang_kami" class="hover:underline">Tentang Kami</a></li>
      </ul>
    </div>

    <div>
      <h4 class="text-lg font-bold mb-3 text-white">Hubungi Kami</h4>
      <ul class="space-y-2 text-sm">
        <li class="flex items-center gap-2">
          <i class="ph ph-envelope-simple"></i> support@speedzone.id
        </li>
        <li class="flex items-center gap-2">
          <i class="ph ph-whatsapp-logo"></i> +62 812-3456-7890
        </li>
        <li class="flex items-center gap-2">
          <i class="ph ph-instagram-logo"></i> @speedzone.id
        </li>
      </ul>
    </div>
  </div>

  <div class="border-t border-yellow-500 mt-10 pt-4 text-center text-sm">
    &copy; 2025 SpeedZone. All rights reserved.
  </div>
</footer>

</body>
</html>