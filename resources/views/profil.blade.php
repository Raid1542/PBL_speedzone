<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Profil | Speedzone</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

  <!-- Navbar -->
  <header class="bg-yellow-500 p-4 flex justify-between items-center gap-4 shadow-md">
    <div class="flex items-center">
      <a href="dashboard" class="text-2xl font-bold text-white hover:text-gray-900">&larr;</a>
      <h1 class="text-xl font-semibold text-white ml-4">Profil Saya</h1>
    </div>
  </header>

  <!-- Konten Profil -->
  <main class="max-w-4xl mx-auto py-10 px-6">
    <!-- Foto Profil & Nama -->
    <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col md:flex-row items-center gap-6">
      <!-- Foto Profil -->
      <div class="w-32 h-32 rounded-full overflow-hidden">
        <img src="images/lia.jpg" alt="Foto Profil" class="w-full h-full object-cover">
      </div>

      <!-- Info Profil -->
      <div class="text-center md:text-left">
        <h2 class="text-3xl font-semibold text-blue-900">Frima Rizky Lianda</h2>
      </div>
    </div>

    <!-- Info Pribadi -->
    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-6">
      <!-- Detail Kontak -->
      <div class="bg-white rounded-lg shadow-lg p-6">
        <h3 class="text-xl font-semibold text-blue-900 mb-4">Kontak</h3>
        <ul class="space-y-2">
          <li><strong>Email:</strong> Liaa@email.com</li>
          <li><strong>Telepon:</strong> +62 123 456 7890</li>
          <li><strong>Alamat:</strong> Jl. Contoh Alamat No. 123, Jakarta</li>
        </ul>
      </div>

      <!-- Foto KTP -->
      <div class="bg-white rounded-lg shadow-lg p-6">
        <h3 class="text-xl font-semibold text-blue-900 mb-4">Foto KTP</h3>
        <img src="https://via.placeholder.com/300x200" alt="Foto KTP" class="w-full h-auto object-cover rounded-md">
      </div>
    </div>

    <!-- Fitur Ubah Kata Sandi dan Tombol Logout -->
    <div class="mt-8 bg-white rounded-lg shadow-lg p-6">
      <h3 class="text-xl font-semibold text-blue-900 mb-4">Pengaturan Akun</h3>
      <div class="flex gap-4">
        <!-- Ubah Kata Sandi -->
        <a href="reset-password" class="w-full text-center bg-yellow-500 hover:bg-yellow-600 text-white py-2 px-4 rounded">Ubah Kata Sandi</a>
        <!-- Logout -->
        <a href="login" class="w-full text-center bg-yellow-500 hover:bg-yellow-600 text-white py-2 px-4 rounded">Logout</a>
      </div>
    </div>
  </main>

</body>
</html>
