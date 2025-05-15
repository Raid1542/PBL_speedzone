<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title', 'SpeedZone')</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">
  @include('components.navbar')

  <main class="max-w-6xl mx-auto py-10 px-6">
    @yield('content')
  </main>
</body>
</html>
