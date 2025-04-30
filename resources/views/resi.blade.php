<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rincian Resi - SPEEDZONE</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

  <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md">
    
    <!-- Logo bulat -->
<!-- Logo bulat dengan gambar -->
<div class="flex justify-center mb-6">
  <div class="w-20 h-20 rounded-full overflow-hidden shadow">
    <img src="images/LogoSpeedzone.jpg" alt="Logo" class="w-full h-full object-cover" />
  </div>
</div>

    <!-- Informasi Resi -->
    <div class="text-gray-800 mb-4 space-y-1">
      <p><strong>ID Resi:</strong> #123456789</p>
      <p><strong>Nama:</strong> Frima Rizky Lianda</p>
      <p><strong>Alamat:</strong>  Jl. Contoh Alamat No. 123, Jakarta</p>
      <p><strong>Rincian Pembelian:</strong></p>
    </div>

    <!-- Tabel Produk -->
    <div class="overflow-x-auto">
      <table class="table-auto w-full text-left text-gray-800 border border-gray-400">
        <tbody>
          <tr class="bg-gray-200">
            <th class="border border-gray-300 px-2 py-1">Nama Produk</th>
            <td class="border border-gray-300 px-2 py-1">Motor Yamaha</td>
          </tr>
          <tr>
            <th class="border border-gray-300 px-2 py-1">Warna</th>
            <td class="border border-gray-300 px-2 py-1">Kuning</td>
          </tr>
          <tr class="bg-gray-200">
            <th class="border border-gray-300 px-2 py-1">Jumlah</th>
            <td class="border border-gray-300 px-2 py-1">2</td>
          </tr>
          <tr>
            <th class="border border-gray-300 px-2 py-1">Total</th>
            <td class="border border-gray-300 px-2 py-1">Rp300.000.000</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Tombol -->
    <div class="text-center mt-6">
      <a href="/" class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-2 rounded shadow-md transition">
        Selesai
      </a>
    </div>
  </div>

</body>
</html>
