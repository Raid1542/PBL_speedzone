<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Konfirmasi Pembayaran | SpeedZone</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <div class="min-h-screen flex flex-col items-center justify-center p-4">
    <div class="bg-white rounded-2xl shadow-xl p-6 w-full max-w-md">

      <!-- Judul -->
      <h2 class="text-xl font-bold text-center text-yellow-500 mb-4">Pembayaran Virtual Account</h2>

      <!-- Info VA -->
      <div class="text-center mb-4">
        <p class="text-gray-600">Transfer ke Virtual Account:</p>
        <p id="vaNumber" class="text-lg font-semibold text-blue-900 select-text">1234567890123456</p>
        <p class="text-sm text-gray-500">Atas Nama: <strong>SpeedZone</strong></p>
      </div>

      <!-- Total Pembayaran -->
      <div class="bg-yellow-100 rounded-xl p-3 text-center mb-4">
        <p class="text-gray-700">Jumlah Tagihan:</p>
        <p class="text-2xl font-bold text-yellow-600">Rp 150.000</p>
      </div>

      <!-- Aksi -->
      <div class="flex flex-col sm:flex-row justify-between items-center mb-4 gap-3">
        <button onclick="copyVA()" class="bg-blue-900 text-white px-4 py-2 rounded-xl hover:bg-blue-800 w-full sm:w-auto">Salin Nomor VA</button>
        <button onclick="toggleInstruksi()" class="text-sm text-blue-600 underline w-full sm:w-auto text-center">Lihat Instruksi</button>
      </div>

      <!-- Tanggal Exp -->
      <p class="text-center text-xs text-gray-500">VA berlaku hingga: 04 Mei 2025 12:00 WIB</p>
      <p class="text-center text-sm text-gray-600 mt-2">Status: <span class="text-red-500 font-semibold">Menunggu Pembayaran</span></p>

      <!-- Instruksi -->
      <div id="instruksiBox" class="hidden mt-6 bg-gray-50 rounded-xl p-4 text-sm text-gray-800">
        <h3 class="font-semibold text-base mb-2">Instruksi Pembayaran</h3>
        <ul class="list-decimal list-inside space-y-1">
          <li>Buka aplikasi mobile banking Anda.</li>
          <li>Pilih menu <strong>Transfer</strong> → <strong>Virtual Account</strong>.</li>
          <li>Masukkan nomor VA: <strong>1234567890123456</strong></li>
          <li>Periksa nama penerima: <strong>SpeedZone</strong></li>
          <li>Masukkan nominal: <strong>Rp 150.000</strong></li>
          <li>Konfirmasi dan selesaikan pembayaran.</li>
        </ul>
        <button onclick="toggleInstruksi()" class="mt-4 text-blue-500 text-xs underline">Tutup Instruksi</button>
      </div>

      <!-- Konfirmasi Pembayaran -->
      <div class="mt-8 border-t border-gray-300 pt-6">
        <h3 class="text-lg font-semibold text-yellow-600 mb-4 text-center">Konfirmasi Pembayaran</h3>
        <p class="text-sm text-gray-600 mb-4 text-center">Setelah melakukan pembayaran, klik tombol di bawah ini untuk mengonfirmasi. Admin akan memverifikasi pembayaran Anda.</p>
        
        <button onclick="konfirmasiBayar()" class="w-full bg-yellow-500 hover:bg-yellow-600 text-blue-900 font-bold py-2 rounded-lg">
          Saya Sudah Bayar
        </button>

        <p id="notifBerhasil" class="text-green-600 text-sm mt-4 text-center hidden">Konfirmasi berhasil! Admin akan segera memverifikasi pembayaran Anda.</p>
      </div>

    </div>
  </div>

  <!-- Script -->
  <script>
    function copyVA() {
      const va = document.getElementById("vaNumber").innerText;
      navigator.clipboard.writeText(va).then(() => {
        alert("Nomor Virtual Account disalin!");
      });
    }

    function toggleInstruksi() {
      document.getElementById("instruksiBox").classList.toggle("hidden");
    }

    function konfirmasiBayar() {
      // Simulasi kirim data ke admin
      // Di tahap produksi, gunakan fetch/AJAX untuk kirim status ke server
      document.getElementById("notifBerhasil").classList.remove("hidden");
    }
  </script>

</body>
</html>
