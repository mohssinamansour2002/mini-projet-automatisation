<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-slate-950 font-sans antialiased text-white">
        <div class="relative isolate min-h-screen overflow-hidden">
            <div class="absolute inset-0 -z-10 bg-[radial-gradient(circle_at_top_left,_rgba(59,130,246,0.18),_transparent_28%),radial-gradient(circle_at_bottom_right,_rgba(79,70,229,0.16),_transparent_30%),linear-gradient(to_bottom,_#020617,_#0f172a_42%,_#020617)]"></div>
            <div class="absolute -left-24 top-24 -z-10 h-72 w-72 rounded-full bg-blue-500/20 blur-3xl"></div>
            <div class="absolute right-0 top-10 -z-10 h-80 w-80 rounded-full bg-indigo-500/15 blur-3xl"></div>

            <div class="mx-auto flex min-h-screen max-w-7xl flex-col px-6 py-8 lg:px-8">
                <header class="flex items-center justify-between">
                    <a href="{{ route('home') }}" class="flex items-center gap-3">
                        <span class="flex h-11 w-11 items-center justify-center rounded-2xl bg-gradient-to-br from-blue-500 to-indigo-500 text-sm font-bold text-white shadow-lg shadow-blue-900/20">
                            FA
                        </span>
                        <div>
                            <p class="text-sm font-semibold tracking-tight text-white">Formation App</p>
                            <p class="text-xs text-slate-400">Secure access</p>
                        </div>
                    </a>

                    <a href="{{ route('home') }}" class="rounded-xl border border-white/10 bg-white/5 px-4 py-2 text-sm font-semibold text-white transition hover:bg-white/10">
                        Retour a l'accueil
                    </a>
                </header>

                <main class="flex flex-1 items-center justify-center py-10">
                    <div class="grid w-full max-w-5xl gap-8 lg:grid-cols-[minmax(0,1fr)_460px] lg:items-center">

                        <section class="rounded-3xl border border-white/10 bg-white/10 p-6 shadow-2xl shadow-slate-950/20 backdrop-blur-xl sm:p-8">
                            {{ $slot }}
                        </section>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
