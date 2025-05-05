<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SpeedZone')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

    <!-- Navbar atau Header -->
    <header class="bg-yellow-500 text-white py-4 shadow-md">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <h1 class="text-xl font-bold">SpeedZone</h1>
            <nav>
                <!-- Tambahkan navigasi jika perlu -->
            </nav>
        </div>
    </header>

    <!-- Konten -->
    <main class="container mx-auto px-6 py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-yellow-600 text-white text-center py-4">
        &copy; 2025 SpeedZone. All rights reserved.
    </footer>

</body>
</html>
