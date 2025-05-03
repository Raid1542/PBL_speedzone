<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Detail Produk - SpeedZone</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 font-sans text-yellow-300">

 <!-- Navbar -->
 <header class="bg-gradient-to-r from-yellow-400 to-yellow-600 p-6 shadow-lg relative flex items-center justify-center">
  <!-- Tombol kembali di kiri -->
  <a href="javascript:history.back()" class="absolute left-6 text-3xl font-semibold text-white hover:text-yellow-200">&larr;</a>
  <h1 class="text-2xl md:text-3xl font-bold text-white">Detail Produk</h1>
</header>

<!-- Detail Produk Section -->
<section class="py-20 px-6 max-w-screen-xl mx-auto">
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

    <!-- Gambar Produk -->
    <div class="relative">
      <img src="images/Yamaha.jpg" alt="Yamaha R15 V4" class="w-full h-96 object-cover rounded-xl">
    </div>

    <!-- Deskripsi Produk -->
    <div class="flex flex-col justify-between">
      <h2 class="text-4xl font-bold text-yellow-400 mb-4">Yamaha R15 V4</h2>
      <p class="text-lg text-gray-300 mb-6">
        Yamaha R15 V4 hadir dengan desain agresif dan performa motor sport tinggi. Dengan teknologi canggih dan pengendalian yang luar biasa, motor ini sangat cocok untuk pengendara yang mencari pengalaman berkendara terbaik.
      </p>

      <div class="flex items-center gap-6 mb-8">
        <span class="text-3xl font-semibold text-yellow-500">Rp 50.000.000</span>
      </div>

      <div class="flex gap-6 mb-6">
        <!-- Tombol Tambah ke Keranjang yang sudah diarahkan ke halaman keranjang -->
        <a href="keranjang" class="bg-yellow-400 text-gray-900 px-8 py-4 rounded-full font-semibold shadow-xl hover:bg-yellow-300 transition duration-300">
          Tambah ke Keranjang
        </a>
        <a href="pembelian" class="bg-yellow-500 text-gray-900 px-8 py-4 rounded-full font-semibold shadow-xl hover:bg-yellow-400 transition duration-300">
          Beli Sekarang
        </a>
      </div>

      <div class="mt-8 text-center">
        <a href="produk" class="text-yellow-400 hover:underline text-sm">Kembali ke Daftar Produk</a>
      </div>
    </div>
  </div>
</section>

</body>
</html>
