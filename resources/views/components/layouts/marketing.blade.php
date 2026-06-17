<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Childminding Business Launch' }}</title>
    <meta name="description" content="{{ $description ?? 'Launch your own childminding business with a complete done-for-you programme.' }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="min-h-screen bg-warm-cream relative">
    <!-- Ambient Blur Background Elements -->
    <div class="ambient-glow-circle bg-[#008181]/4 w-[500px] h-[500px] -top-40 -left-40"></div>
    <div class="ambient-glow-circle bg-[#008181]/3 w-[400px] h-[400px] top-[40%] -right-40"></div>
    <div class="ambient-glow-circle bg-[#008181]/4 w-[550px] h-[550px] bottom-20 -left-20"></div>

    <div class="relative z-10 flex flex-col min-h-screen justify-between">
        <div>
            @include('layouts.partials.navbar')

            <main>
                {{ $slot }}
            </main>
        </div>

        @include('layouts.partials.footer')
    </div>
    @livewireScripts
</body>
</html>
