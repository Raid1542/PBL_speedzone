<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Web Saya</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-xl p-8 w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-yellow-600 mb-6">Buat Akun Baru</h2>

        <form method="POST" action="/register">
            @csrf

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Masukkan Email : </label>
                <input type="email" name="email" id="email" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm">
            </div>

            <!-- Username -->
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700">Masukkan Nama Pengguna : </label>
                <input type="text" name="username" id="username" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm">
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Masukkan Kata Sandi : </label>
                <input type="password" name="password" id="password" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm">
            </div>

            <!-- Konfirmasi Password -->
            <div class="mb-6">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Kata Sandi : </label>
                <input type="password" name="password_confirmation" id="password_confirmation" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm">
            </div>

            <!-- Tombol Daftar -->
            <div class="mb-4">
                <button type="submit"
                    class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded-md transition duration-200">
                    Daftar
                </button>
            </div>

            <!-- Link ke login -->
            <div class="text-center text-sm">
                Sudah punya akun?
                <a href="{{ url('/login') }}" class="text-yellow-600 hover:underline font-semibold">
                    Masuk di sini
                </a>
            </div>
        </form>
    </div>
</body>
</html>
