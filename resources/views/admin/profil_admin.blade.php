<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tim Admin - SpeedZone</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-yellow-100 font-sans">

  <!-- Navbar -->
<header class="bg-gradient-to-r from-yellow-400 to-yellow-600 p-6 shadow-lg relative flex items-center justify-center">
  <a href="javascript:history.back()" class="absolute left-6 text-3xl font-semibold text-white hover:text-yellow-200">&larr;</a>
  <h1 class="text-2xl md:text-3xl font-bold text-white">Tim Administrator</h1>
</header>

  <!-- Main Content -->
<main class="py-10 px-6 max-w-7xl mx-auto">
  <h2 class="text-3xl font-bold text-yellow-300 mb-8 text-center">Daftar Tim Admin</h2>
  
  <!-- Grid 2 Admin Atas dan 2 Admin Bawah -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8">
    
    <!-- Admin 1 -->
    <div class="bg-gray-800 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all duration-300 border border-yellow-300">
      <div class="p-5 flex flex-col items-center">
        <img src="images/admin1.jpg" alt="Admin 1" class="w-24 h-24 rounded-full border-4 border-yellow-400 shadow mb-4">
        <h3 class="text-lg font-bold text-yellow-200">Raid Aqil Athallah</h3>
        <p class="text-sm text-yellow-400 mb-3">Super Admin</p>
        <ul class="text-sm text-yellow-100 space-y-1 mb-4 text-center">
          <li>Email: <span class="text-yellow-300">Raid@speedzone.com</span></li>
          <li>No HP: <span class="text-yellow-300">08123456789</span></li>
        </ul>
        <div class="flex gap-4">
          <button class="text-xs bg-yellow-400 text-blue-950 px-4 py-1 rounded hover:bg-yellow-300 font-semibold">Lihat</button>
          <button class="text-xs bg-blue-800 text-yellow-200 px-4 py-1 rounded hover:bg-blue-700">Edit</button>
          <button class="text-xs bg-red-600 text-white px-4 py-1 rounded hover:bg-red-500">Hapus</button>
        </div>
      </div>
    </div>
    
    <!-- Admin 2 -->
    <div class="bg-gray-800 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all duration-300 border border-yellow-300">
      <div class="p-5 flex flex-col items-center">
        <img src="images/admin2.jpg" alt="Admin 2" class="w-24 h-24 rounded-full border-4 border-yellow-400 shadow mb-4">
        <h3 class="text-lg font-bold text-yellow-200">Dionaldi Sion Yosua</h3>
        <p class="text-sm text-yellow-400 mb-3">Admin 1</p>
        <ul class="text-sm text-yellow-100 space-y-1 mb-4 text-center">
          <li>Email: <span class="text-yellow-300">Dionaldi@speedzone.com</span></li>
          <li>No HP: <span class="text-yellow-300">08234567890</span></li>
        </ul>
        <div class="flex gap-4">
          <button class="text-xs bg-yellow-400 text-blue-950 px-4 py-1 rounded hover:bg-yellow-300 font-semibold">Lihat</button>
          <button class="text-xs bg-blue-800 text-yellow-200 px-4 py-1 rounded hover:bg-blue-700">Edit</button>
          <button class="text-xs bg-red-600 text-white px-4 py-1 rounded hover:bg-red-500">Hapus</button>
        </div>
      </div>
    </div>
    
    <!-- Admin 3 (Ditempatkan di bawah) -->
    <div class="bg-gray-800 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all duration-300 border border-yellow-300">
      <div class="p-5 flex flex-col items-center">
        <img src="images/admin3.jpg" alt="Admin 3" class="w-24 h-24 rounded-full border-4 border-yellow-400 shadow mb-4">
        <h3 class="text-lg font-bold text-yellow-200">Frima Rizky Lianda</h3>
        <p class="text-sm text-yellow-400 mb-3">Admin 2</p>
        <ul class="text-sm text-yellow-100 space-y-1 mb-4 text-center">
          <li>Email: <span class="text-yellow-300">Liaa@speedzone.com</span></li>
          <li>No HP: <span class="text-yellow-300">08345678901</span></li>
        </ul>
        <div class="flex gap-4">
          <button class="text-xs bg-yellow-400 text-blue-950 px-4 py-1 rounded hover:bg-yellow-300 font-semibold">Lihat</button>
          <button class="text-xs bg-blue-800 text-yellow-200 px-4 py-1 rounded hover:bg-blue-700">Edit</button>
          <button class="text-xs bg-red-600 text-white px-4 py-1 rounded hover:bg-red-500">Hapus</button>
        </div>
      </div>
    </div>
    
    <!-- Admin 4 (Ditempatkan di bawah) -->
    <div class="bg-gray-800 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all duration-300 border border-yellow-300">
      <div class="p-5 flex flex-col items-center">
        <img src="images/admin4.jpg" alt="Admin 4" class="w-24 h-24 rounded-full border-4 border-yellow-400 shadow mb-4">
        <h3 class="text-lg font-bold text-yellow-200">Asnil Adrian Sagita</h3>
        <p class="text-sm text-yellow-400 mb-3">Admin 3</p>
        <ul class="text-sm text-yellow-100 space-y-1 mb-4 text-center">
          <li>Email: <span class="text-yellow-300">Asnil@speedzone.com</span></li>
          <li>No HP: <span class="text-yellow-300">08765432109</span></li>
        </ul>
        <div class="flex gap-4">
          <button class="text-xs bg-yellow-400 text-blue-950 px-4 py-1 rounded hover:bg-yellow-300 font-semibold">Lihat</button>
          <button class="text-xs bg-blue-800 text-yellow-200 px-4 py-1 rounded hover:bg-blue-700">Edit</button>
          <button class="text-xs bg-red-600 text-white px-4 py-1 rounded hover:bg-red-500">Hapus</button>
        </div>
      </div>
    </div>

  </div>
