<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Status Pemesanan | SpeedZone</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white font-sans min-h-screen">

  <!-- Header -->
  <header class="bg-gradient-to-r from-yellow-400 to-yellow-600 p-6 shadow-lg relative flex items-center justify-center">
    <a href="pesanan_saya" class="absolute left-6 text-3xl font-semibold text-white hover:text-yellow-200">&larr;</a>
    <h1 class="text-2xl md:text-3xl font-bold text-white">Status Pemesanan</h1>
  </header>

  <!-- Konten -->
  <main class="max-w-5xl mx-auto py-10 px-4 space-y-10">
    <!-- Judul Utama -->
    <h2 class="text-3xl font-bold text-yellow-300 text-center">Detail Pemesanan</h2>

    <!-- Info Umum -->
    <section class="bg-gray-800 p-6 rounded-xl space-y-3 text-sm">
      <div class="flex justify-between">
        <span>Kode Pesanan:</span>
        <span class="font-semibold">ORDER123456</span>
      </div>
      <div class="flex justify-between">
        <span>Tanggal Pemesanan:</span>
        <span>01 Mei 2025</span>
      </div>
      <div class="flex justify-between">
        <span>Status Pembayaran:</span>
        <span class="text-green-400 font-semibold">Lunas via Transfer</span>
      </div>
    </section>

    <!-- Status Pengiriman -->
    <section>
      <h3 class="text-xl font-semibold text-yellow-400 mb-4">Status Pengiriman</h3>
      <div class="bg-gray-800 p-6 rounded-xl shadow-inner">
        <div class="flex items-center justify-between relative">
          <div class="absolute top-1/2 left-0 right-0 h-1 bg-white z-0"></div>

          <!-- Step -->
          <template id="step-template">
            <div class="flex flex-col items-center z-10">
              <div class="w-10 h-10 flex items-center justify-center rounded-full bg-yellow-400 text-blue-900 font-bold text-sm">1</div>
              <span class="mt-2 text-xs text-yellow-300">Diproses</span>
            </div>
          </template>

          <!-- Steps (Hardcoded for now) -->
          <div class="flex flex-col items-center z-10">
            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-yellow-400 text-blue-900 font-bold text-sm">1</div>
            <span class="mt-2 text-xs text-yellow-300">Diproses</span>
          </div>
          <div class="flex flex-col items-center z-10">
            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-yellow-400 text-blue-900 font-bold text-sm">2</div>
            <span class="mt-2 text-xs text-yellow-300">Dikirim</span>
          </div>
          <div class="flex flex-col items-center z-10">
            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-yellow-400 text-blue-900 font-bold text-sm">3</div>
            <span class="mt-2 text-xs text-yellow-300">Dalam Perjalanan</span>
          </div>
          <div class="flex flex-col items-center z-10">
            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-500 text-white font-bold text-sm">4</div>
            <span class="mt-2 text-xs text-gray-300">Diterima</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Produk Dipesan -->
    <section>
      <h3 class="text-xl font-semibold text-yellow-400 mb-3">Produk Dipesan</h3>
      <div class="flex items-center gap-4 border border-gray-600 rounded-lg p-4 bg-gray-800">
        <img src="images/Honda1.jpg" alt="Produk" class="w-24 h-24 object-cover rounded-lg">
        <div class="flex-1 text-white">
          <h4 class="font-bold text-white">Motor Model XYZ</h4>
          <p class="text-sm text-gray-300">Warna: Hitam | Jumlah: 1</p>
          <p class="text-yellow-400 font-bold mt-2">Rp 40.000.000</p>
        </div>
      </div>
    </section>

    <!-- Ringkasan Pembayaran -->
    <section class="bg-gray-800 p-4 rounded-lg border border-yellow-400">
      <div class="flex justify-between text-sm">
        <span>Harga Produk</span>
        <span>Rp 40.000.000</span>
      </div>
      <div class="flex justify-between text-sm mt-2">
        <span>Ongkir</span>
        <span class="text-green-400 font-medium">Gratis</span>
      </div>
      <hr class="my-3 border-gray-600">
      <div class="flex justify-between font-bold text-lg text-yellow-400">
        <span>Total</span>
        <span>Rp 40.000.000</span>
      </div>
    </section>

    <!-- Info Penerima -->
    <section class="text-sm text-gray-300">
      <h3 class="font-semibold text-yellow-400 mb-2">Informasi Penerima</h3>
      <p><span class="font-medium text-white">Nama:</span> Frima Rizky Lianda</p>
      <p><span class="font-medium text-white">Telepon:</span> 081234567890</p>
      <p><span class="font-medium text-white">Alamat:</span> Jl. Merdeka No. 123, Jakarta</p>
    </section>
  </main>

</body>
</html>
