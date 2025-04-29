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
  <header class="bg-yellow-500 p-6 flex justify-between items-center shadow-md text-xl md:text-2xl">
    <a href="produk" class="font-bold text-white hover:text-gray-900">&larr;</a>
    <h1 class="font-bold text-white">Detail Produk</h1>
    <div></div>
  </header>

  <!-- Wrapper untuk center layout -->
  <div class="min-h-screen flex items-center justify-center p-6">
    
    <!-- Konten -->
    <main class="max-w-7xl w-full mx-auto p-10 bg-white rounded-xl shadow-2xl grid grid-cols-1 md:grid-cols-2 gap-10">

      <!-- Galeri Foto -->
      <div class="flex flex-col">
        <img src="images/Yamaha.jpg" alt="Yamaha R15" class="w-full h-[400px] object-cover rounded-lg border border-gray-300 hover:ring-4 hover:ring-yellow-500 transition duration-200">
      </div>

      <!-- Detail Produk -->
      <div>
        <h2 class="text-4xl font-extrabold mb-6 text-blue-900">Yamaha R15 V4</h2>
        <p class="text-lg text-gray-700 mb-6 leading-relaxed">
          Motor sport bergaya racing yang dilengkapi teknologi canggih dan performa tinggi. Cocok untuk pecinta kecepatan dan tampilan stylish.
        </p>

        <ul class="mb-8 text-base text-gray-700 space-y-2">
          <li><strong>Warna:</strong> Biru-Hitam</li>
          <li><strong>Kategori:</strong> Yamaha</li>
          <li><strong>Stok:</strong> 10 unit tersedia</li>
        </ul>

        <p class="text-3xl font-bold text-blue-900 mb-8">Rp 130.000.000</p>

        <div class="flex gap-6">
          <a href="keranjang">
            <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-3 px-8 rounded-lg text-lg transition">
              Masukkan Keranjang
            </button>
          </a>

          <a href="keranjang">
            <button class="border border-yellow-500 hover:bg-yellow-100 text-yellow-600 font-semibold py-3 px-8 rounded-lg text-lg transition">
              Beli Sekarang
            </button>
          </a>
        </div>
      </div>

    </main>
  </div>

</body>
</html>
