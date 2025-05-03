<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pembayaran | SpeedZone</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white font-sans">

<!-- ==================== Ringkasan Pembayaran ==================== -->
<header class="bg-gradient-to-r from-yellow-400 to-yellow-600 p-6 shadow-lg relative flex items-center justify-center">
  <a href="javascript:history.back()" class="absolute left-6 text-3xl font-semibold text-white hover:text-yellow-200">&larr;</a>
  <h1 class="text-2xl md:text-3xl font-bold text-white">Ringkasan Pembelian</h1>
</header>

<main class="max-w-5xl mx-auto py-10 px-4">
  <h1 class="text-3xl font-bold text-yellow-300 mb-6">Ringkasan Pembayaran</h1>

  <div class="bg-gray-800 p-6 rounded-lg shadow-lg flex items-center justify-between">
    <div class="flex items-center gap-6">
      <img src="images/Honda1.jpg" alt="Produk Motor" class="rounded-lg w-48 h-48 object-cover">
      <div>
        <h2 class="font-semibold text-white text-2xl">Motor Model XYZ</h2>
        <p class="text-sm text-gray-400">Deskripsi motor demo yang sangat stylish dan modern.</p>
      </div>
    </div>
    <div class="text-right">
      <p class="font-semibold text-yellow-400 text-2xl" id="harga">Rp 40.000.000</p>
    </div>
  </div>

  <div class="bg-gray-800 p-4 rounded-lg mt-6">
    <div class="flex justify-between text-lg">
      <span class="font-semibold">Total Pembelian</span>
      <span class="font-bold text-yellow-400">Rp 40.000.000</span>
    </div>
    <div class="flex justify-between text-lg mt-2">
      <span class="font-semibold">Pengiriman</span>
      <span class="font-bold text-yellow-400">Gratis</span>
    </div>
    <div class="border-t border-gray-600 mt-4 pt-4 flex justify-between text-xl">
      <span class="font-semibold">Total Tagihan</span>
      <span class="font-bold text-yellow-400">Rp 40.000.000</span>
    </div>
  </div>

  <!-- Metode Pembayaran -->
  <div class="bg-gray-800 p-6 rounded-lg mt-6">
    <h2 class="text-xl font-semibold text-yellow-300 mb-4">Pilih Metode Pembayaran</h2>

    <label class="flex items-center gap-2 mb-4">
      <input type="radio" id="vaTransfer" name="paymentMethod" class="h-5 w-5 text-yellow-400" checked />
      <span class="text-white">Transfer Bank via Virtual Account</span>
    </label>

    <div id="bankSelection" class="mb-6">
      <label class="block text-white mb-2">Pilih Bank</label>
      <select id="bank" class="w-full p-3 rounded-lg bg-gray-700 border border-gray-600 text-white">
        <option value="">-- Pilih Bank --</option>
        <option value="BCA">BCA</option>
        <option value="BRI">BRI</option>
        <option value="BNI">BNI</option>
        <option value="Mandiri">Mandiri</option>
      </select>
    </div>

    <div class="mb-6">
      <label class="text-white block mb-2">Pilih Opsi Pengiriman</label>
      <select id="deliveryOption" class="w-full p-3 rounded-lg bg-gray-700 border border-gray-600 text-white">
        <option value="antar">Diantar ke Rumah</option>
        <option value="ambil">Ambil di Dealer</option>
      </select>
    </div>

    <div class="space-y-4">
      <input id="fullName" placeholder="Nama Lengkap" class="w-full p-3 rounded-lg bg-gray-700 border border-gray-600 text-white" />
      <input id="address" placeholder="Alamat Pengiriman" class="w-full p-3 rounded-lg bg-gray-700 border border-gray-600 text-white" />
      <input id="phone" placeholder="Nomor Telepon" class="w-full p-3 rounded-lg bg-gray-700 border border-gray-600 text-white" />
    </div>

    <button onclick="openPaymentDetails()" class="mt-6 bg-yellow-400 hover:bg-yellow-500 text-blue-900 px-6 py-3 rounded-lg font-semibold shadow-md w-full">
      Konfirmasi Pembayaran
    </button>
  </div>

  <!-- Modal Pembayaran Virtual Account -->
