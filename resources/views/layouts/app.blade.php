<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Laravel + BladewindUI' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BladewindUI CSS -->
    <link rel="stylesheet" href="/vendor/bladewind/css/bladewind-ui.min.css">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    @yield('content')

    <!-- BladewindUI JS -->
    <script src="/vendor/bladewind/js/bladewind-ui.min.js"></script>
</body>
</html>
