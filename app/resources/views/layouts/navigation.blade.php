<nav x-data="{ open: false, userMenuOpen: false }" class="relative z-[500] isolate">
    <div class="mx-auto max-w-7xl overflow-visible px-4 pt-4 sm:px-6 lg:px-8">
        <div class="overflow-visible rounded-2xl border border-white/70 bg-white/80 px-4 py-3 shadow-lg shadow-slate-200/60 backdrop-blur sm:px-6">
            <div class="flex items-center justify-between gap-4">
                <div class="flex items-center gap-8">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3">
                        <span class="flex h-11 w-11 items-center justify-center rounded-2xl bg-gradient-to-br from-blue-600 to-indigo-600 text-sm font-bold text-white shadow-lg shadow-blue-900/20">
                            FA
                        </span>
                        <div>
                            <p class="text-sm font-semibold tracking-tight text-slate-950">Formation App</p>
                            <p class="text-xs text-slate-500">Laravel workspace</p>
                        </div>
                    </a>

                    <div class="hidden items-center gap-2 md:flex">
                        <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'bg-slate-950 text-white shadow-lg shadow-slate-900/10' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-950' }} rounded-xl px-4 py-2 text-sm font-medium transition">
                            Dashboard
                        </a>
                        <a href="{{ route('formations.index') }}" class="{{ request()->routeIs('formations.index') ? 'bg-slate-950 text-white shadow-lg shadow-slate-900/10' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-950' }} rounded-xl px-4 py-2 text-sm font-medium transition">
                            Formations
                        </a>
                        <a href="{{ route('profile.edit') }}" class="{{ request()->routeIs('profile.*') ? 'bg-slate-950 text-white shadow-lg shadow-slate-900/10' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-950' }} rounded-xl px-4 py-2 text-sm font-medium transition">
                            Profile
                        </a>
                    </div>
                </div>

                <div class="hidden items-center gap-3 sm:flex">
                    <div class="rounded-xl border border-slate-200 bg-slate-50 px-3 py-2 text-right">
                        <p class="text-xs font-medium uppercase tracking-[0.18em] text-slate-400">Signed in</p>
                        <p class="text-sm font-semibold text-slate-900">{{ Auth::user()->name }}</p>
                    </div>

                    <div class="relative isolate overflow-visible" @click.outside="userMenuOpen = false">
                        <button
                            type="button"
                            @click="userMenuOpen = ! userMenuOpen"
                            class="inline-flex items-center gap-3 rounded-2xl border border-slate-200 bg-white px-3 py-2 text-sm font-medium text-slate-700 shadow-sm transition hover:border-slate-300 hover:text-slate-950 focus:outline-none"
                        >
                            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-gradient-to-br from-blue-600 to-indigo-600 font-semibold text-white">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </span>
                            <span class="hidden text-left lg:block">
                                <span class="block text-sm font-semibold text-slate-900">{{ Auth::user()->name }}</span>
                                <span class="block text-xs text-slate-500">{{ Auth::user()->email }}</span>
                            </span>
                            <svg class="h-4 w-4 text-slate-400 transition" :class="{ 'rotate-180': userMenuOpen }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.51a.75.75 0 01-1.08 0l-4.25-4.51a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                        </button>

                        <div
                            x-cloak
                            x-show="userMenuOpen"
                            x-transition:enter="transition ease-out duration-150"
                            x-transition:enter-start="opacity-0 -translate-y-1"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-100"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 -translate-y-1"
                            class="absolute right-0 top-[calc(100%+12px)] z-[9999] w-72 overflow-hidden rounded-2xl border border-slate-700 bg-slate-950 p-2 text-white shadow-2xl shadow-slate-900/50 ring-1 ring-slate-800"
                            style="display: none;"
                        >
                            <div class="rounded-xl bg-white/5 px-4 py-3">
                                <p class="text-sm font-semibold text-white">{{ Auth::user()->name }}</p>
                                <p class="mt-1 text-xs text-slate-400">{{ Auth::user()->email }}</p>
                            </div>

                            <div class="mt-2 space-y-1">
                                <a
                                    href="{{ route('profile.edit') }}"
                                    class="block rounded-xl px-4 py-3 text-sm font-medium text-slate-200 transition hover:bg-white/10 hover:text-white"
                                >
                                    Profile settings
                                </a>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button
                                        type="submit"
                                        class="block w-full rounded-xl px-4 py-3 text-left text-sm font-medium text-rose-300 transition hover:bg-rose-500/10 hover:text-rose-200"
                                    >
                                        Log Out
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <button @click="open = ! open" class="inline-flex items-center justify-center rounded-xl border border-slate-200 bg-white p-2 text-slate-600 transition hover:border-slate-300 hover:text-slate-950 sm:hidden">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div x-show="open" x-transition class="mt-4 space-y-3 border-t border-slate-200 pt-4 sm:hidden" style="display: none;">
                <a href="{{ route('dashboard') }}" class="block rounded-xl px-4 py-3 text-sm font-medium {{ request()->routeIs('dashboard') ? 'bg-slate-950 text-white' : 'bg-slate-50 text-slate-700' }}">
                    Dashboard
                </a>
                <a href="{{ route('formations.index') }}" class="block rounded-xl px-4 py-3 text-sm font-medium {{ request()->routeIs('formations.index') ? 'bg-slate-950 text-white' : 'bg-slate-50 text-slate-700' }}">
                    Formations
                </a>
                <a href="{{ route('profile.edit') }}" class="block rounded-xl px-4 py-3 text-sm font-medium {{ request()->routeIs('profile.*') ? 'bg-slate-950 text-white' : 'bg-slate-50 text-slate-700' }}">
                    Profile
                </a>

                <div class="rounded-xl bg-slate-50 px-4 py-3">
                    <p class="text-sm font-semibold text-slate-900">{{ Auth::user()->name }}</p>
                    <p class="text-sm text-slate-500">{{ Auth::user()->email }}</p>
                </div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a
                        href="{{ route('logout') }}"
                        class="block rounded-xl bg-rose-50 px-4 py-3 text-sm font-medium text-rose-600"
                        onclick="event.preventDefault(); this.closest('form').submit();"
                    >
                        Log Out
                    </a>
                </form>
            </div>
        </div>
    </div>
</nav>
