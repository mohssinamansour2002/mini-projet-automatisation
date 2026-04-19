<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-100 font-sans antialiased text-slate-900">
    <div class="relative min-h-screen overflow-x-hidden">
        <div class="absolute inset-0 -z-10 bg-[radial-gradient(circle_at_top_left,_rgba(59,130,246,0.12),_transparent_30%),radial-gradient(circle_at_top_right,_rgba(79,70,229,0.14),_transparent_24%),linear-gradient(to_bottom,_#f8fafc,_#eef2ff_45%,_#f8fafc)]"></div>

        @include('layouts.navigation')

        @isset($header)
            <header class="relative">
                <div class="mx-auto max-w-7xl px-4 pb-2 pt-6 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <main class="relative z-0">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
