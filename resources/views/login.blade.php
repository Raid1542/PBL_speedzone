<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login | Speedzone</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background: url('gambar-anda.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Segoe UI', sans-serif;
    }
    .glass {
      background: rgba(0, 0, 0, 0.6);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border-radius: 1rem;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }
  </style>
</head>
<body class="flex items-center justify-center min-h-screen text-yellow-300">

  <div class="glass p-8 w-full max-w-md">
    <h2 class="text-3xl font-bold text-center mb-8 text-yellow-400">Login - SpeedZone</h2>

    <form action="#" method="POST">
      <div class="mb-4 relative">
        <input type="text" placeholder="Username" class="w-full px-4 py-3 pr-10 bg-transparent border border-yellow-300 rounded-full focus:outline-none focus:ring-2 focus:ring-yellow-500 text-yellow-200 placeholder-yellow-300"/>
        <span class="absolute right-4 top-1/2 transform -translate-y-1/2 text-yellow-400">
          <!-- Icon user -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A10.97 10.97 0 0112 15c2.485 0 4.779.805 6.879 2.158M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
        </span>
      </div>

      <div class="mb-4 relative">
        <input type="password" placeholder="Password" class="w-full px-4 py-3 pr-10 bg-transparent border border-yellow-300 rounded-full focus:outline-none focus:ring-2 focus:ring-yellow-500 text-yellow-200 placeholder-yellow-300"/>
        <span class="absolute right-4 top-1/2 transform -translate-y-1/2 text-yellow-400">
          <!-- Icon lock -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0-1.104.896-2 2-2s2 .896 2 2-2 4-2 4-2-2.896-2-4zM5 13l4 4 6-6" />
          </svg>
        </span>
      </div>

      <div class="flex items-center justify-between text-sm mb-6">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="form-checkbox text-yellow-400 bg-gray-800 border-yellow-400" />
          <span>Ingatkan Saya</span>
        </label>
      </div>

      <button type="submit" class="w-full bg-yellow-400 hover:bg-yellow-300 text-gray-900 font-semibold py-3 rounded-full transition text-lg">
        Masuk
      </button>
    </form>

    <div class="mt-6 text-center text-sm">
      <p>Belum Punya Akun?</p>
      <a href="register" class="underline hover:text-yellow-500">Register</a>
    </div>
  </div>

</body>
</html>
