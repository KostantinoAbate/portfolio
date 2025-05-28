<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', $locale) }}" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kostantino Abate</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Unica+One&display=swap" rel="stylesheet">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <style>
            .cp {
                cursor: url({{ asset('assets/pointer.png') }}), auto;
            }

            .cd {
                cursor: url({{ asset('assets/default.png') }}), auto;
            }

            .ct {
                cursor: url({{ asset('assets/text.png') }}), auto;
            }

            p, p * {
                cursor: url({{ asset('assets/text.png') }}), auto;
            }

            *, html {
                cursor: url({{ asset('assets/default.png') }}), auto;
            }

            a, a *, button, button * {
                cursor: url({{ asset('assets/pointer.png') }}), auto;
            }
        </style>
    @else
        {{-- Fallback --}}
    @endif
</head>
<body class="relative w-full min-h-screen">
    <div class="w-full h-screen">
        <x-layout.block.header/>
        <x-layout.block.sidebar/>
        <x-layout.block.mobile-menu/>

        {{ $slot }}

        <x-layout.block.footer/>

    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({once: true,});
    </script>
</body>
</html>
