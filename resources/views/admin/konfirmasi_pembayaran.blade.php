<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Konfirmasi Pembayaran - Admin | SpeedZone</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900 font-sans">

<header class="bg-yellow-500 p-6 shadow-md">
  <h1 class="text-2xl font-bold text-white">Dashboard Penjual - Konfirmasi Pembayaran</h1>
</header>

<main class="max-w-6xl mx-auto py-10 px-4">
  <h2 class="text-xl font-semibold text-gray-800 mb-6">Daftar Konfirmasi Pembayaran</h2>

  <!-- Tabel Konfirmasi -->
  <div class="overflow-x-auto bg-white shadow rounded-lg">
    <table class="min-w-full table-auto text-sm">
      <thead class="bg-yellow-100 text-yellow-700 uppercase text-left">
        <tr>
          <th class="px-6 py-3">Nama Pembeli</th>
          <th class="px-6 py-3">Bank</th>
          <th class="px-6 py-3">No. Telepon</th>
          <th class="px-6 py-3">Alamat</th>
          <th class="px-6 py-3">Total</th>
          <th class="px-6 py-3">Status</th>
          <th class="px-6 py-3">Aksi</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200">

        <!-- Contoh Data (Bisa diganti jadi loop PHP/JS/Backend) -->
        <tr>
          <td class="px-6 py-4">Frima Rizky</td>
          <td class="px-6 py-4">BCA</td>
          <td class="px-6 py-4">08123456789</td>
          <td class="px-6 py-4">Jl. Kebon Jeruk No. 123</td>
          <td class="px-6 py-4 font-bold text-yellow-600">Rp 40.000.000</td>
          <td class="px-6 py-4">
            <span class="px-2 py-1 bg-red-100 text-red-600 text-xs font-semibold rounded-full">Menunggu</span>
          </td>
          <td class="px-6 py-4 space-x-2">
            <button onclick="konfirmasiPembayaran(this)" class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded-md text-xs font-bold">
              Konfirmasi
            </button>
            <button onclick="prosesPengiriman(this)" class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-md text-xs font-bold">
              Proses Kirim
            </button>
          </td>
        </tr>

      </tbody>
    </table>
  </div>
</main>

<script>
  function konfirmasiPembayaran(button) {
    const row = button.closest('tr');
    row.querySelector('td:nth-child(6) span').textContent = "Terkonfirmasi";
    row.querySelector('td:nth-child(6) span').className = "px-2 py-1 bg-green-100 text-green-700 text-xs font-semibold rounded-full";
  }

  function prosesPengiriman(button) {
    const row = button.closest('tr');
    row.querySelector('td:nth-child(6) span').textContent = "Diproses";
    row.querySelector('td:nth-child(6) span').className = "px-2 py-1 bg-blue-100 text-blue-700 text-xs font-semibold rounded-full";
  }
</script>

</body>
</html>
