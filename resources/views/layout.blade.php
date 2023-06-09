<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <link rel="preload" href="{{ asset('fonts/playfair-display-v30-latin-regular.woff2') }}" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('fonts/dm-sans-v11-latin-regular.woff2') }}" as="font" type="font/woff2"
        crossorigin>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @yield('head')
    <meta name="theme-color" content="#10403C" />
</head>

<body id="body" class="overflow-x-hidden bg-partial scroll-smooth">
    <x-common.mobile-menu-component />
    @yield('content')

    <script src="{{ asset('js/jquery/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery/jquery-ui/jquery-ui.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery/jquery-form.min.js') }}" defer></script>
    <script>
        let targetUrl = "{{ route('send.contact') }}";
        let targetUrlEstimatePrice = "{{ route('inquiry.price') }}";
    </script>
    <script src="{{ asset('js/jquery/script.js') }}" defer></script>

    @yield('scripts')

    <script src="{{ asset('js/jquery/menu.js') }}" defer></script>

    <script>
        if (typeof navigator.serviceWorker !== 'undefined') {
            navigator.serviceWorker.register("{{ asset('sw.js') }}");
        }
    </script>
</body>

</html>
