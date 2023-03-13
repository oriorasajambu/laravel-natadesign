<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Playfair+Display:wght@400;500;600;700&display=swap">
    <script src="https://kit.fontawesome.com/f7e5c3263d.js" crossorigin="anonymous"></script>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @yield('head')
</head>

<body class="overflow-x-hidden bg-partial scroll-smooth">
    @yield('content')
    @yield('scripts')
</body>

</html>
