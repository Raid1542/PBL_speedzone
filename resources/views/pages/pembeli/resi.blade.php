<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Rincian Resi - SPEEDZONE</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 min-h-screen text-white">

  <!-- Navbar -->
  <header class="bg-gradient-to-r from-yellow-400 to-yellow-600 p-6 shadow-lg relative flex items-center justify-center">
    <a href="javascript:history.back()" class="absolute left-6 text-3xl font-semibold text-white hover:text-yellow-200">&larr;</a>
    <h1 class="text-2xl md:text-3xl font-bold text-white">Rincian Resi</h1>
  </header>


  <!-- Konten Utama -->
  <main class="flex items-center justify-center px-4 py-10">
    <section class="bg-gray-800 w-full max-w-md rounded-xl shadow p-6">

      <!-- Header -->
      <div class="text-center mb-6">
        <h2 class="text-2xl font-bold text-yellow-400">Rincian Resi</h2>
        <p class="text-sm text-gray-300">
          Terima kasih telah berbelanja di <span class="font-semibold text-white">SpeedZone</span>
        </p>
      </div>

      <!-- Info Utama -->
      <div class="text-sm text-gray-200 space-y-2 mb-4">
        <p><span class="font-semibold">ID Resi:</span> 123456</p>
        <p><span class="font-semibold">Kode Pesanan:</span> ORD-20250504-001</p>
        <p><span class="font-semibold">Nama:</span> Frima Rizky Lianda</p>
        <p><span class="font-semibold">Alamat:</span> Jl. Contoh Alamat No. 123, Jakarta</p>
      </div>

      <hr class="border-gray-600 my-4"/>

      <!-- Detail Produk -->
      <div class="text-sm text-gray-100">
        <h3 class="font-semibold text-yellow-400 mb-2">Detail Produk</h3>

        <!-- Produk -->
        <div class="space-y-4">
          <!-- Produk 1 -->
          <div class="flex justify-between">
            <div>
              <p>Kaos Polos</p>
              <p class="text-xs text-gray-400">Warna: Hitam</p>
            </div>
            <div class="text-right">
              <p>2 pcs</p>
              <p>Rp 150.000</p>
            </div>
          </div>

          <!-- Produk 2 -->
          <div class="flex justify-between">
            <div>
              <p>Celana Jeans</p>
              <p class="text-xs text-gray-400">Warna: Biru</p>
            </div>
            <div class="text-right">
              <p>1 pcs</p>
              <p>Rp 349.999</p>
            </div>
          </div>
        </div>
      </div>

      <hr class="border-gray-600 my-4"/>

      <!-- Total -->
      <div class="flex justify-between text-sm font-semibold text-white mb-6">
        <span>Total</span>
        <span>Rp 649.999</span>
      </div>

      <!-- Tombol Selesai -->
      <div class="flex justify-center">
        <button class="bg-yellow-400 hover:bg-yellow-300 text-black px-6 py-2 rounded-md font-semibold shadow">
          Selesai
        </button>
      </div>

    </section>
  </main>

</body>
</html>
