<!DOCTYPE html>
<html lang="en">
<head>
    <!-- hanya load Tailwind -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @yield('content')
</body>
</html>