<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Web Saya</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-xl p-8 w-full max-w-md">
        <!-- Logo -->
        <div class="flex justify-center mb-6">
            <img src="images/LogoSpeedzone.jpg" alt="Logo Speedzone" class="w-40 h-40 object-cover rounded-full shadow-lg" />
        </div>

        <!-- Judul -->
        <h2 class="text-2xl font-bold text-center text-yellow-600 mb-6">Login</h2>

        <form method="POST" action="/login">
            @csrf

            <!-- Username -->
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700">Nama Pengguna</label>
                <input type="text" name="username" id="username" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm">
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700">Kata Sandi</label>
                <input type="password" name="password" id="password" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm">
            </div>

            <!-- Tombol Login -->
            <div class="mb-4">
                <button type="submit"
                    class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded-md transition duration-200">
                    Masuk
                </button>
            </div>

            <!-- Link ke register -->
            <div class="text-center text-sm">
                Belum punya akun?
                <a href="{{ url('/register') }}" class="text-yellow-600 hover:underline font-semibold">
                    Daftar di sini
                </a>
            </div>
        </form>
    </div>
</body>
</html>
