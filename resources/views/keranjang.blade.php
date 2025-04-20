<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Keranjang</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Header -->
  <div class="bg-gray-400 p-4 flex justify-between items-center">
    <a href="#" class="text-2xl font-bold">&larr;</a>
    <h1 class="text-xl font-semibold text-black">Keranjang</h1>
    <div></div>
  </div>

  <div class="max-w-3xl mx-auto mt-6 space-y-4">

    <!-- Item 1 -->
    <div class="bg-gray-300 flex items-center p-4 rounded-lg shadow">
      <!-- Checkbox -->
      <input type="checkbox" class="mr-4 w-5 h-5 accent-yellow-500">

      <!-- Gambar -->
      <div class="w-16 h-16 bg-white flex items-center justify-center text-xs text-gray-500 mr-4">
        Gambar
      </div>

      <!-- Detail Produk -->
      <div class="flex-1 text-black">
        <p class="font-semibold">Nama Produk (2)</p>
        <p class="text-sm">Warna Merah</p>
      </div>

      <!-- Harga & Aksi -->
      <div class="text-right text-black">
        <p class="mb-2">Rp99.000</p>
        <div class="flex gap-2 text-sm text-blue-600">
          <button class="hover:underline">Ubah</button>
          <button class="hover:underline text-red-500">Hapus</button>
        </div>
      </div>
    </div>

    <!-- Item 2 -->
    <div class="bg-gray-300 flex items-center p-4 rounded-lg shadow">
      <input type="checkbox" class="mr-4 w-5 h-5 accent-yellow-500">
      <div class="w-16 h-16 bg-white flex items-center justify-center text-xs text-gray-500 mr-4">
        Gambar
      </div>
      <div class="flex-1 text-black">
        <p class="font-semibold">Produk Lain (1)</p>
        <p class="text-sm">Warna Biru</p>
      </div>
      <div class="text-right text-black">
        <p class="mb-2">Rp120.000</p>
        <div class="flex gap-2 text-sm text-blue-600">
          <button class="hover:underline">Ubah</button>
          <button class="hover:underline text-red-500">Hapus</button>
        </div>
      </div>
    </div>

    <!-- Item 3 -->
    <div class="bg-gray-300 flex items-center p-4 rounded-lg shadow">
      <input type="checkbox" class="mr-4 w-5 h-5 accent-yellow-500">
      <div class="w-16 h-16 bg-white flex items-center justify-center text-xs text-gray-500 mr-4">
        Gambar
      </div>
      <div class="flex-1 text-black">
        <p class="font-semibold">Produk Ketiga (3)</p>
        <p class="text-sm">Warna Kuning</p>
      </div>
      <div class="text-right text-black">
        <p class="mb-2">Rp200.000</p>
        <div class="flex gap-2 text-sm text-blue-600">
          <button class="hover:underline">Ubah</button>
          <button class="hover:underline text-red-500">Hapus</button>
        </div>
      </div>
    </div>

    <!-- Tombol Pesan -->
    <div class="text-center mt-6">
      <button class="bg-yellow-500 hover:bg-yellow-600 text-white px-8 py-2 rounded shadow-md transition">
        PESAN
      </button>
    </div>
  </div>

</body>
</html>
