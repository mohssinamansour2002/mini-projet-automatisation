<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formation App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-950 text-white antialiased">
    <div class="relative isolate overflow-hidden">
        <div class="absolute inset-0 -z-10 bg-[radial-gradient(circle_at_top,_rgba(59,130,246,0.22),_transparent_30%),radial-gradient(circle_at_bottom_right,_rgba(79,70,229,0.18),_transparent_25%),linear-gradient(to_bottom,_#020617,_#0f172a_45%,_#020617)]"></div>
        <div class="absolute -left-24 top-20 -z-10 h-72 w-72 rounded-full bg-blue-500/20 blur-3xl"></div>
        <div class="absolute right-0 top-0 -z-10 h-80 w-80 rounded-full bg-indigo-500/15 blur-3xl"></div>

        <header class="mx-auto flex w-full max-w-7xl items-center justify-between px-6 py-6 lg:px-8">
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <span class="flex h-11 w-11 items-center justify-center rounded-2xl bg-gradient-to-br from-blue-500 to-indigo-500 text-sm font-bold text-white shadow-lg shadow-blue-900/20">
                    FA
                </span>
                <div>
                    <p class="text-sm font-semibold tracking-tight text-white">Formation App</p>
                    <p class="text-xs text-slate-400">Laravel project</p>
                </div>
            </a>

            <div class="flex items-center gap-3">
                @auth
                    <a href="{{ route('dashboard') }}" class="rounded-xl border border-white/10 bg-white/10 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-white/15">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="rounded-xl border border-white/10 bg-white/5 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-white/10">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="rounded-xl bg-gradient-to-r from-blue-500 to-indigo-500 px-5 py-2.5 text-sm font-semibold text-white shadow-lg shadow-blue-900/20 transition hover:from-blue-400 hover:to-indigo-400">
                        Register
                    </a>
                @endauth
            </div>
        </header>

        <main class="mx-auto flex min-h-[calc(100vh-96px)] w-full max-w-7xl flex-col justify-center px-6 pb-16 pt-10 lg:px-8">
            <section class="mx-auto flex max-w-4xl flex-col items-center text-center">
                <span class="inline-flex items-center rounded-full border border-white/10 bg-white/10 px-4 py-1.5 text-sm font-medium text-slate-200 backdrop-blur">
                    Modern Laravel application
                </span>

                <h1 class="mt-8 text-5xl font-semibold tracking-tight text-white sm:text-6xl lg:text-7xl">
                    <span class="bg-gradient-to-r from-blue-400 via-indigo-300 to-white bg-clip-text text-transparent">
                        Formation App
                    </span>
                </h1>

                <p class="mt-4 text-lg font-medium text-indigo-200">
                    Laravel + Docker + CI/CD
                </p>

                <p class="mt-6 max-w-2xl text-sm leading-7 text-slate-300 sm:text-base">
                    Une interface simple, moderne et propre pour presenter votre projet,
                    structurer votre espace applicatif et donner une image plus premium a votre plateforme.
                </p>

                <div class="mt-10 flex flex-col gap-3 sm:flex-row">
                    <a href="{{ auth()->check() ? route('dashboard') : route('login') }}" class="inline-flex items-center justify-center rounded-xl bg-gradient-to-r from-blue-500 to-indigo-500 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-blue-900/25 transition hover:scale-[1.01] hover:from-blue-400 hover:to-indigo-400">
                        Ouvrir le dashboard
                    </a>

                    @guest
                        <a href="{{ route('login') }}" class="inline-flex items-center justify-center rounded-xl border border-white/10 bg-white/5 px-6 py-3 text-sm font-semibold text-white transition hover:bg-white/10">
                            Acceder a mon espace
                        </a>
                    @endguest
                </div>
            </section>

        </main>
    </div>
</body>
</html>
