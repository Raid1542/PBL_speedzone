<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Edit Profil | Speedzone</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

  <!-- Navbar -->
  <header class="bg-yellow-500 p-4 flex justify-between items-center gap-4 shadow-md">
    <div class="flex items-center">
      <a href="profil" class="text-2xl font-bold text-white hover:text-gray-900">&larr;</a>
      <h1 class="text-xl font-semibold text-white ml-4">Edit Profil</h1>
    </div>
  </header>

  <!-- Form Edit Profil -->
  <main class="max-w-2xl mx-auto py-10 px-6 bg-white rounded-lg shadow-lg mt-8">
    <form action="update_profil" method="POST" enctype="multipart/form-data" class="space-y-6">
      <!-- Nama -->
      <div>
        <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
        <input type="text" id="nama" name="nama" value="Frima Rizky Lianda" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500">
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" id="email" name="email" value="Liaa@email.com" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500">
      </div>

      <!-- Telepon -->
      <div>
        <label for="telepon" class="block text-sm font-medium text-gray-700">Telepon</label>
        <input type="text" id="telepon" name="telepon" value="+62 123 456 7890" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500">
      </div>

      <!-- Alamat -->
      <div>
        <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
        <textarea id="alamat" name="alamat" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500">Jl. Contoh Alamat No. 123, Jakarta</textarea>
      </div>

      <!-- Upload Foto Profil -->
      <div>
        <label for="foto_profil" class="block text-sm font-medium text-gray-700">Foto Profil</label>
        <input type="file" id="foto_profil" name="foto_profil" class="mt-1 block w-full text-sm text-gray-500">
      </div>

      <!-- Upload Foto KTP -->
      <div>
        <label for="foto_ktp" class="block text-sm font-medium text-gray-700">Foto KTP</label>
        <input type="file" id="foto_ktp" name="foto_ktp" class="mt-1 block w-full text-sm text-gray-500">
      </div>

      <!-- Tombol Simpan dan Batal -->
      <div class="flex justify-end gap-4">
        <a href="profil" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-6 rounded">
          Batal
        </a>
        <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-6 rounded">
          Simpan Perubahan
        </button>
      </div>
    </form>
  </main>

</body>
</html>
