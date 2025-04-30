<!-- resources/views/admin/riwayat-transaksi.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Transaksi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-yellow-50 min-h-screen">

    <!-- NAVBAR -->
    <header class="bg-yellow-100 shadow p-4 flex justify-between items-center">
        <div class="flex items-center gap-2">
            <img src="{{ asset('images/LogoSpeedzone.jpg') }}" alt="Logo Speedzone" class="w-10 h-10 rounded-full object-cover">
            <span class="font-semibold text-lg">Speedzone</span>
        </div>
        <nav class="flex gap-4">
            <a href="/admin/dashboard" class="text-gray-700">Dashboard</a>
            <a href="/admin/riwayat-transaksi" class="font-bold text-gray-600 hover:text-gray-800">Riwayat Transaksi</a>
        </nav>
        <a href="/logout" class="text-sm text-red-600 hover:underline">Logout</a>
    </header>

    <!-- ISI HALAMAN -->
    <div class="max-w-6xl mx-auto bg-white p-6 mt-6 rounded-xl shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-semibold text-yellow-700">Riwayat Transaksi</h1>
            <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-medium py-2 px-4 rounded-lg shadow">
                Ekspor
            </button>
        </div>

        <table class="min-w-full text-left border border-gray-300 rounded-lg overflow-hidden">
            <thead class="bg-yellow-100 text-yellow-800">
                <tr>
                    <th class="px-4 py-2 border">No</th>
                    <th class="px-4 py-2 border">Tanggal</th>
                    <th class="px-4 py-2 border">Nama Produk</th>
                    <th class="px-4 py-2 border">Pembeli</th>
                    <th class="px-4 py-2 border">Jumlah</th>
                    <th class="px-4 py-2 border">Total</th>
                </tr>
            </thead>
            <tbody>
                @for($i = 1; $i <= 5; $i++)
                <tr class="hover:bg-yellow-50">
                    <td class="px-4 py-2 border">{{ $i }}</td>
                    <td class="px-4 py-2 border">2025-04-2{{ $i }}</td>
                    <td class="px-4 py-2 border">Produk {{ $i }}</td>
                    <td class="px-4 py-2 border">Pembeli {{ $i }}</td>
                    <td class="px-4 py-2 border">{{ rand(1, 5) }}</td>
                    <td class="px-4 py-2 border">Rp{{ number_format(rand(10000, 50000), 0, ',', '.') }}</td>
                </tr>
                @endfor
            </tbody>
        </table>
    </div>

</body>
</html>
