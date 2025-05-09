<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $title ?? 'SpeedZone' }} - Temukan Motor Impian Anda</title>
  <link href="{{ asset('styles/flowbite.min.css') }}" rel="stylesheet" />
  <script src="{{ asset('styles/flowbite.min.js') }}"></script>

  @vite('resources/css/app.css')

  <link href="https://unpkg.com/@phosphor-icons/web@2.0.3/src/css/icons.css" rel="stylesheet">
  
</head>
<body class="bg-gray-900 font-sans text-yellow-300">
  @include('components.menu')
  @yield('content')
</body>
</html>
