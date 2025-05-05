<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Konfirmasi Pembayaran - Admin | SpeedZone</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-yellow-300 font-sans">

<!-- Navbar -->
<header class="bg-gradient-to-r from-yellow-400 to-yellow-600 p-6 shadow-lg relative flex items-center justify-center">
  <a href="javascript:history.back()" class="absolute left-6 text-3xl font-semibold text-white hover:text-yellow-200">&larr;</a>
  <h1 class="text-2xl md:text-3xl font-bold text-white">Konfirmasi Pembayaran</h1>
</header>

<!-- Konten -->
<main class="max-w-7xl mx-auto py-16 px-6">
  <h2 class="text-2xl font-bold text-yellow-400 mb-8 text-center">Daftar Pembayaran Menunggu Konfirmasi</h2>

  <div class="overflow-x-auto bg-gray-800 shadow-xl rounded-xl p-4">
    <table class="min-w-full table-auto text-sm text-yellow-300">
      <thead class="bg-yellow-600 text-gray-900 uppercase text-left">
        <tr>
          <th class="px-6 py-3">Nama</th>
          <th class="px-6 py-3">Bank</th>
          <th class="px-6 py-3">Telepon</th>
          <th class="px-6 py-3">Alamat</th>
          <th class="px-6 py-3">Total</th>
          <th class="px-6 py-3">Status</th>
          <th class="px-6 py-3">Aksi</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-700">

        <tr>
          <td class="px-6 py-4">Frima Rizky</td>
          <td class="px-6 py-4">BCA</td>
          <td class="px-6 py-4">08123456789</td>
          <td class="px-6 py-4">Jl. Kebon Jeruk No. 123</td>
          <td class="px-6 py-4 font-semibold text-yellow-400">Rp 40.000.000</td>
          <td class="px-6 py-4">
            <span class="px-2 py-1 bg-red-200 text-red-700 text-xs font-semibold rounded-full">Menunggu</span>
          </td>
          <td class="px-6 py-4">
            <div class="flex flex-wrap gap-2">
              <button onclick="updateStatus(this, 'Terkonfirmasi', 'green')"
                class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded-full text-xs font-bold">
                Konfirmasi
              </button>
              <button onclick="updateStatus(this, 'Diproses', 'blue')"
                class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-full text-xs font-bold">
                Proses Kirim
              </button>
              <button onclick="updateStatus(this, 'Dikirim', 'purple')"
                class="bg-purple-500 hover:bg-purple-600 text-white px-3 py-1 rounded-full text-xs font-bold">
                Dikirim
              </button>
              <button onclick="updateStatus(this, 'Diterima', 'gray')"
                class="bg-gray-500 hover:bg-gray-600 text-white px-3 py-1 rounded-full text-xs font-bold">
                Diterima
              </button>
            </div>
          </td>
        </tr>

      </tbody>
    </table>
  </div>
</main>

<script>
  function updateStatus(button, status, color) {
    const row = button.closest('tr');
    const statusSpan = row.querySelector('td:nth-child(6) span');

    const colorMap = {
      red: 'bg-red-200 text-red-700',
      green: 'bg-green-200 text-green-700',
      blue: 'bg-blue-200 text-blue-700',
      purple: 'bg-purple-200 text-purple-700',
      gray: 'bg-gray-300 text-gray-800'
    };

    statusSpan.textContent = status;
    statusSpan.className = `px-2 py-1 ${colorMap[color]} text-xs font-semibold rounded-full`;
  }
</script>

</body>
</html>