<div id="vaModal" class="hidden fixed inset-0 flex justify-center items-center bg-black bg-opacity-70 z-50">
  <div class="bg-gray-500 p-6 rounded-xl w-full max-w-xl relative shadow-xl">
    <button onclick="closeModal()" class="absolute top-4 right-4 text-white text-2xl">&times;</button>

    <h2 class="text-xl font-semibold text-yellow-300 mb-4 text-center">Pembayaran Virtual Account</h2>

    <div class="text-center mb-4">
      <p class="text-black">Transfer ke Virtual Account:</p>
      <p id="vaNumber" class="text-lg font-semibold text-blue-900 select-text">1234567890123456</p>
      <p class="text-sm text-black">Atas Nama: <strong>SpeedZone</strong></p>
    </div>

    <div class="bg-yellow-100 rounded-xl p-3 text-center mb-4">
      <p class="text-gray-700">Jumlah Tagihan:</p>
      <p class="text-2xl font-bold text-yellow-600">Rp 40.000.000</p>
    </div>

    <div class="flex justify-center gap-4 mb-4">
      <button onclick="copyVA()" class="bg-blue-900 text-white px-4 py-2 rounded-xl hover:bg-blue-800">Salin Nomor VA</button>
      <button onclick="toggleInstruksi()" class="text-sm text-blue-400 underline">Lihat Instruksi</button>
    </div>

    <div class="hidden mt-4 bg-gray-50 rounded-xl p-4 text-sm text-gray-800" id="instruksiBox">
      <h3 class="font-semibold text-base mb-2">Instruksi Pembayaran</h3>
      <ul class="list-decimal list-inside space-y-1">
        <li>Buka aplikasi mobile banking Anda.</li>
        <li>Pilih menu <strong>Transfer</strong> → <strong>Virtual Account</strong>.</li>
        <li>Masukkan nomor VA: <strong>1234567890123456</strong></li>
        <li>Periksa nama penerima: <strong>SpeedZone</strong></li>
        <li>Masukkan nominal: <strong>Rp 40.000.000</strong></li>
        <li>Konfirmasi dan selesaikan pembayaran.</li>
      </ul>
      <button onclick="toggleInstruksi()" class="mt-4 text-blue-500 text-xs underline">Tutup Instruksi</button>
    </div>

    <div class="mt-6 border-t border-gray-600 pt-4">
  <h3 class="text-lg font-semibold text-yellow-500 mb-2 text-center">Konfirmasi Pembayaran</h3>
  <p class="text-sm text-black text-center mb-4">Setelah transfer selesai, klik tombol di bawah ini agar admin bisa memverifikasi pembayaranmu.</p>
  
  <a href="terimakasih" class="block text-center w-full bg-yellow-500 hover:bg-yellow-600 text-blue-900 font-bold py-2 rounded-lg">
    Saya Sudah Bayar
  </a>
</div>


</main>

<script>
  function openPaymentDetails() {
    const bank = document.getElementById("bank").value;
    const fullName = document.getElementById("fullName").value;
    const address = document.getElementById("address").value;
    const phone = document.getElementById("phone").value;

    if (!fullName || !address || !phone || !bank) {
      alert("Harap lengkapi semua data sebelum melanjutkan.");
      return;
    }
    // Tampilkan modal pembayaran virtual account
    document.getElementById("vaModal").classList.remove("hidden");
  }

  function copyVA() {
    const vaNumber = document.getElementById("vaNumber").textContent;
    navigator.clipboard.writeText(vaNumber);
    alert("Nomor VA telah disalin!");
  }

  function toggleInstruksi() {
    document.getElementById("instruksiBox").classList.toggle("hidden");
  }

  function closeModal() {
    document.getElementById("vaModal").classList.add("hidden");
  }

  function konfirmasiBayar() {
    document.getElementById("notifBerhasil").classList.remove("hidden");
  }
</script>

</body>
</html>
