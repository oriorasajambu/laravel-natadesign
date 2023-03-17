<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @yield('head')
    <meta name="theme-color" content="#10403C"/>
</head>

<body class="overflow-x-hidden bg-partial scroll-smooth">
    @yield('content')

    <script src="{{ asset('js/jquery/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery/jquery-ui/jquery-ui.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery/jquery-form.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery/script.js') }}" defer></script>

    @yield('scripts')
</body>

</html>
