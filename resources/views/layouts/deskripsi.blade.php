<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? 'SpeedZone' }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 font-sans text-yellow-300">
  @include('components.deskripsi')

  <main class="min-h-screen">
    @yield('content')
  </main>
</body>
</html>
