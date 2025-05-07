<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Terima Kasih | Pembayaran Berhasil</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .thank-you-animation {
      animation: fadeIn 1.5s ease-in-out;
    }
    @keyframes fadeIn {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body class="bg-gradient-to-r from-yellow-400 to-yellow-600 text-white font-sans h-screen flex flex-col justify-center items-center">

  <!-- Konten Terima Kasih -->
  <main class="max-w-5xl mx-auto text-center p-6 thank-you-animation">
    <h1 class="text-4xl font-bold mb-4 text-blue-900">Pembayaran Berhasil!</h1>
    <p class="text-lg text-blue-900 mb-6">Pastikan untuk memeriksa email Anda untuk informasi lebih lanjut mengenai status pesanan Anda.</p>
    
    <div class="flex justify-center gap-4">
      <a href="dashboard" class="bg-yellow-400 hover:bg-yellow-500 text-blue-900 px-6 py-3 rounded-lg font-semibold shadow-md transition-transform transform hover:scale-105">
        Kembali ke Beranda
      </a>
      <a href="pesanan_saya" class="bg-blue-500 hover:bg-blue-600 text-blue-900 px-6 py-3 rounded-lg font-semibold shadow-md transition-transform transform hover:scale-105">
        Cek Pesanan
      </a>
    </div>
  </main>

</body>
</html>
