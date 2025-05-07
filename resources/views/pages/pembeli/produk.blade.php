<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Produk | Speedzone</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
  <style>
    .kategori-active {
      font-weight: bold;
      text-decoration: underline;
      color: #78350f; /* warna teks kuning gelap */
    }
  </style>
</head>
<body class="bg-gray-900 text-white font-sans">

  <!-- Navbar -->
  <header class="bg-gradient-to-r from-yellow-400 to-yellow-600 p-4 flex justify-between items-center shadow-md">
    <!-- Kembali + Judul -->
    <div class="flex items-center flex-nowrap w-1/3">
      <a href="dashboard" class="text-2xl font-bold text-white hover:text-yellow-200">&larr;</a>
      <h1 class="text-xl font-semibold text-white ml-4 whitespace-nowrap">Produk Kami</h1>
    </div>

    <!-- Kategori Tengah -->
    <nav class="hidden md:flex gap-6 text-blue-900 font-semibold w-1/3 justify-center">
      <button class="kategori-btn hover:underline" data-kategori="all">Semua</button>
      <button class="kategori-btn hover:underline" data-kategori="Honda">Honda</button>
      <button class="kategori-btn hover:underline" data-kategori="Yamaha">Yamaha</button>
      <button class="kategori-btn hover:underline" data-kategori="Kawasaki">Kawasaki</button>
      <button class="kategori-btn hover:underline" data-kategori="Ducati">Ducati</button>
    </nav>

    <!-- Ikon kanan -->
    <div class="flex justify-end w-1/3 items-center space-x-4 relative">
      <!-- Search Toggle -->
      <button id="search-toggle">
        <i class="ph ph-magnifying-glass text-3xl text-white hover:text-yellow-200 transition"></i>
      </button>

      <!-- Input Search Hidden -->
      <input 
        type="text"
        id="search-input"
        placeholder="Cari motor..."
        class="hidden absolute top-12 right-0 w-64 border border-gray-600 bg-white text-yellow-600 rounded-full py-2 px-4 pl-4 focus:outline-none focus:ring-2 focus:ring-yellow-500 z-50"
      />

      <!-- Ikon Keranjang & Profil -->
      <a href="keranjang" title="Keranjang">
        <i class="ph ph-shopping-cart-simple text-3xl text-white hover:text-yellow-200 transition"></i>
      </a>
    </div>
  </header>

  <!-- Konten Produk -->
  <main class="max-w-6xl mx-auto py-10 px-6">
    <h2 class="text-3xl font-bold text-yellow-300 mb-8 text-center">Daftar Motor Sport</h2>

    <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-8" id="produk-container">
      <?php
        $produk = [
          ["Yamaha R15 V4", "40.000.000", "images/Yamaha.jpg", "Yamaha"],
          ["Ducati Sport", "38.500.000", "images/Ducati.jpg", "Ducati"],
          ["Honda Racing", "62.000.000", "images/Honda.jpg", "Honda"],
          ["Kawasaki Ninja ZX-6R", "120.000.000", "images/Kawasaki.jpg", "Kawasaki"],
          ["Honda GSX-R1000", "50.000.000", "images/Honda1.jpg", "Honda"],
          ["Honda CBR1000RR", "95.000.000", "images/Yamaha_R15.png", "Honda"],
        ];
        foreach ($produk as [$nama, $harga, $gambar, $kategori]) {
      ?>
        <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden produk-item" data-kategori="<?= $kategori ?>">
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

  <!-- Script -->
  <script>
    // Toggle search input
    document.getElementById('search-toggle').addEventListener('click', () => {
      const input = document.getElementById('search-input');
      input.classList.toggle('hidden');
      input.focus();
    });

    // Filter berdasarkan kategori
    document.querySelectorAll('.kategori-btn').forEach(button => {
      button.addEventListener('click', () => {
        const kategori = button.dataset.kategori;
        document.querySelectorAll('.produk-item').forEach(item => {
          if (kategori === "all") {
            item.style.display = 'block';
          } else {
            item.style.display = item.dataset.kategori === kategori ? 'block' : 'none';
          }
        });

        // Highlight aktif
        document.querySelectorAll('.kategori-btn').forEach(btn => btn.classList.remove('kategori-active'));
        button.classList.add('kategori-active');
      });
    });
  </script>
</body>
</html>
