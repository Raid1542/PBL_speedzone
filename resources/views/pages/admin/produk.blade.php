<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Produk - Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-yellow-300 font-sans">

  <!-- Navbar (Full Width) -->
  <nav class="bg-gradient-to-r from-yellow-400 to-yellow-600 shadow-md py-4 px-6 flex items-center justify-start">
    <div class="flex items-center gap-3">
      <img src="images/LogoSpeedzone.jpg" alt="Logo" class="h-12 w-12 rounded-full object-cover">
      <span class="text-2xl font-bold tracking-wide text-white">SpeedZone</span>
    </div>

    <div class="absolute left-1/2 transform -translate-x-1/2">
    <span class="text-2xl font-bold tracking-wide text-white">Produk</span>
  </div>

  </nav>

  <!-- Main Layout -->
  <div class="flex h-[calc(100vh-80px)]">

    <!-- Sidebar -->
    <aside class="bg-gray-800 w-64 p-4">
      <div class="text-yellow-300 text-lg font-semibold mb-8">Menu</div>
      <ul class="space-y-4">
        <li><a href="/admin/dashboard" class="block text-white hover:bg-yellow-500 hover:text-gray-900 px-4 py-2 rounded-lg">Dashboard</a></li>
        <li><a href="/admin/produk" class="block text-white hover:bg-yellow-500 hover:text-gray-900 px-4 py-2 rounded-lg">Produk</a></li>
        <li><a href="/admin/konfirmasi_pembayaran" class="block text-white hover:bg-yellow-500 hover:text-gray-900 px-4 py-2 rounded-lg">Pesanan</a></li>
        <li><a href="/admin/rekap-penjualan" class="block text-white hover:bg-yellow-500 hover:text-gray-900 px-4 py-2 rounded-lg">Rekap Penjualan</a></li>
        <li><a href="/login" class="block text-red-500 hover:bg-red-700 hover:text-white px-4 py-2 rounded-lg">Logout</a></li>
      </ul>
    </aside>

    <!-- Page Content -->
    <main class="flex-1 p-6 overflow-y-auto bg-gray-900 text-yellow-300">

      <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-yellow-400">Daftar Produk</h2>
        <a href="/admin/produk/create"
          class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold py-2 px-4 rounded shadow">
          + Tambah Produk
        </a>
      </div>

      <div class="overflow-x-auto rounded-lg shadow border border-gray-700">
        <table class="min-w-full table-auto text-sm bg-gray-800 text-white">
          <thead class="bg-yellow-400 text-black">
            <tr>
              <th class="px-4 py-2">ID</th>
              <th class="px-4 py-2">Nama</th>
              <th class="px-4 py-2">Gambar</th>
              <th class="px-4 py-2">Deskripsi</th>
              <th class="px-4 py-2">Harga</th>
              <th class="px-4 py-2">Stok</th>
              <th class="px-4 py-2">Warna</th>
              <th class="px-4 py-2">Kategori</th>
              <th class="px-4 py-2">Ubah</th>
              <th class="px-4 py-2">Hapus</th>
            </tr>
          </thead>
          <tbody>
            @for($i = 1; $i <= 6; $i++)
            <tr class="border-t border-gray-600 hover:bg-gray-700">
              <td class="px-4 py-2">{{ $i }}</td>
              <td class="px-4 py-2">Produk {{ $i }}</td>
              <td class="px-4 py-2">
                <img src="gambar{{ $i }}.jpg" alt="Gambar Produk {{ $i }}" class="w-16 h-16 object-cover rounded">
              </td>
              <td class="px-4 py-2">Deskripsi singkat produk {{ $i }}</td>
              <td class="px-4 py-2 text-yellow-300">Rp100.000</td>
              <td class="px-4 py-2">
                <input type="number" value="10" min="0"
                  class="w-16 p-1 rounded text-center text-black bg-gray-100 focus:outline-none focus:ring focus:ring-yellow-300">
              </td>
              <td class="px-4 py-2">
                <select
                  class="p-1 rounded text-black bg-gray-100 focus:outline-none focus:ring focus:ring-yellow-300">
                  <option value="red">Merah</option>
                  <option value="blue">Biru</option>
                  <option value="black">Hitam</option>
                  <option value="white">Putih</option>
                  <option value="green">Hijau</option>
                  <option value="yellow">Kuning</option>
                </select>
              </td>
              <td class="px-4 py-2">
                <select
                  class="p-1 rounded text-black bg-gray-100 focus:outline-none focus:ring focus:ring-yellow-300">
                  <option value="honda">Honda</option>
                  <option value="kawasaki">Kawasaki</option>
                  <option value="suzuki">Suzuki</option>
                </select>
              </td>
              <td class="px-4 py-2">
                <a href="#" class="text-blue-400 hover:underline">Ubah</a>
              </td>
              <td class="px-4 py-2">
                <a href="#" class="text-red-400 hover:underline">Hapus</a>
              </td>
            </tr>
            @endfor
          </tbody>
        </table>
      </div>

    </main>
  </div>

</body>
</html>
