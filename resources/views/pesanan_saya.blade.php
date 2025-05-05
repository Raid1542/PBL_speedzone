<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pesanan Saya - SpeedZone</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white font-sans min-h-screen">

  <!-- Header -->
  <header class="bg-gradient-to-r from-yellow-400 to-yellow-600 p-6 shadow-lg relative flex items-center justify-center">
    <a href="javascript:history.back()" class="absolute left-6 text-3xl font-semibold text-white hover:text-yellow-200">&larr;</a>
    <h1 class="text-2xl md:text-3xl font-bold text-white">Pesanan Saya</h1>
  </header>
  </header>

  <!-- Tabs -->
  <nav class="flex bg-gray-800 text-sm text-gray-300 shadow-inner">
    <button class="flex-1 py-3 border-b-4 border-yellow-400 text-yellow-400 font-semibold">Pesanan</button>
  </nav>

  <!-- Daftar Pesanan -->
  <main class="p-4 space-y-4">
    <div class="bg-gray-800 rounded-xl shadow p-4 space-y-4">
      <!-- Info Toko dan Status -->
      <div class="flex justify-between text-sm">
        <span class="font-semibold text-white">SpeedZone Official</span>
        <span class="bg-green-600 bg-opacity-20 text-green-400 px-2 py-1 rounded-full text-xs">Selesai</span>
      </div>

      <!-- Detail Produk -->
      <div class="flex gap-4">
        <img src="/images/Honda1.jpg" alt="Produk" class="w-20 h-20 rounded object-cover border border-gray-600">
        <div class="flex-1 text-sm">
          <p class="font-medium text-yellow-400">SpeedZone Hoodie Unisex</p>
          <p class="text-gray-400">Ukuran: M | Warna: Navy</p>
          <p class="mt-2 text-gray-300">Jumlah: x1</p>
        </div>
        <div class="text-sm text-yellow-300 font-semibold text-right">Rp199.000</div>
      </div>

      <!-- Tombol Aksi -->
      <div class="flex justify-end gap-2">
        <a href="/resi" class="text-sm border border-yellow-400 text-yellow-400 px-4 py-1 rounded hover:bg-yellow-400 hover:text-black transition">Resi</a>
        <a href="/status_pesanan" class="text-sm bg-yellow-400 text-black px-4 py-1 rounded hover:bg-yellow-300 transition">Lihat Detail</a>
      </div>
    </div>
  </main>

</body>
</html>
