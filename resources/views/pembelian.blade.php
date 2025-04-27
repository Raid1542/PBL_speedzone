<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
<div class="w-full min-h-screen bg-white border border-gray-300 shadow-md">
  <!-- Header -->
  <div class="bg-yellow-500 px-4 py-2  flex items-center max-w-full leading-normal tracking-normal">
    <div class="w-25 h-25 object-cover">
      <img src="images/LogoSpeedzone.jpg" alt="speedzone" class="w-full h-full object-cover rounded-full">
    </div>
    <h2 class="ml-10 flex items-center justify-center text-4xl font-bold font-sans  text-black">RINGKASAN PEMBELIAN</h2>
  </div>

  <!-- Content -->
  <div class="p-4 space-y-4">
    <div class="flex">
      <!-- Gambar Produk -->
      <div class="w-50 h-50 bg-gray-200 flex items-center justify-center text-xs font-semibold text-gray-700">
        GAMBAR<br/>PRODUK
      </div>
      <!-- Detail Produk -->
      <div class="ml-4 text-sm text-black grid space-y-2">
        <p>Nama : <span class="font-medium">Yamaha R15</span></p>
        <p>Harga : <span class="font-medium">Rp35.000.000</span></p>
        <p>Warna : <span class="font-medium">Biru</span></p>
        <p>Jumlah : <span class="font-medium">1</span></p>
      </div>
    </div>

    <!-- Metode Pembayaran -->
    <div class="text-sm text-black">
      <p>Metode Pembayaran : <span class="font-medium">Transfer Bank</span></p>      
    </div>

    <div class="flex items-center space-x-2">
      <div class="w-15 h-15 bg-gray-200 flex items-center justify-center text-[10px] font-semibold text-gray-700">
        GAMBAR<br/>PRODUK
      </div>
      <!-- Detail Produk -->
      <div class="ml-4 text-sm text-black grid space-y-2">
        <p align="middle"><span class="font-medium ">Bank 1</span></p>
      </div>
    </div>

    <div class="flex items-center space-x-2">
      <div class="w-15 h-15 bg-gray-200 flex items-center justify-center text-[10px] font-semibold  text-gray-700">
        GAMBAR<br/>PRODUK
      </div>
      <!-- Detail Produk -->
      <div class="ml-4 text-sm text-black grid space-y-2">
        <p align="middle"><span class="font-medium ">Bank 2</span></p>
      </div>
    </div>

    <!-- Total Harga -->
    <div class="text-sm text-black">
      <p>Total Harga : <span class="font-bold">Rp35.000.000</span></p>
      
    </div>

    <!-- Tombol Pesan -->
    <div class="text-center mt-6">
      <a href="#" class="w-60 bg-yellow-400 hover:bg-yellow-500 text-gray-800 font-semibold py-2 px-6 shadow rounded-full inline-block">
      Pesan
      </a>
      </div>
    </div>
  </div>
</div>
</body>
</html>