</main>

    </div>
  </main>

 <!-- Kontak dan Sosial Media -->
<section class="bg-yellow-400 text-gray-900 py-10">
  <div class="max-w-7xl mx-auto px-6 text-center">
    <h2 class="text-2xl font-bold mb-4">Informasi Lanjut</h2>
    <p class="mb-6 text-sm">Butuh bantuan atau ingin terhubung? Silakan kontak kami melalui platform berikut:</p>
    <div class="flex justify-center gap-10 flex-wrap text-sm font-medium">
      <a href="mailto:support@speedzone.com" class="flex items-center gap-2 hover:text-blue-800 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
          viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round"
          d="M16 12H8m0 0h.01M8 12V6a2 2 0 012-2h4a2 2 0 012 2v6m-6 0v6a2 2 0 002 2h0a2 2 0 002-2v-6"></path></svg>
        support@speedzone.com
      </a>

      <a href="https://instagram.com/speedzone_id" target="_blank" class="flex items-center gap-2 hover:text-pink-700 transition">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M7 2C4.8 2 3 3.8 3 6v12c0 2.2 1.8 4 4 4h10c2.2 0 4-1.8 4-4V6c0-2.2-1.8-4-4-4H7zm10 2a2 2 0 012 2v12a2 2 0 01-2 2H7a2 2 0 01-2-2V6a2 2 0 012-2h10zM12 7a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6zm4.5-.75a1.25 1.25 0 11-2.5 0 1.25 1.25 0 012.5 0z"/>
        </svg>
        @speedzone_id
      </a>

      <a href="tel:+6281234567890" class="flex items-center gap-2 hover:text-green-700 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
          viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round"
          d="M3 5a2 2 0 012-2h3.6a1 1 0 01.95.68l1.3 3.9a1 1 0 01-.21 1.03L9.24 10.76a16.07 16.07 0 006 6l2.15-2.15a1 1 0 011.03-.21l3.9 1.3a1 1 0 01.68.95V19a2 2 0 01-2 2h-1C10.7 21 3 13.3 3 4V5z"></path></svg>
        +62 812-3456-7890
      </a>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-gray-800 border-t border-yellow-600 py-6 mt-0">
  <div class="max-w-7xl mx-auto px-6 text-center text-yellow-300 text-sm">
    &copy; 2025 SpeedZone. All rights reserved.
  </div>
</footer>

</body>
</html>
