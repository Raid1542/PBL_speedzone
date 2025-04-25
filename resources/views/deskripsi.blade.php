<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Deskripsi Produk | Speedzone</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

  <!-- Header -->
  <header class="bg-yellow-500 p-4 flex justify-between items-center shadow-md">
    <a href="produk" class="text-2xl font-bold text-white hover:text-gray-900">&larr;</a>
    <h1 class="text-xl font-semibold text-white">Detail Produk</h1>
    <div></div>
  </header>

  <!-- Konten -->
  <main class="max-w-6xl mx-auto mt-8 p-6 bg-white rounded-lg shadow-lg grid grid-cols-1 md:grid-cols-2 gap-8">

    <!-- Galeri Foto -->
    <div class="flex flex-col md:flex-row gap-4">
      <!-- Thumbnail -->
        <img src="images/Yamaha.jpg" alt="Thumbnail 1" class="w-100 h-100 object-cover rounded border border-gray-300 hover:ring-2 hover:ring-yellow-500 cursor-pointer">
      </div>

    <!-- Detail Produk -->
    <div>
      <h2 class="text-3xl font-bold mb-4 text-blue-900">Yamaha R15 V4</h2>
      <p class="text-gray-700 mb-4">Motor sport bergaya racing yang dilengkapi teknologi canggih dan performa tinggi. Cocok untuk pecinta kecepatan dan tampilan stylish.</p>

      <ul class="mb-6 text-sm text-gray-600 space-y-2">
        <li><strong>Warna:</strong> Biru-Hitam</li>
        <li><strong>Harga:</strong> Rp 130.000.000</li>
        <li><strong>Kategori:</strong> Yamaha</li>
        <li><strong>Stok:</strong> 10 unit tersedia</li>
      </ul>

      <p class="text-2xl font-semibold text-blue-900 mb-6">Rp 130.000.000</p>

      <div class="flex gap-4">
      <div class="flex gap-4">
  <a href="keranjang">
    <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-6 rounded transition">
      Masukkan Keranjang
    </button>
  </a>

  <a href="Checkout">
    <button class="border border-yellow-500 hover:bg-yellow-100 text-yellow-600 font-semibold py-2 px-6 rounded transition">
      Beli Sekarang
    </button>
  </a>
</div>

    </div>

  </main>

</body>
</html>
