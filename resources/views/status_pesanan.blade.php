<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cek Pemesanan</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-950 text-white font-sans min-h-screen p-6">

  <div class="max-w-4xl mx-auto bg-gray-800 rounded-xl shadow-lg p-6 space-y-10">
    <!-- Judul -->
    <h1 class="text-2xl font-bold text-yellow-400 text-center">Detail Pemesanan</h1>

    <!-- Info Umum -->
    <div class="text-sm text-gray-200 space-y-2">
      <div class="flex justify-between">
        <span>ID Pesanan:</span>
        <span class="font-medium text-white">ORDER123456</span>
      </div>
      <div class="flex justify-between">
        <span>Tanggal Pemesanan:</span>
        <span class="text-white">01 Mei 2025</span>
      </div>
      <div class="flex justify-between">
        <span>Status Pembayaran:</span>
        <span class="text-yellow-300 font-semibold">DP 50%</span>
      </div>
    </div>

    <!-- Status Pemesanan -->
    <div>
      <h2 class="text-lg font-semibold mb-4 text-yellow-400">Status Pengiriman</h2>
      <div class="bg-gray-800 p-6 rounded-2xl shadow-inner">
        <div class="flex items-center justify-between relative">
          <div class="absolute top-1/2 left-0 right-0 h-1 bg-white z-0"></div>

          <!-- Step 1 -->
          <div class="flex flex-col items-center z-10">
            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-yellow-400 text-blue-900 font-bold text-sm">1</div>
            <span class="mt-2 text-xs text-yellow-300">Diterima</span>
          </div>

          <!-- Step 2 -->
          <div class="flex flex-col items-center z-10">
            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-yellow-400 text-blue-900 font-bold text-sm">2</div>
            <span class="mt-2 text-xs text-yellow-300">Diproses</span>
          </div>

          <!-- Step 3 -->
          <div class="flex flex-col items-center z-10">
            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-yellow-400 text-blue-900 font-bold text-sm">3</div>
            <span class="mt-2 text-xs text-yellow-300">Dikirim</span>
          </div>

          <!-- Step 4 -->
          <div class="flex flex-col items-center z-10">
            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-500 text-white font-bold text-sm">4</div>
            <span class="mt-2 text-xs text-gray-300">Dalam Perjalanan</span>
          </div>

          <!-- Step 5 -->
          <div class="flex flex-col items-center z-10">
            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-400 text-white font-bold text-sm">5</div>
            <span class="mt-2 text-xs text-gray-300">Diterima</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Produk Dipesan -->
<div>
  <h2 class="text-lg font-semibold mb-3 text-yellow-400">Produk Dipesan</h2>
  <div class="flex items-center gap-4 border border-gray-300 rounded-lg p-4 bg-white text-gray-800">
    <img src="images/Honda1.jpg" alt="Produk" class="w-24 h-24 object-cover rounded-lg">
    <div class="flex-1">
      <h3 class="font-bold text-gray-900">Motor Model XYZ</h3>
      <p class="text-sm text-gray-600">Warna: Hitam | Jumlah: 1</p>
      <p class="text-yellow-600 font-bold mt-2">Rp 40.000.000</p>
    </div>
  </div>
</div>

    <!-- Ringkasan Pembayaran -->
    <div class="bg-gray-800 p-4 rounded-lg border border-white">
      <div class="flex justify-between text-sm text-white">
        <span>Harga Produk</span>
        <span>Rp 40.000.000</span>
      </div>
      <div class="flex justify-between text-sm mt-2">
        <span>Ongkir</span>
        <span class="text-green-400 font-medium">Gratis</span>
      </div>
      <hr class="my-3 border-white">
      <div class="flex justify-between font-bold text-lg text-yellow-400">
        <span>Total</span>
        <span>Rp 40.000.000</span>
      </div>
    </div>

    <!-- Informasi Penerima -->
    <div class="text-sm text-gray-200 mt-4">
      <h2 class="font-semibold text-yellow-400 mb-2">Informasi Penerima</h2>
      <p><span class="font-medium">Nama:</span> Frima Rizky Lianda</p>
      <p><span class="font-medium">Telepon:</span> 081234567890</p>
      <p><span class="font-medium">Alamat:</span> Jl. Merdeka No. 123, Jakarta</p>
    </div>

  </div>

</body>
</html>
