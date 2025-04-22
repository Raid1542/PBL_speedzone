<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - Web Saya</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-xl p-8 w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-yellow-600 mb-6">Ubah Kata Sandi</h2>

        <form method="POST" action="/update-password">
            @csrf

            <!-- Password lama -->
            <div class="mb-4">
                <label for="current_password" class="block text-sm font-medium text-gray-700">Masukkan Kata Sandi Lama : </label>
                <input type="password" name="current_password" id="current_password" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm">
            </div>

            <!-- Password baru -->
            <div class="mb-4">
                <label for="new_password" class="block text-sm font-medium text-gray-700">Masukkan Kata Sandi Baru : </label>
                <input type="password" name="new_password" id="new_password" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm">
            </div>

            <!-- Tombol Simpan -->
            <div class="mb-4">
                <button type="submit"
                    class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded-md transition duration-200">
                    Konfirmasi
                </button>
            </div>
        </form>
    </div>
</body>
</html>
