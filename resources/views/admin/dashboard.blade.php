<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-yellow-300 font-sans">

    <!-- NAVBAR -->
    <header class="bg-gradient-to-r from-yellow-400 to-yellow-600 shadow-md p-4 flex justify-between items-center">
        <div class="flex items-center gap-2">
            <img src="{{ asset('images/LogoSpeedzone.jpg') }}" alt="Logo Speedzone" class="w-10 h-10 rounded-full object-cover">
            <span class="font-bold text-white text-lg">SpeedZone</span>
        </div>
        <nav class="flex gap-4">
            <a href="/admin/dashboard" class="font-bold text-white hover:underline">Dashboard</a>
            <a href="/admin/riwayat-transaksi" class="text-white hover:underline">Riwayat Transaksi</a>
        </nav>
        <a href="/logout" class="text-sm text-red-100 hover:underline">Logout</a>
    </header>

    <!-- MAIN CONTENT -->
    <main class="p-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-bold text-yellow-400">Daftar Produk</h2>
            <a href="/admin/produk/create" class="bg-yellow-400 hover:bg-yellow-300 text-gray-900 font-semibold py-2 px-4 rounded-lg shadow">
                + Tambah Produk
            </a>
        </div>

        <div class="overflow-x-auto bg-gray-800 rounded-lg shadow">
            <table class="min-w-full text-sm text-left border border-gray-700">
                <thead class="bg-yellow-500 text-gray-900">
                    <tr>
                        <th class="px-4 py-2 border border-gray-700">ID</th>
                        <th class="px-4 py-2 border border-gray-700">Nama</th>
                        <th class="px-4 py-2 border border-gray-700">Gambar</th>
                        <th class="px-4 py-2 border border-gray-700">Deskripsi</th>
                        <th class="px-4 py-2 border border-gray-700">Harga</th>
                        <th class="px-4 py-2 border border-gray-700">Stok</th>
                        <th class="px-4 py-2 border border-gray-700">Warna</th>
                        <th class="px-4 py-2 border border-gray-700">Kategori</th>
                        <th class="px-4 py-2 border border-gray-700">Ubah</th>
                        <th class="px-4 py-2 border border-gray-700">Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i = 1; $i <= 6; $i++)
                    <tr class="hover:bg-gray-500 text-white">
                        <td class="px-4 py-2 border border-gray-700">{{ $i }}</td>
                        <td class="px-4 py-2 border border-gray-700">Produk {{ $i }}</td>
                        <td class="px-4 py-2 border border-gray-700">
                            <img src="gambar{{ $i }}.jpg" alt="Gambar Produk {{ $i }}" class="w-16 h-16 object-cover rounded">
                        </td>
                        <td class="px-4 py-2 border border-gray-700">Deskripsi singkat produk {{ $i }}</td>
                        <td class="px-4 py-2 border border-gray-700 text-yellow-300">Rp100.000</td>
                        <td class="px-4 py-2 border border-gray-700">
                            <input type="number" value="10" min="0" class="w-16 p-1 border rounded text-center bg-gray-700 text-white">
                        </td>
                        <td class="px-4 py-2 border border-gray-700">
                            <select class="p-1 border rounded bg-gray-700 text-white">
                                <option value="red">Merah</option>
                                <option value="blue">Biru</option>
                                <option value="black">Hitam</option>
                                <option value="white">Putih</option>
                                <option value="green">Hijau</option>
                                <option value="yellow">Kuning</option>
                            </select>
                        </td>
                        <td class="px-4 py-2 border border-gray-700">
                            <select class="p-1 border rounded bg-gray-700 text-white">
                                <option value="honda">Honda</option>
                                <option value="kawasaki">Kawasaki</option>
                                <option value="suzuki">Ducati</option>
                                <option value="suzuki">Yamaha</option>
                            </select>
                        </td>
                        <td class="px-4 py-2 border border-gray-700 text-blue-400 hover:underline"><a href="#">Ubah</a></td>
                        <td class="px-4 py-2 border border-gray-700 text-red-400 hover:underline"><a href="#">Hapus</a></td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>
