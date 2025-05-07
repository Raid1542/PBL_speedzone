<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Speedzone Admin')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-yellow-50 min-h-screen text-gray-800 font-sans">

    <!-- NAVBAR -->
    <header class="bg-yellow-100 shadow p-4 flex justify-between items-center">
        <!-- Logo & Nama -->
        <div class="flex items-center gap-2">
            <img src="{{ asset('images/LogoSpeedzone.jpg') }}" alt="Logo Speedzone" class="w-10 h-10 rounded-full object-cover">
            <span class="font-semibold text-lg text-yellow-700">Speedzone</span>
        </div>

        <!-- Navigasi Tengah -->
        <nav class="flex gap-6 text-yellow-700 font-medium">
            <a href="/admin/dashboard" class="@if(request()->is('dashboard')) font-bold underline @endif hover:underline">Dashboard</a>
            <a href="/admin/riwayat-transaksi" class="@if(request()->is('admin/riwayat-transaksi')) font-bold underline @endif hover:underline">Riwayat</a>
            <a href="/admin/produk" class="@if(request()->is('admin/produk')) font-bold underline @endif hover:underline">Produk</a>
        </nav>

        <!-- Logout -->
        <a href="/logout" class="text-sm text-red-600 hover:underline">Logout</a>
    </header>

    <!-- KONTEN -->
    <main class="max-w-6xl mx-auto px-4 py-8">
        @yield('konten')
    </main>

</body>
</html>
